<?php
    /*
     * crear una función para multiplicar
     * dos números
     * - que ambos sean números
     */

    function multiplicar( $num1, $num2 )
    {
        if( is_numeric($num1) && is_numeric($num2) ) {
            $resultado = $num1 * $num2;
            return $resultado;
        }
        return 'Ambos deben ser números';
    }

    function pares( $numero )
    {
        if( $numero%2 == 0 ){
            //return 'es par';
            return '#fff';
        }
        //return 'no es par';
        return '#d9d9d9';
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
    //echo multiplicar( 10, 'manzana' )
    echo multiplicar( 10, 6 )
?>
<hr>

<div style="width: 350px; padding: 12px">
<?php
    for ( $n = 1; $n < 25; $n++ ){
?>
    <div style="background-color: <?= pares($n) ?>;">
        <?= $n ?>
    </div>
<?php
    }
?>
</div>

</body>
</html>