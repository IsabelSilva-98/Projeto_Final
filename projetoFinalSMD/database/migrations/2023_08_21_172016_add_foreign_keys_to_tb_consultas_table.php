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
        Schema::table('tb_consultas', function (Blueprint $table) {
            $table->foreign(['id_triagem'], 'tb_consultas_ibfk_1')->references(['id_triagem'])->on('tb_triagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_consultas', function (Blueprint $table) {
            $table->dropForeign('tb_consultas_ibfk_1');
        });
    }
};
