<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>fecha</title>
</head>
<body>
    <main class="container">
        <h1>Fecha usando php</h1>
        <?php
        //definimos el uso horario
        date_default_timezone_set('America/Argentina/Buenos_Aires');

    // obtenemos variables necesarias para nueso código
    $diaMes = date('d'); // día del mes
    $mes = date('m'); // mes actual
    $anio = date('Y'); // año actual
    $diaSemana = date('w'); // número del día de la semana 0 a 6

    //mostrar fecha con formato:Sabado, 26 de febrero de 2022

    switch ($diaSemana){
        case 0:
            $diaSemana = 'Domingo';
            break;
        case 1:
            $diaSemana = 'Lunes';
            break;
        case 2:
            $diaSemana = 'Martes';
            break;
        case 3:
            $diaSemana = 'Miércoles';
            break;
        case 4:
            $diaSemana = 'Jueves';
            break;
        case 5:
            $diaSemana = 'Viernes';
            break;
        case 6:
            $diaSemana = 'Sábado';
            break;
    }


    switch ($mes){
        case 1:
            $mes = 'Enero';
            break;
        case 2:
            $mes = 'Febrero';
            break;
        case 3:
            $mes = 'Marzo';
            break;
        case 4:
            $mes = 'Abril';
            break;
        case 5:
            $mes = 'Mayo';
            break;
        case 6:
            $mes = 'Junio';
            break;
        case 7:
            $mes = 'Julio';
            break;
        case 8:
            $mes = 'Agosto';
            break;
        case 9:
            $mes = 'Septiembre';
            break;
        case 10:
            $mes = 'Octubre';
            break;
        case 11:
            $mes = 'Noviembre';
            break;
        case 12:
            $mes = 'Diciembre';
            break;
    }

    echo $diaSemana, ' ', $diaMes, ' de ', $mes, ' de ', $anio;

?>
</main>
</body>
</html>