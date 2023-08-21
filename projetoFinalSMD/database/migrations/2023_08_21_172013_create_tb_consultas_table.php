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
        Schema::create('tb_consultas', function (Blueprint $table) {
            $table->integer('id_consulta', true);
            $table->string('diagnostico', 50)->nullable();
            $table->string('antecedentes', 50)->nullable();
            $table->string('medicacao', 50)->nullable();
            $table->integer('id_triagem')->index('id_triagem');
            $table->integer('id_utente');
            $table->integer('id_equipa');
            $table->string('nome_utente', 50)->nullable();
            $table->date('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_consultas');
    }
};
