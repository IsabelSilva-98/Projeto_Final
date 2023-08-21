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
        Schema::table('registo_equipas', function (Blueprint $table) {
            $table->foreign(['id_equipa'], 'registo_equipas_ibfk_1')->references(['id_funcionario'])->on('tb_funcionarios');
            $table->foreign(['id_funcionario'], 'registo_equipas_ibfk_2')->references(['id_equipa'])->on('tb_equipas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registo_equipas', function (Blueprint $table) {
            $table->dropForeign('registo_equipas_ibfk_1');
            $table->dropForeign('registo_equipas_ibfk_2');
        });
    }
};
