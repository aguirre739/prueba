<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;
use App\Http\Controllers;
use App\pedido;
use Symfony\Component\VarDumper\VarDumper;
Use \Carbon\Carbon;

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
        $pedido->direccionOrigen = App\funciones::quitar_tildes($request->direccionDeOrigen);
        $pedido->latitudOrigen = $latitud;
        $pedido->longitudOrigen = $longitud; 
        $pedido->departamentoOrigen = $request->departamentoOrigen;
        $pedido->telefonoOrigen = $request->telefonoDeOrigen;
        $pedido->comentarioOrigen = $request->comentarioOrigen;
        $pedido->direccionDestino = App\funciones::quitar_tildes($request->direccionDeDestino);
        $pedido->detamentoDestino = $request->departamentoDestino;
        //

        $formattedAddrTo = str_replace(' ','+',$request->direccionDeDestino);
		$geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&key=AIzaSyAA2XqjdwJNuZUOy-fmLKo9fS5Taueqe1s');
        $outputTo = json_decode($geocodeTo);
        
        $latitudD = $outputTo->results[0]->geometry->location->lat;
        $longitudD = $outputTo->results[0]->geometry->location->lng;

        $distanciaReal = App\pedido::distanceCalculation($latitud, $longitud, $latitudD, $longitudD);

        $precios = App\precio::all();

        foreach($precios as $row)
        {
            //echo $distanciaReal. " y row distancia: ".$row->distancia."<br>";
            if($distanciaReal > $row->distancia)
            {
                //echo "for: ".$distanciaReal. " y row distancia: ".$row->distancia."<br>";
            }
            else
            {
                $pedido->montoDePago = $row->costo;
                break;
            }
        }

        //
        $pedido->telefonoDestino = $request->telefonoDestino;
        $pedido->comentarioDestino = $request->comentarioDestino;
        $pedido->id_tiposDeArticulo = $request->tipoDeArticulo;
        $pedido->valorDeArticulo = $request->valorEstimado;
        $pedido->tipoDePago = "Efectivo";
        $pedido->estado = "Esperando a ser asignado a un cadete";
        $pedido->fechaHora = Carbon::now();
        $pedido->clientes_idclientes = $request->session()->get('idusuario');
        
        $request->session()->put('pedidoCompleto', $pedido);

        return view('confirmarPedido', compact('pedido'));

        //var_dump($pedido);
    }

    public function confirmarPedido(Request $request)
    {
        $pedido = $request->session()->get('pedidoCompleto');
        $pedido->save();
        return view('mensajeFinalizadoPedido');
    }

    public function buscarPedidos(Request $request)
    {
        $results = DB::select('SELECT idpedidos, latitudOrigen, longitudOrigen FROM pedidos WHERE cadetes_idcadetes IS NULL');
        //var_dump($request->session()->get('idCadete'));
        $idPedido = 0;
        $distancia = 20;
        foreach($results as $row)
        {
            $results2 = DB::select('SELECT * FROM pedido_rechazados WHERE cadetes_idcadetes = ? AND pedidos_idpedidos = ?', [$request->idCadete, $row->idpedidos]);
            //var_dump($results2);
            if(count($results2) > 0)
            {

            }
            else
            {
                $distanciaReal = App\pedido::distanceCalculation($row->latitudOrigen, $row->longitudOrigen, $request->latitud, $request->longitud);
                //var_dump($distanciaReal);
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
            $pedido = App\pedido::findOrFail($idPedido);
            $pedido->cadetes_idcadetes = $request->idCadete;
            $pedido->save();

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

    public function mostrarPedido(Request $request ,$idpedido)
    {
        $request->session()->put('idPedido', $idpedido);
        $pedido = App\pedido::findOrFail($idpedido);
        $articulo = App\tiposDeArticulo::findOrFail($pedido->id_tiposDeArticulo);
        return view('mostrarPedidosAlCadete', compact('pedido', 'articulo'));
    }

    public function decisionDePedido(Request $request)
    {
        if(isset($request->btnAceptar))
        {
            $pedido = App\pedido::find($request->btnAceptar);
            $pedido->cadetes_idcadetes = $request->session()->get('idCadete');
            $pedido->estado = "Asignado";
            $pedido->save();
            //echo "se acepto el pedido ".$request->btnAceptar;
            return redirect(route('retirarPedido'));
        }

        if(isset($request->btnRechazar))
        {
            DB::update('UPDATE pedidos SET cadetes_idcadetes = null WHERE pedidos.idpedidos = ?', [$request->btnRechazar]);

            $pedidoRechazado = new App\pedidoRechazado();

            $pedidoRechazado->cadetes_idcadetes = $request->session()->get('idCadete');
            $pedidoRechazado->pedidos_idpedidos = $request->btnRechazar;
            $pedidoRechazado->fechaHora = date("Y-m-d H:i:s");
            //var_dump("pedido rechazado ".$pedidoRechazado);

            $pedidoRechazado->save();
            return redirect(route('empezarARepartir'));
            //echo "se rechazo el pedido ".$request->btnRechazar;
        }
    }

    public function retirarPedido(Request $request)
    {
        $pedido = App\pedido::find($request->session()->get('idPedido'));
        $direccionO = str_replace(' ','+', $pedido->direccionOrigen);

        return view('retirarPedido', compact('pedido', 'direccionO'));

    }

    public function entregarPedido(Request $request)
    {
        $pedido = App\pedido::find($request->session()->get('idPedido'));
        $pedido->estado = "En camino";
        $pedido->save();
        $direccionD = str_replace(' ','+', $pedido->direccionDestino);
        return view('entregarPedido', compact('pedido', 'direccionD'));
    }

    public function pedidoFinalizado(Request $request)
    {
        $pedido = App\pedido::find($request->session()->get('idPedido'));
        $pedido->estado = "Finalizado";
        $pedido->save();
        return view('pedidoFinalizado');
    }

    public function empezarRepartos(Request $request)
    {
        //primero busca si no tiene pedidos pendientes
        $results = DB::select("SELECT * FROM pedidos WHERE pedidos.cadetes_idcadetes = ? AND pedidos.estado = 'Asignado' OR pedidos.estado = 'En camino'", [$request->session()->get('idCadete')]);
        // dd($results);
        if(count($results) > 0)
        {
            foreach($results as $row)
            {
                if($row->estado == 'Asignado')
                {
                    $request->session()->put('idPedido', $row->idpedidos);
                    return redirect(route('retirarPedido'));
                }

                if($row->estado == 'En camino')
                {
                    $request->session()->put('idPedido', $row->idpedidos);
                    return redirect(route('entregarPedido'));
                }
            }
        }
        else
        {
            return view('empezarARepartir');
        }

    }
  
    public function estadoDelPedido(Request $request)
    {
        $pedidos = DB::select("SELECT * FROM pedidos, tipos_de_articulos WHERE pedidos.clientes_idclientes = ? AND pedidos.estado != 'Finalizado' AND pedidos.id_tiposDeArticulo = tipos_de_articulos.idtipos_de_articulos", [$request->session()->get('idusuario')]);
        return view('estadoDePedido', compact('pedidos'));
    }
    
    public function hisotiralDePedidosCliente(Request $request)
    {
        $pedidos = DB::table('pedidos')
            ->where('pedidos.clientes_idclientes', '=', $request->session()->get('idusuario'))
            ->where('pedidos.estado', '=', 'Finalizado')
            ->join('tipos_de_articulos', 'tipos_de_articulos.idtipos_de_articulos', '=', 'pedidos.id_tiposDeArticulo')
            ->orderBy('idpedidos', 'DESC')
            ->paginate(1);

        return view('historialDePedidos', compact('pedidos'));
    }

    public function hisotiralDePedidosCadete(Request $request)
    {
        $pedidos = DB::table('pedidos')
            ->where('pedidos.cadetes_idcadetes', '=', $request->session()->get('idCadete'))
            ->where('pedidos.estado', '=', 'Finalizado')
            ->join('tipos_de_articulos', 'tipos_de_articulos.idtipos_de_articulos', '=', 'pedidos.id_tiposDeArticulo')
            ->orderBy('idpedidos', 'DESC')
            ->paginate(1);

        return view('historialDePedidosCadete', compact('pedidos'));
    }
}
