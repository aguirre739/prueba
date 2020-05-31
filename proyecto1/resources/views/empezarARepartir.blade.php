@extends('plantilla')

@section('contenido')
<br><br><br>
<h2 class="text-center">Aqui se mostrara cuando se te asignen pedidos, asi q se paciente</h2>
    
@endsection

<script>

    var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
    };

    function success(pos) {
    var crd = pos.coords;

    console.log('Your current position is:');
    console.log('Latitude : ' + crd.latitude);
    console.log('Longitude: ' + crd.longitude);
    console.log('More or less ' + crd.accuracy + ' meters.');

    enviarPosicion(crd.latitude, crd.longitude)
    };

    function error(err) {
    console.warn('ERROR(' + err.code + '): ' + err.message);
    };    

    function enviarPosicion(latitude, longitude)
    {
        const data = new FormData();
        data.append('latitud', latitude);
        data.append('longitud', longitude);
        fetch('../public/api/buscarPedidos', {
            method: 'POST',
            body: data
        })
        .then(res => res.json())
        .then(data =>{

            if(data.idpedido != false)
            {
                //console.log("../public/mostrarPedido/"+data.idpedido);
                location.href ="../public/mostrarPedido/"+data.idpedido;
            }
            else
            {
            }        

        });
    }
    
    setInterval(navigator.geolocation.getCurrentPosition(success, error, options), 30000);

    
</script>