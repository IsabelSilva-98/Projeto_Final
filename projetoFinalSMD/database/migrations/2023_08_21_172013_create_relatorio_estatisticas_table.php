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
        Schema::create('relatorio_estatisticas', function (Blueprint $table) {
            $table->integer('id_relatorio_estat', true);
            $table->date('data');
            $table->integer('no_total_consultas');
            $table->integer('no_consultas_ultimo_dia');
            $table->integer('no_consultas_ultima_semana');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorio_estatisticas');
    }
};
