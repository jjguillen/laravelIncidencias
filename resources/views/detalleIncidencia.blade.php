<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class='container'>

        <h3>Incidencia en detalle</h3>
        <div class='row'>
            <div class='col'>
                <ul class="list-group">
                    <li class="list-group-item">Latitud: {{$incidencia->latitud}}</li>
                    <li class="list-group-item">Longitud: {{$incidencia->longitud}}</li>
                    <li class="list-group-item">Ciudad: {{$incidencia->ciudad}}</li>
                    <li class="list-group-item">Dirección: {{$incidencia->direccion}}</li>
                    <li class="list-group-item">Etiqueta: {{$incidencia->etiqueta}}</li>
                    <li class="list-group-item">Descripción: {{$incidencia->descripcion}}</li>
                    <li class="list-group-item">Estado: {{$incidencia->estado}}</li>
                </ul>

                <br>
                <a href='/'>Volver</a>
            </div>
            <div class='col'>
                <div id='map' style="width: 500px; height: 500px"></div>
            </div>
        </div>
        
    </div>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2PVMZqU3CHL5EP1glCc-I_b38t4TBwmw&callback=initMap">
    </script>

<script type="text/javascript">

    function initMap() {
        var latitud = "{{ json_encode($incidencia->latitud) }}";
        var longitud = "{{ json_encode($incidencia->longitud) }}";
        var myLatLng = {lat: Number(latitud), lng: Number(longitud) };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: '{{ $incidencia->etiqueta }}'
        });
    }

</script>




</body>
</html>