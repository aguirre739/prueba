@extends('plantilla')

@section('contenido')
    <br><br><br>
    <h2 class="text-center">Tienes un pedido</h2>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">

                <form action="{{ route('decisionDePedido')}}" method="POST">   
                    @csrf            
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">Direccion de Retiro de paquete</h6>
                            <p class="card-text">{{ $pedido->direccionOrigen }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Departamento</h6>
                            <p class="card-text">{{ $pedido->departamentoOrigen }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Telefono de Contacto con el remitente</h6>
                            <p class="card-text">{{ $pedido->telefonoOrigen }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Tipo de Articulo</h6>
                            <p class="card-text">{{ $articulo->nombre }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Direccion de Destino</h6>
                            <p class="card-text">{{ $pedido->direccionDestino }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Departamento Destino</h6>
                            <p class="card-text">{{ $pedido->detamentoDestino }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Telefono de Contacto con el receptor</h6>
                            <p class="card-text">{{ $pedido->telefonoDestino }}</p>

                            <h6 class="card-subtitle mb-2 text-muted">Comentario del lugar de destino</h6>
                            <p class="card-text">{{ $pedido->comentarioDestino }}</p>                        

                            <button type="submit" class="btn btn-success card-link" name="btnAceptar" value="{{ $pedido->idpedidos }}">Aceptar</button>
                            <button type="submit" class="btn btn-danger card-link" id="btnRechazar" name="btnRechazar" value="{{ $pedido->idpedidos }}">Rechazar</button>

                            <div><span></span></div>
                        </div>
                    </div>        
                </form>
            </div>
        </div>
    </div> 

@endsection

<script type="text/javascript">

    var tiempo = 46;

    setInterval(function (){
        tiempo = tiempo - 1;
        document.getElementById('btnRechazar').innerHTML = "Rechazar ("+tiempo+")";
    }, 1000);

    setTimeout(function (){
        document.getElementById('btnRechazar').click();
    }, 46000);
  
</script>