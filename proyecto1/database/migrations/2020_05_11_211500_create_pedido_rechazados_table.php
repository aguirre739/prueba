<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoRechazadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_rechazados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cadetes_idcadetes');
            $table->foreign('cadetes_idcadetes')->references('idcadetes')->on('cadetes');
            $table->unsignedBigInteger('pedidos_idpedidos');
            $table->foreign('pedidos_idpedidos')->references('idpedidos')->on('pedidos');
            $table->dateTime('fechaHora', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_rechazados');
    }
}
