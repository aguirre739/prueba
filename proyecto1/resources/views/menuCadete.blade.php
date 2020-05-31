@extends('plantilla')

@section('contenido')
    <br><br><br>
    <h3 class="text-center">Menu Cadetes</h3>

    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <img src="images/paquete.png" width="80">
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('empezarARepartir') }}">Empezar a Repartir!!!</a>
        </div>
    </div>

@endsection