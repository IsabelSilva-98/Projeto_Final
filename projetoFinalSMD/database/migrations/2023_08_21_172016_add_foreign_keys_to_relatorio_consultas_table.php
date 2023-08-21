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
        Schema::table('relatorio_consultas', function (Blueprint $table) {
            $table->foreign(['id_consulta'], 'relatorio_consultas_ibfk_1')->references(['id_consulta'])->on('tb_consultas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relatorio_consultas', function (Blueprint $table) {
            $table->dropForeign('relatorio_consultas_ibfk_1');
        });
    }
};
