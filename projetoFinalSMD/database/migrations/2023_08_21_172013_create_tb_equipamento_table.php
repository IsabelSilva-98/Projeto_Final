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
        Schema::create('tb_equipamento', function (Blueprint $table) {
            $table->integer('id_equipamento', true);
            $table->string('nome', 50)->nullable();
            $table->integer('quantidade');
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
        Schema::dropIfExists('tb_equipamento');
    }
};
