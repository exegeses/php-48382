<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="alert alert-success">
    versión abriendo y cerrando php
    <br>
<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
?>
        <img src="imagenes/ok.png">
<?php
    }
    else{
?>
        <img src="imagenes/error.png">
<?php
    }
?>
</div>

<div class="alert alert-success">
    versión sin abrir y cerrar php
    <br>
<?php
    if ( $numero < 100 ){
        echo '<img src="imagenes/ok.png">';
    }
    else{
        echo '<img src="imagenes/error.png">';
    }
?>
</div>

<div class="alert alert-success">
    versión usando una variable auxiliar
    <br>
<?php
    if( $numero < 100 ){
        $img = 'ok';
    }
    else{
        $img = 'error';
    }
?>
    <img src="imagenes/<?php echo $img; ?>.png">
</div>

<div class="alert alert-success">
    versión usando una variable auxiliar
    y SIN else
    <br>
    <?php
    $img = 'error';  // valor predeterminado
    if( $numero < 100 ){
        $img = 'ok'; // sobreescritura
    }
    ?>
    <img src="imagenes/<?php echo $img; ?>.png">
</div>

</body>
</html>