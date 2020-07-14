@extends('plantilla')

@section('contenido')
    <br><br><br><br>
    <h4 class="text-center">Menu principal</h4>
    
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <img src="images/motoneta.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('pedidos') }}">Realizar Pedido</a>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <img src="images/clock.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('estadoDelPedido') }}">Ver Pedido</a>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <img src="images/lista.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('hisotiralDePedidosCliente') }}">Ver Historial de Pedidos</a>
        </div>
    </div>   

@endsection