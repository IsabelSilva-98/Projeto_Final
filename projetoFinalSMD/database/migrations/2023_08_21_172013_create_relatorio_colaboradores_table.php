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
        Schema::create('relatorio_colaboradores', function (Blueprint $table) {
            $table->integer('id_relatorio_colab', true);
            $table->date('data');
            $table->string('nome_colaborador', 30)->nullable();
            $table->integer('salario');
            $table->string('funcao', 50)->nullable();
            $table->string('equipa', 50)->nullable();
            $table->integer('id_funcionario')->index('id_funcionario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorio_colaboradores');
    }
};
