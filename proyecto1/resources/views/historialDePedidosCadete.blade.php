@extends('plantillaCadete');

@section('contenido')
    
<br><br><br><br>
<h2 class="text-center">Aqui podra ver sus pedidos realizados</h2>
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">

            @if (count($pedidos) > 0)
                @foreach ($pedidos as $item)
                    <div class="card" style="width: 30rem;">
                        <div class="card-header">
                            Estado del Pedido {{$item->idpedidos}} 
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2">Direccion de Retiro de paquete</h6>
                            <p class="card-text">{{ $item->direccionOrigen }}</p>
        
                            <h6 class="card-subtitle mb-2">Tipo de Articulo</h6>
                            <p class="card-text">{{ $item->nombre }}</p>
        
                            <h6 class="card-subtitle mb-2">Direccion de Destino</h6>
                            <p class="card-text">{{ $item->direccionDestino }}</p>

                            <h6 class="card-subtitle mb-2">Fecha</h6>
                            <p class="card-text">{{ date("d/m/Y", strtotime($item->fechaHora)) }}</p>
        
                            <h6 class="card-subtitle mb-2">Estado</h6>
                            <p class="card-text">{{ $item->estado }}</p>        
                        </div>
                    </div>        
                    <br>
                @endforeach
            @endif

            {{ $pedidos->links() }}
            <br>
            <a href="{{ route('menuCadetes') }}" class="btn btn-primary">Menu Principal</a>
            <br><br><br>

        </div>
    </div>
</div> 

@endsection