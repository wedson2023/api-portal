<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiaComercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guia_comercials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('capa', 250)->nullable();
            $table->string('nome', 250);
            $table->string('endereco', 250)->nullable();
            $table->string('telefones', 250)->nullable();
            $table->string('horario', 250)->nullable();
            $table->string('cidade', 250)->nullable();
            //$table->integer('segmento_id')->unsigned();
            //$table->foreign('segmento_id')->references('id')->on('segmentos');
            $table->string('formas_pagamento', 250)->nullable();
            $table->text('template', 5000)->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guia_comercials');
    }
}
