@extends('plantilla')

@section('contenido')
    
<br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success text-center" role="alert">
                Se confirmo el Pedido Satisfactoriamente
            </div>

        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <a href="{{ route('menuPrincipal')}}" class="btn btn-primary">Menu Principal</a>
</div>



@endsection