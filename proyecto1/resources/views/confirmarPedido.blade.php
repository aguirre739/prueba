@extends('plantilla')

@section('contenido')
    <br><br><br><br>
    <h3 class="text-center">Confirmar Pedido</h3>
    
    <form action="{{ route('confirmarPedido') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        Detalle del Pedido
                        </div>
                        <div class="card-body">
                        <b class="card-text">Direccion A retirar el Pedido</b>
                        <p class="card-text">{{ $pedido->direccionOrigen }}</p>
            
                        <b class="card-text">Departamento</b>
                        <p class="card-text">{{ $pedido->departamentoOrigen }}</p>
            
                        <b class="card-text">Numero de Contacto</b>
                        <p class="card-text">{{ $pedido->telefonoOrigen }}</p>
            
                        <b class="card-text">Comentario</b>
                        <p class="card-text">{{ $pedido->comentarioOrigen }}</p>
            
                        <b class="card-text">Direccion a entregar el Pedido</b>
                        <p class="card-text">{{ $pedido->direccionDestino }}</p>
            
                        <b class="card-text">Departamento</b>
                        <p class="card-text">{{ $pedido->detamentoDestino }}</p>
            
                        <b class="card-text">Numero de Contacto</b>
                        <p class="card-text">{{ $pedido->telefonoDestino }}</p>
            
                        <b class="card-text">Comentario</b>
                        <p class="card-text">{{ $pedido->comentarioDestino }}</p>
            
                        <b class="card-text text-primary">Total</b>
                        <p class="card-text">${{ $pedido->montoDePago }}</p>
            
                        <button type="submit" class="btn btn-success">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </form>
    <br><br><br>

@endsection

