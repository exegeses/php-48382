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

    $diaMes = date('d');
    $mes = date('m');
    $anio = date('Y');
    echo $diaMes,'/',$mes,'/',$anio;
        ?>
        <br><br><br>
<?php
$fecha = date('l');
?>
<?php
    //mostrar fecha con formato:Sabado, 26 de febrero de 2022

?>
<?php
switch ($fecha){
    case 'Monday':
        echo 'Lunes';
    break;
    case 'Tuesday':
        echo 'Martes';
    break;
    case 'Wednesday':
        echo 'Miercoles';
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
echo ', ';
$dia = date('d'); //número de día de mes
echo $dia,' de ';
$mes = date('m'); // número de mes
switch ($mes){
    case 1:
        echo 'Enero';
    break;
    case 2:
        echo 'Febrero';
    break;
    case 3:
        echo 'Marzo';
    break;
    case 4:
        echo 'Abril';
    break;
    case 5:
        echo 'Mayo';
    break;
    case 6:
        echo 'Junio';
    break;
    case 7:
        echo 'Julio';
    break;
    case 8:
        echo 'Agosto';
    break;
    case 9:
        echo 'Septiembre';
    break;
    case 10:
        echo 'Octubre';
    break;
    case 11:
        echo 'Noviembre';
    break;
    case 12:
        echo 'Diciembre';
    break;
}

$anio = date('Y');// número de año actual
echo ' del ',$anio;

?>
</main>
</body>
</html>