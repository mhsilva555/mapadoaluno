<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('instituicoes_ensino_superior', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('codigo_ies')->unique()->comment('Código da IES no MEC/e-MEC');
            $table->string('nome');
            $table->string('sigla')->nullable();
            $table->string('organizacao_academica')->nullable();
            $table->char('uf', 2)->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instituicoes_ensino_superior');
    }
};
