<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('idpedidos');
            $table->string('direccionOrigen');
            $table->string('latitudOrigen');
            $table->string('longitudOrigen');
            $table->string('departamentoOrigen')->nullable();
            $table->string('telefonoOrigen');
            $table->string('comentarioOrigen')->nullable();
            $table->string('direccionDestino');
            $table->string('detamentoDestino')->nullable();
            $table->string('telefonoDestino');
            $table->string('comentarioDestino')->nullable();
            $table->unsignedBigInteger('id_tiposDeArticulo');
            $table->foreign('id_tiposDeArticulo')->references('idtipos_de_articulos')->on('tipos_de_articulos');
            $table->float('valorDeArticulo');
            $table->string('tipoDePago');
            $table->float('montoDePago');
            $table->string('estado');
            $table->dateTime('fechaHora', 0);
            $table->unsignedBigInteger('clientes_idclientes');
            $table->foreign('clientes_idclientes')->references('idclientes')->on('clientes');
            $table->unsignedBigInteger('cadetes_idcadetes')->nullable();
            $table->foreign('cadetes_idcadetes')->references('idcadetes')->on('cadetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
