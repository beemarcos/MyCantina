<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome',60);
            $table->string('cpf',60);
            $table->date('datadenascimento');
            $table->string('telefone',60);
            $table->integer('limite');
            $table->integer('limitediario');
            $table->integer('controlefinanceiro_id')->unsigned();
            $table->foreign('controlefinanceiro_id')->references('id')->on('controlefinanceiro');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->integer('responsavel_id')->unsigned();
            $table->foreign('responsavel_id')->references('id')->on('responsavel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
