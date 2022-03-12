<?php
    //declaración
    function negrita( $frase )
    {
        $mensaje = '<b>'.$frase.'</b><br>';
        echo $mensaje;
    }
    function sumar( $n1, $n2 )
    {
        $resultado = $n1 + $n2;
        return $resultado;
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<?php
    //llamado a ejecución
    negrita( 'PHP y mySQL' );
    negrita( 'Hola Mundo' );
    negrita( 'text' );
?>
<hr>
<?php
    echo sumar( 10, 12 );
?>

</body>
</html>
