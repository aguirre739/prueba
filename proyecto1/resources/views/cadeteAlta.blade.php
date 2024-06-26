@extends('menu')

@section('contenido')

    <h2 class="display-4 text-center py-4 main lead">Agregar Cadete</h2>

    @error('mail')
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger">El mail ya esta registrado</div>
        </div>
    @enderror

<form action="{{ route('altaDeCadete')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    Nombre
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}" required>
                    Apellido
                    <input type="text" class="form-control" placeholder="apellido" name="apellido" value="{{ old('apellido') }}" required>
                    CUIL
                    <input type="text" class="form-control" placeholder="CUIL" name="cuil" value="{{ old('cuil') }}" required>
                    Telefono
                    <input type="text" class="form-control" placeholder="telefono" name="telefono" value="{{ old('telefono') }}" required> 
                    Foto
                    <input type="file" class="form-control" placeholder="Foto" name="foto" value="{{ old('foto') }}" required> 
                    Mail
                    <input type="text" class="form-control" placeholder="mail" name="mail" value="{{ old('mail') }}" required>
                    Contraseña
                    <input type="password" class="form-control" placeholder="contraseña" name="contrasenia" value="{{ old('contrasenia') }}" required>
                    Repita Contraseña
                    <input type="password" class="form-control" placeholder="repitaContrasenia" name="repitaContrasenia" value="{{ old('repitaContrasenia') }}" required>

                    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                </div>
            </div>    
        </div>
    </form>

    @if ( session('message') )
        <div class="container-fluid mt-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-info">{{ session('message') }}</div>
                </div>
            </div>    
        </div>
    @endif

    @if ( session('messageExito') )
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-info">{{ session('messageExito') }}</div>                                
            </div>
        </div>    

        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="">Ingresa ya!!!</a>
            </div>
        </div>    
    </div>
    @endif


@endsection