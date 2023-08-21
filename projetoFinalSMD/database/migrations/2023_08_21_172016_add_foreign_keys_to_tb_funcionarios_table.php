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
        Schema::table('tb_funcionarios', function (Blueprint $table) {
            $table->foreign(['id_funcao'], 'tb_funcionarios_ibfk_1')->references(['id_funcao'])->on('tb_funcoes');
            $table->foreign(['id_equipa'], 'tb_funcionarios_ibfk_2')->references(['id_equipa'])->on('tb_equipas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_funcionarios', function (Blueprint $table) {
            $table->dropForeign('tb_funcionarios_ibfk_1');
            $table->dropForeign('tb_funcionarios_ibfk_2');
        });
    }
};
