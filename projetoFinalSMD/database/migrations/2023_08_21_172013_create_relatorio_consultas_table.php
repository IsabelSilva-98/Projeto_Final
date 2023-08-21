<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio_consultas', function (Blueprint $table) {
            $table->integer('id_relatorio_consulta', true);
            $table->date('data');
            $table->string('nome_utente', 30)->nullable();
            $table->string('diagnostico', 20)->nullable();
            $table->integer('tensao_diastolica');
            $table->integer('tensao_sistolica');
            $table->integer('id_consulta')->index('id_consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorio_consultas');
    }
};
