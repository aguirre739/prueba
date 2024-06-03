<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UrbanEnvios</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/34fc8d25de.js" crossorigin="anonymous"></script>
    </head>
    <body class="altura">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="logo" width="80" height="50"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav ml-auto">
                            @if (Route::has('login'))
                            <li class="nav-item active">
                                @auth
                                  <a class="nav-link" href="{{ url('/index') }}"><i class="fas fa-home fa-1x text-dark"></i> Inicio</a>
                                @else
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt fa-1x text-dark mx-2"></i>Iniciar Sesion</a>
                                <!-- <a class="nav-link" href="#"><i class="fas fa-users fa-1x text-primary"></i> Nosotros</a> -->
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt fa-1x text-primary"></i> Ingresar</a> -->
                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </li>
                                <!-- <div class="top-right links"></div> -->
                            @endif
                    </div>
            </nav>
        </header>
    
    <section>
        <div class="site-hero">
            <div class="container">
                <div class="row align-items-center">
                    <figure>
                        <img src="images/fondo2.png" alt="Image" class="img-fluid">
                    </figure>
                    <div class="col-sm-12 col-md-5 col-lg-7">
                        <div class="heading mb-3">UrbanEnvios</div>
                        <div class="w-75">
                            <p class="mb-5">Events every night, join with us! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ad!</p>
                            <p><a href="#" class="btn btn-outline-info">Unetenos</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-3">
         <div class="row my-2">
            <div class="col-sm-12 col-md-4 bg-light p-4 text-center">
                <p><i class="fas fa-handshake fa-3x text-info"></i></p>
                <h3>Confiable</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eaque minus esse accusamus officia blanditiis iusto sequi nostrum ad modi?</p>
            </div>
            <div class="col-sm-12 col-md-4 bg-light p-4 text-center">
                <p><i class="fas fa-lock fa-3x text-info"></i></p>
                <h3>Seguro</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id earum nulla quibusdam porro ullam in, inventore modi laborum reiciendis amet!</p>
            </div>
            <div class="col-sm-12 col-md-4 bg-light p-4 text-center">
                <p><i class="fas fa-shipping-fast fa-3x text-info"></i></p>
                <h3>Rapido</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laboriosam temporibus iure distinctio sapiente expedita hic quod minus excepturi quidem.</p>
            </div>
         </div>
    </section>

    <footer class="bg-dark text-light">
            <div class="container">
                    <div class="row py-2 lead">
                            <div class="col-sm-12 col-md-4 text-center">
                                <p>Encuentranos en nuestras redes sociales</p>
                                <i class="fa fa-facebook-official fa-2x mr-1" aria-hidden="true"></i>
                                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-12 col-md-4 text-center">
                                <a href="#">Contactanos</a><br>
                                <a href="#">Nosotros</a>
                            </div>
                            <div class="col-sm-12 col-md-4 text-center">
                                <img src="images/logo.png" alt="logo" width="120" height="80">
                            </div>
                            <hr>
                    </div>
                    <div class="py-2">
                        <p class="text-center lead">Final de Programacion Web 2020. &copy;Todos los derechos reservados</p>
                    </div>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
