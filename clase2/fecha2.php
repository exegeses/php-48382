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
    //generar formato:
    // Sábado, 26 de febrero de 2022

    //echo date(DATE_RFC2822);
    $diaSemana = date('l');
    echo $diaSemana;
?>
    <br>
<?php
    $diaSemana = date('l');
    switch ( $diaSemana ){
        case 'Sunday':
            echo 'Domingo';
            break;
        case 'Monday':
            echo 'Lunes';
            break;
        case 'Tuesday':
            echo 'Martes';
            break;
        case 'Wednesday':
            echo 'Mi´´ercoles';
            break;
        case 'Thursday':
            echo 'Jueves';
            break;
        case 'Friday':
            echo 'Viernes';
            break;
        case 'Saturday':
            echo 'Sábado';
            break;
    }
?>

    </main>
</body>
</html>