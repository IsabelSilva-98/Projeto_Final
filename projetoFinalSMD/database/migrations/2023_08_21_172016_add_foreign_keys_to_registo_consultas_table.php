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
        Schema::table('registo_consultas', function (Blueprint $table) {
            $table->foreign(['id_consulta'], 'registo_consultas_ibfk_1')->references(['id_consulta'])->on('tb_consultas');
            $table->foreign(['id_utente'], 'registo_consultas_ibfk_3')->references(['id_utente'])->on('tb_utentes');
            $table->foreign(['id_equipa'], 'registo_consultas_ibfk_2')->references(['id_equipa'])->on('tb_equipas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registo_consultas', function (Blueprint $table) {
            $table->dropForeign('registo_consultas_ibfk_1');
            $table->dropForeign('registo_consultas_ibfk_3');
            $table->dropForeign('registo_consultas_ibfk_2');
        });
    }
};
