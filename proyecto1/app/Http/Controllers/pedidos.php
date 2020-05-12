<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;
use App\Http\Controllers;
use App\pedido;
use Symfony\Component\VarDumper\VarDumper;

class pedidos extends Controller
{
    public function realizarPedidos()
    {
        $tipos_de_articulos = App\tiposDeArticulo::all();        
        return view('realizarPedido', compact('tipos_de_articulos'));
    }

    public function finalizarPedido(Request $request)
    {
        $formattedAddrFrom = str_replace(' ','+',$request->direccionDeOrigen);
		$geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&key=AIzaSyAA2XqjdwJNuZUOy-fmLKo9fS5Taueqe1s');
        $outputFrom = json_decode($geocodeFrom);
        
        $latitud = $outputFrom->results[0]->geometry->location->lat;
        $longitud = $outputFrom->results[0]->geometry->location->lng;

        $pedido = new App\pedido();
        $pedido->direccionOrigen = $request->direccionDeOrigen;
        $pedido->latitudOrigen = $latitud;
        $pedido->longitudOrigen = $longitud; 
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
        $pedido->estado = "nuevo";
        $pedido->clientes_idclientes = $request->session()->get('idusuario');
        //$pedido->cadetes_idcadetes = null;
        $pedido->save();

        return "Pedido creado satisfactoriamente (falta crear vista para esto u.u)";
    }

    public function buscarPedidos(Request $request)
    {
        $results = DB::select('SELECT idpedidos, latitudOrigen, longitudOrigen FROM pedidos WHERE cadetes_idcadetes IS NULL');
        //var_dump($request->session()->get('idCadete'));
        $idPedido = 0;
        $distancia = 20000;
        foreach($results as $row)
        {
            $results2 = DB::select('SELECT * FROM pedido_rechazados WHERE cadetes_idcadetes = ? AND pedidos_idpedidos = ?', [session('idCadete'), $row->idpedidos]);
            //var_dump($results2);
            if(count($results2) > 0)
            {

            }
            else
            {
                $distanciaReal = App\pedido::distanceCalculation($row->latitudOrigen, $row->longitudOrigen, $request->latitud, $request->longitud);
                if($distanciaReal < $distancia)
                {
                    $distancia = $distanciaReal;
                    $idPedido = $row->idpedidos;
                }
            }           
        }
        
        // $datos = App\pedido::findOrFail($idPedido);
        if ($idPedido != 0)
        {
            return response()->json([
                "idpedido" => $idPedido
            ], 200);
        }
        else
        {
            return response()->json([
                "idpedido" => false
            ], 200);
        }
      
    }

  
    
}
