@extends('plantilla')

@section('contenido')
    <br><br><br><br>
    <h4 class="text-center">Menu principal locura</h4>
    
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <img src="images/motoneta.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('pedidos') }}">Realizar Pedido</a>
        </div>
    </div>

   

@endsection
