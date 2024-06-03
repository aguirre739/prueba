@extends('menu')

@section('contenido')
    @error('mail')
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger">El mail ya esta registrado</div>
        </div>
    @enderror
    <h2 class="text-center display-4 main">Agregar Cliente</h2>
    <div class="container text-light my-3">
        <div class="d-flex justify-content-around">
        <div class="col-md-8">
        <form action="{{ route('altaDeCliente')}}" method="POST" class="fondoFormulario shadow-lg p-3 mb-5 rounded">
        @csrf
        <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Apellido</label>
                    <input type="text" class="form-control" placeholder="apellido" name="apellido" value="{{ old('apellido') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="telefono" name="telefono" value="{{ old('telefono') }}" required> 
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Mail</label>
                    <input type="text" class="form-control" placeholder="mail" name="mail" value="{{ old('mail') }}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" placeholder="contraseña" name="contrasenia" value="{{ old('contrasenia') }}" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Repita Contraseña</label>
                    <input type="password" class="form-control" placeholder="repitaContrasenia" name="repitaContrasenia" value="{{ old('repitaContrasenia') }}" required>
                </div>
            </div>
                
                <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            </div>   

        </form>
    </div>
    </div>
</div>

    @if ( session('mensaje') )
        <div class="container-fluid mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-info">{{ session('mensaje') }}</div>
                </div>
            </div>    
        </div>
    @endif


@endsection