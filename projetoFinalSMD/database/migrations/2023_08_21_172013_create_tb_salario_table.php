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
        Schema::create('tb_salario', function (Blueprint $table) {
            $table->integer('id_salario', true);
            $table->double('salario');
            $table->date('data_inicio');
            $table->date('data_fim');
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
        Schema::dropIfExists('tb_salario');
    }
};
