<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Urbanenvios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/34fc8d25de.js" crossorigin="anonymous"></script>
</head>
<body>
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
                                <li class="nav-item active">
                                      <a class="nav-link" href="#"><i class="fas fa-home fa-1x text-primary"></i> Inicio</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#"><i class="fas fa-users fa-1x text-primary"></i> Nosotros</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt fa-1x text-primary"></i> Ingresar</a>
                                </li>
                          </ul>
                        </div>
            </div>
        </nav>

    </header>

    <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/camioncito.png" class="d-block w-75" alt="...">
            <div class="carousel-caption text-dark d-md-block">
              <h5>Pedi de donde quieras...</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/motito.png" class="d-block w-75" alt="...">
            <div class="carousel-caption text-dark d-md-block">
              <h5>Elegi lo que queres pedir...</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/motito2.png" class="d-block w-75" alt="...">
            <div class="carousel-caption text-dark d-md-block">
              <h5>Seguí tu pedido...</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <article class="container">
            <div class="jumbotron jumbotron-fluid bg-white">
                <div class="container text-center">
                  <h1 class="display-1 text-bold">Urbanenvios</h1>
                  <h6 class="display-4 lead mt-2">Bienvenidos</h6>
                </div>
            </div>
    </article>
    </section>

    <footer class="bg-dark text-light">
            <div class="container">
                    <div class="row">
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
                    <div class="mt-2">
                        <p class="text-center">Final de Programacion Web 2020. &copy; Todos los derechos reservados</p>
                    </div>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
