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
        Schema::table('tb_equipamento', function (Blueprint $table) {
            $table->foreign(['id_equipa'], 'tb_equipamento_ibfk_1')->references(['id_equipa'])->on('tb_equipas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_equipamento', function (Blueprint $table) {
            $table->dropForeign('tb_equipamento_ibfk_1');
        });
    }
};
