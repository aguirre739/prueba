<!-- <!doctype html>
<html lang="en">
  <head>
    <title>UrbanEnvios</title> -->
    <!-- Required meta tags -->

    <!-- <link rel="icon" type="image/ico" href="images/UE_icono.ico"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body> -->

<!-- <header>
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                            <a class="navbar-brand" href="#">
                                <img src="images/logo.png" alt="logo" width="80" height="50"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('altaDeCliente') }}">Registrarse</a>
                                                </li>
                                            </ul>
                                </div>
                    </div>
                </nav>
</header> -->
@extends('menu')

@section('contenido')
    <h1 class="display-4 text-center py-4 main lead">Inicia Sesión</h1>
        <div class="container my-3">
            <div class="d-flex justify-content-center">
            <div class="col-sm-12 col-md-6">
                <form action="{{ route('loginCliente')}}" method="POST" class="text-light fondoFormulario shadow-lg p-3 mb-5 rounded">
                    @csrf
                    <div class="form-group">
                            <label>Usuario o Email</label>
                            <input type="text" name="mail" class="form-control" placeholder="Ingresa tu usuario o tu email registrado" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="contrasenia" class="form-control" placeholder="contraseña" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Recordarme</label>
                        </div>
                        <button class="btn btn-info btn-block"><i class="fas fa-sign-in-alt fa-1x mx-2" aria-hidden="true"></i>Ingresar</button>
                        <small class="form-text text-white">¿Olvidaste tu contraseña? <a href="#" data-toggle="modal" data-target="#resetModal">Olvidé mis
                                datos</a></small>
                                <hr>
                        <div class="pb-4">
                            <p class="lead text-center">¿No tienes una cuenta? <a href="{{ route('altaDeCliente') }}">Registrate</a></p>
                            <p class="lead text-center">...o ingresa con...</p>
                            <a class="btn btn-primary btn-block" href="#"><i class="fab fa-facebook-square fa-1x" aria-hidden="true"></i>
                                Facebook</a>
                            <a class="btn btn-danger btn-block" href="#"><i class="fab fa-google fa-1x" aria-hidden="true"></i> Google</a>
                        </div>
                </form>
                @if ( session('mensaje') )
                    <div class="alert alert-info">{{ session('mensaje') }}</div>
                @endif
            </div>
            <!-- <div class="col-sm-12 col-md-6">
                    <div class="pb-4">
                            <p class="lead text-center">¿No tienes una cuenta? <a href="{{ route('altaDeCliente') }}">Registrate</a></p>
                            <p class="lead text-center">...o ingresa con...</p>
                            <a class="btn btn-primary btn-lg btn-block" href="#"><i class="fab fa-facebook-square fa-1x" aria-hidden="true"></i>
                                Facebook</a>
                            <a class="btn btn-danger btn-lg btn-block" href="#"><i class="fab fa-google fa-1x" aria-hidden="true"></i> Google</a>
                        </div>
            </div> -->
            </div>
            <center>
                    <a class="btn btn-danger" href="{{ route('altaCadete') }}">Quieres ser un cadete? Unetenos!!!</a>
            </center>
        </div>
@endsection


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
