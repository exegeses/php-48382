<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Fecha</title>
</head>
<body>
    <main class="container">
        <h1>Fecha usando php</h1>
<?php
    //definimos el timezone
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    //mostrar fecha con formato: 26/02/2022
    //obtenemos el d´´ia del mes
    $diaMes = date('d');

    // obtenemos el numero del mes a 2 caractéres
    $mes = date('m');

    // obtenemos el número del año actual
    $anio = date('Y');

    echo $diaMes,'/',$mes,'/',$anio;
?>
    <br>
<?php
    $fecha = date('d/m/Y H:i:s');
    echo $fecha;
?>

    </main>
</body>
</html>