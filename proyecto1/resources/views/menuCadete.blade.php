@extends('plantillaCadete')

@section('contenido')
    <br><br><br>
    <h3 class="text-center">Menu Cadetes</h3>

    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <img src="images/paquete.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('empezarARepartir') }}">Empezar a Repartir!!!</a>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <img src="images/lista.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('hisotiralDePedidosCadete') }}">Ver Historial de Pedidos</a>
        </div>
    </div>

@endsection