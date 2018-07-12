<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_webs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('nome')->nullable();
            $table->integer('guia_id')->unsigned();
            $table->foreign('guia_id')->references('id')->on('guia_comercials')->onDelete('cascade');
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
        Schema::dropIfExists('contato_webs');
    }
}
