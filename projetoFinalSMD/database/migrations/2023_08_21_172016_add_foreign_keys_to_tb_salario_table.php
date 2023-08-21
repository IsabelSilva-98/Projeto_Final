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
        Schema::table('tb_salario', function (Blueprint $table) {
            $table->foreign(['id_funcionario'], 'tb_salario_ibfk_1')->references(['id_funcionario'])->on('tb_funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_salario', function (Blueprint $table) {
            $table->dropForeign('tb_salario_ibfk_1');
        });
    }
};
