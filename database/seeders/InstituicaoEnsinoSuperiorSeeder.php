<?php

namespace Database\Seeders;

use App\Models\InstituicaoEnsinoSuperior;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class InstituicaoEnsinoSuperiorSeeder extends Seeder
{
    /**
     * Caminho do arquivo JSON local (relativo a storage/app).
     */
    private const JSON_PATH = 'ies/instituicoes.json';

    public function run(): void
    {
        $path = Storage::path(self::JSON_PATH);

        if (! file_exists($path)) {
            $this->command->error(
                'Arquivo JSON não encontrado em storage/app/private/' . self::JSON_PATH . '.' . PHP_EOL .
                'Execute primeiro: php artisan ies:sync'
            );
            return;
        }

        $this->command->info('Lendo arquivo JSON...');

        $allRecords = json_decode(file_get_contents($path), true);

        if (empty($allRecords)) {
            $this->command->error('Arquivo JSON está vazio ou inválido.');
            return;
        }

        // Filtra apenas as instituições Ativas
        $activeRecords = array_filter($allRecords, fn($r) => ($r['SITUACAO_IES'] ?? '') === 'Ativa');

        $this->command->info(sprintf('%d instituições Ativas encontradas. Inserindo...', count($activeRecords)));

        $now = now();

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
                ['codigo_ies'],
                ['nome', 'sigla', 'organizacao_academica', 'uf', 'updated_at']
            );
        }

        $this->command->info(sprintf('✔  %d instituições sincronizadas com sucesso!', count($activeRecords)));
    }
}
