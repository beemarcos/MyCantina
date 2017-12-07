<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoitem', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedido');
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->decimal('preco', 5, 2);
            $table->decimal('desconto', 5, 2);
            $table->integer('quantidade');
            $table->decimal('subtotal', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidoitem');
    }
}
