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

        <form method='post' action='/incidencia'>
            @csrf
            <h1 class="h3 mb-3 fw-normal">Nueva Incidencia</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="latitud" name="latitud" placeholder="20,15">
                <label>Latitud</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="longitud" name="longitud" placeholder="20,15">
                <label>Longitud</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Madrid">
                <label>Ciudad</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Tu casa">
                <label>Dirección</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="etiqueta" name="etiqueta" placeholder="AAA" maxlength="3">
                <label>Etiqueta</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="descripcion" name="descripcion" ></textarea>
                <label>Descripción</label>
            </div>
            <input type="hidden" name="estado" value="abierta">
            <br>

            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Crear</button>
        </form>





    </div>

</body>
</html>