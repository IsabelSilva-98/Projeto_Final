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
        Schema::create('registo_consultas', function (Blueprint $table) {
            $table->integer('id_consulta')->index('id_consulta');
            $table->integer('id_equipa')->index('id_equipa');
            $table->integer('id_utente')->index('id_utente');
            $table->date('data_consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registo_consultas');
    }
};
