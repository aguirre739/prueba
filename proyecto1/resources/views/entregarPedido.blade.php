@extends('plantillaCadete')

@section('contenido')
    <br><br><br><br>
    <h2 class="text-center">Ve a entregar el paquete en la siguiente dirección</h2>

    <div class="container">
        <div class="row justify-contend-center">
            <div class="col-md-8">
                Dirección:
                <b>{{ $pedido->direccionDestino }}</b>      
            </div>

            <div class="col-md-8">
                Departamento:
                <b>{{ $pedido->departamentoDestino }}</b>
            </div>

            <div class="col-md-8">  
                Telefono:
                <b>{{ $pedido->telefonoDestino }}</b>                
            </div>

            <div class="col-md-8">
                <img src="https://maps.googleapis.com/maps/api/staticmap?center={{$direccionD}}&zoom=16&size=600x300&markers=size:mid%7Ccolor:red%7C{{$direccionD}}&key=AIzaSyAA2XqjdwJNuZUOy-fmLKo9fS5Taueqe1s" class="rounded" alt="mapa" width="1000">
            </div>
        </div>
    </div>

    <br>
    <form action="{{ route('pedidoFinalizado') }}" method="GET">
        @csrf
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Ya entregue el Paquete</button>
        </div>
    </form>
   
    <br><br>

@endsection