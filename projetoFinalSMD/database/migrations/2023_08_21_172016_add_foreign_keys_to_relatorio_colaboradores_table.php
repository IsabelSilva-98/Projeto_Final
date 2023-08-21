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
        Schema::table('relatorio_colaboradores', function (Blueprint $table) {
            $table->foreign(['id_funcionario'], 'relatorio_colaboradores_ibfk_1')->references(['id_funcionario'])->on('tb_funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relatorio_colaboradores', function (Blueprint $table) {
            $table->dropForeign('relatorio_colaboradores_ibfk_1');
        });
    }
};
