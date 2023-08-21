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
        Schema::create('tb_funcionarios', function (Blueprint $table) {
            $table->integer('id_funcionario', true);
            $table->string('nome', 80)->nullable();
            $table->date('data_nascimento');
            $table->char('sexo', 1)->nullable();
            $table->string('email', 30)->nullable()->unique('email');
            $table->integer('contacto')->unique('contacto');
            $table->integer('id_funcao')->index('id_funcao');
            $table->integer('id_equipa')->index('id_equipa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_funcionarios');
    }
};
