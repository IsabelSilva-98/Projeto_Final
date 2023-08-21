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
        Schema::create('tb_despesas', function (Blueprint $table) {
            $table->integer('id_despesa', true);
            $table->date('data');
            $table->double('combustivel');
            $table->double('mapa_km');
            $table->double('portagens');
            $table->integer('id_funcionario')->index('id_funcionario');
            $table->string('equipa', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_despesas');
    }
};
