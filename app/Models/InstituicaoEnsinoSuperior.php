<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstituicaoEnsinoSuperior extends Model
{
    protected $table = 'instituicoes_ensino_superior';

    protected $fillable = [
        'codigo_ies',
        'nome',
        'sigla',
        'organizacao_academica',
        'uf',
    ];
}
