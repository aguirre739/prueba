<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pedidos extends Controller
{
    public function realizarPedidos()
    {
        $tipos_de_articulos = App\tiposDeArticulo::all();        
        return view('realizarPedido', compact('tipos_de_articulos'));
    }

    public function finalizarPedido(Request $request)
    {
        $pedido = new App\pedido();
        $pedido->direccionOrigen = $request->direccionDeOrigen;
        $pedido->departamentoOrigen = $request->departamentoOrigen;
        $pedido->telefonoOrigen = $request->telefonoDeOrigen;
        $pedido->comentarioOrigen = $request->comentarioOrigen;
        $pedido->direccionDestino = $request->direccionDeDestino;
        $pedido->detamentoDestino = $request->departamentoDestino;
        $pedido->telefonoDestino = $request->telefonoDestino;
        $pedido->comentarioDestino = $request->comentarioDestino;
        $pedido->id_tiposDeArticulo = $request->tipoDeArticulo;
        $pedido->valorDeArticulo = $request->valorEstimado;
        $pedido->tipoDePago = "Efectivo";
        $pedido->montoDePago = $request->montoTotal;
        $pedido->clientes_idclientes = $request->session()->get('idusuario');
        //$pedido->cadetes_idcadetes = null;
        $pedido->save();
    }
}
