@extends('plantilla')

@section('contenido')
    <br><br><br><br>
    <h3 class="text-center">Realizar Pedido</h3>
    
    <form action="{{ route('finalizarPedido')}}" method="POST">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    Direccion de Origen
                    <input type="text" class="form-control" placeholder="Direccion de Origen" name="direccionDeOrigen" value="{{ old('direccionDeOrigen') }}" required>
                    Depoartamento Origen
                    <input type="text" class="form-control" placeholder="Depoartamento Origen" name="departamentoOrigen" value="{{ old('departamentoOrigen') }}" required>
                    Telefono de Origen
                    <input type="text" class="form-control" placeholder="Telefono de Origen" name="telefonoDeOrigen" value="{{ old('telefonoDeOrigen') }}" required> 
                    Comentario
                    <input type="text" class="form-control" placeholder="Comentario" name="comentarioOrigen" value="{{ old('comentarioOrigen') }}" required>
                    Direccion de Destino
                    <input type="text" class="form-control" placeholder="Direccion de Destino" name="direccionDeDestino" value="{{ old('direccionDeDestino') }}" required>
                    Departamento Destino                    
                    <input type="text" class="form-control" placeholder="Departamento Destino" name="departamentoDestino" value="{{ old('departamentoDestino') }}" required>
                    Telefono Destino
                    <input type="text" class="form-control" placeholder="Telefono Destino" name="telefonoDestino" value="{{ old('telefonoDestino') }}" required>
                    Comentario 
                    <input type="text" class="form-control" placeholder="Comentario" name="comentarioDestino" value="{{ old('comentarioDestino') }}" required>
                    Tipo de Articulo
                    <select class="form-control" name="tipoDeArticulo" value="{{ old('tipoDeArticulo') }}">
                    @foreach ($tipos_de_articulos as $item)
                        <option value="{{$item->idtipos_de_articulos}}">{{$item->nombre}}</option>
                    @endforeach
                    </select>
                    Valor Estimado
                    <input type="text" class="form-control" placeholder="Valor Estimado" name="valorEstimado" value="{{ old('valorEstimado') }}" required>
                    Monto total
                    <input type="text" class="form-control" placeholder="Monto total" name="montoTotal" value="{{ old('montoTotal') }}" required>

                    <button type="submit" class="btn btn-primary mt-3">Realizar Pedido</button>                    
                </div>
            </div>    
        </div>
    </form>
    <br><br><br>

@endsection

