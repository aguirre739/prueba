@extends('plantillaCadete')

@section('contenido')
    <br><br><br><br>
    <h2 class="text-center">Ve a retirar el pedido en la siguiente dirección</h2>

    <div class="container">
        <div class="row justify-contend-center">
            <div class="col-md-8">
                Dirección:
                <b>{{ $pedido->direccionOrigen }}</b>      
            </div>

            <div class="col-md-8">
                Departamento:
                <b>{{ $pedido->departamentoOrigen }}</b>
            </div>

            <div class="col-md-8">  
                Telefono:
                <b>{{ $pedido->telefonoOrigen }}</b>                
            </div>

            <div class="col-md-8">
                <img src="https://maps.googleapis.com/maps/api/staticmap?center={{$direccionO}}&zoom=16&size=600x300&markers=size:mid%7Ccolor:red%7C{{$direccionO}}&key=AIzaSyAA2XqjdwJNuZUOy-fmLKo9fS5Taueqe1s" class="rounded" alt="mapa" width="1000">
            </div>
        </div>
    </div>

    <br>
    <form action="{{ route('entregarPedido') }}" method="GET">
        @csrf
        <div class="d-flex justify-content-center">
            <button class="btn btn-success">Ya tengo el Paquete</button>
        </div>
    </form>
  
    <br><br>

@endsection