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
        Schema::create('tb_calendario', function (Blueprint $table) {
            $table->integer('id_calendario', true);
            $table->time('hora');
            $table->date('dia');
            $table->string('nome_utente', 30)->nullable();
            $table->string('localizacao', 20)->nullable();
            $table->integer('id_consulta')->index('id_consulta');
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
        Schema::dropIfExists('tb_calendario');
    }
};
