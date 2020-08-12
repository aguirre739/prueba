<!doctype html>
<html lang="es">
  <head>
    <title>Urban Envios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" type="image/ico" href="images/UE_icono.ico"/>

    <!-- Bootstrap CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/34fc8d25de.js" crossorigin="anonymous"></script>
  </head>

  <body class="fondoBody">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top fondoNav">
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><p class="navbar-brand"> UrbanEnvios | {{ session('usuario') }}</p></li>
          </ul> 

          <a class="btn bt-outline btn-primary" href="{{ route('logoutUsuario') }}">Cerrar Sesion</a> 
      </div>
    </nav>
    @yield('contenido')        
    
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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>