<?php

namespace App\Console\Commands;

use App\Models\InstituicaoEnsinoSuperior;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class SyncIes extends Command
{
    /**
     * Signature do comando Artisan.
     */
    protected $signature = 'ies:sync';

    /**
     * Descrição do comando.
     */
    protected $description = 'Sincroniza as Instituições de Ensino Superior do Brasil (MEC/e-MEC) com o banco de dados local.';

    /**
     * URL base da API do MEC (OData).
     */
    private const API_URL = 'http://olinda.mec.gov.br/olinda-ide/servico/PDA_SERES/versao/v1/odata/PDA_Lista_Instituicoes_Ensino_Superior_do_Brasil_EMEC';

    /**
     * Quantidade de registros por requisição (página).
     */
    private const PAGE_SIZE = 500;

    /**
     * Caminho do arquivo JSON local (relativo a storage/app).
     */
    private const JSON_PATH = 'ies/instituicoes.json';

    public function handle(): int
    {
        $this->info('[1/4] Buscando dados da API do MEC...');

        $allRecords = $this->fetchAllRecords();

        if (empty($allRecords)) {
            $this->error('Nenhum registro retornado pela API. Abortando.');
            return self::FAILURE;
        }

        $this->info(sprintf('     → %d instituições obtidas no total.', count($allRecords)));

        // ------------------------------------------------------------------ //
        // 2. Salva o JSON bruto completo (todos os campos) no arquivo local
        // ------------------------------------------------------------------ //
        $this->info('[2/4] Salvando JSON bruto em storage/app/' . self::JSON_PATH . '...');
        Storage::put(self::JSON_PATH, json_encode($allRecords, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        $this->info('     → Arquivo salvo com sucesso.');

        // ------------------------------------------------------------------ //
        // 3. Filtra apenas as instituições Ativas e prepara o upsert
        // ------------------------------------------------------------------ //
        $this->info('[3/4] Sincronizando instituições Ativas no banco de dados...');

        $activeRecords = array_filter($allRecords, fn($r) => ($r['SITUACAO_IES'] ?? '') === 'Ativa');

        $now = now();

        // Monta os registros para upsert em batch
        $rows = array_map(fn($r) => [
            'codigo_ies'            => $r['CODIGO_DA_IES'],
            'nome'                  => $r['NOME_DA_IES'],
            'sigla'                 => $r['SIGLA'] ?: null,
            'organizacao_academica' => $r['ORGANIZACAO_ACADEMICA'] ?: null,
            'uf'                    => $r['UF'] ?: null,
            'created_at'            => $now,
            'updated_at'            => $now,
        ], $activeRecords);

        // Upsert em chunks de 500 para evitar queries gigantescas
        foreach (array_chunk($rows, 500) as $chunk) {
            InstituicaoEnsinoSuperior::upsert(
                $chunk,
                ['codigo_ies'],                                                  // chave única
                ['nome', 'sigla', 'organizacao_academica', 'uf', 'updated_at']  // colunas a atualizar
            );
        }

        $this->info(sprintf('     → %d instituições Ativas sincronizadas.', count($activeRecords)));

        // ------------------------------------------------------------------ //
        // 4. Remove do banco as instituições que não estão mais Ativas
        // ------------------------------------------------------------------ //
        $this->info('[4/4] Removendo instituições não mais Ativas do banco...');

        $activeCodigosIes = array_column($activeRecords, 'CODIGO_DA_IES');

        $deleted = InstituicaoEnsinoSuperior::whereNotIn('codigo_ies', $activeCodigosIes)->delete();

        $this->info(sprintf('     → %d registro(s) removido(s).', $deleted));

        $this->info('');
        $this->info('✔  Sincronização concluída com sucesso!');

        return self::SUCCESS;
    }

    /**
     * Busca todos os registros da API do MEC usando paginação ($top / $skip).
     * Usa retry com backoff exponencial para tolerar instabilidades da API.
     *
     * @return array<int, array<string, mixed>>
     */
    private function fetchAllRecords(): array
    {
        $allRecords = [];
        $skip = 0;

        do {
            $this->line(sprintf('     → Buscando página (skip=%d, top=%d)...', $skip, self::PAGE_SIZE));

            $page = $this->fetchPage($skip);

            if ($page === null) {
                $this->error(sprintf('     ✗  Falha persistente na página skip=%d. Abortando busca.', $skip));
                break;
            }

            if (empty($page)) {
                break;
            }

            $allRecords = array_merge($allRecords, $page);
            $skip += self::PAGE_SIZE;

            usleep(300_000); // 300ms entre páginas para não sobrecarregar a API

        } while (count($page) === self::PAGE_SIZE);

        return $allRecords;
    }

    /**
     * Busca uma única página da API com até 5 tentativas e backoff exponencial.
     * Captura tanto erros HTTP quanto ConnectionException (timeout, rede).
     *
     * @return array<int, array<string, mixed>>|null  null em caso de falha persistente
     */
    private function fetchPage(int $skip): ?array
    {
        $maxRetries = 5;
        $waitSeconds = 5;

        for ($attempt = 1; $attempt <= $maxRetries; $attempt++) {
            try {
                $response = Http::timeout(90)->get(self::API_URL, [
                    '$top'    => self::PAGE_SIZE,
                    '$skip'   => $skip,
                    '$format' => 'json',
                ]);

                if ($response->successful()) {
                    return $response->json('value', []);
                }

                $this->warn(sprintf(
                    '     ⚠  HTTP %d (tentativa %d/%d). Aguardando %ds...',
                    $response->status(), $attempt, $maxRetries, $waitSeconds
                ));

            } catch (ConnectionException $e) {
                $this->warn(sprintf(
                    '     ⚠  Timeout/conexão (tentativa %d/%d). Aguardando %ds...',
                    $attempt, $maxRetries, $waitSeconds
                ));
            }

            if ($attempt < $maxRetries) {
                sleep($waitSeconds);
                $waitSeconds = min($waitSeconds * 2, 120); // backoff exponencial, máx 120s
            }
        }

        return null; // todas as tentativas falharam
    }
}
