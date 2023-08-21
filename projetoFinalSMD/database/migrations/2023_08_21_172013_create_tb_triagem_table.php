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
        Schema::create('tb_triagem', function (Blueprint $table) {
            $table->integer('id_triagem', true);
            $table->double('peso');
            $table->double('altura');
            $table->double('colestrol');
            $table->double('glicose');
            $table->integer('tensao_diastolica');
            $table->integer('tensao_sistolica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_triagem');
    }
};
