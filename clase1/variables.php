<?php
    $numero = 137;
    $texto = 'cadena de caractéres';
    const NOMBRE = 'Rick';
    const APELLIDO = 'Sánchez';
?>
<h1>Trabajando con variables en PHP</h1>
<?php
    echo $numero;
?>
<br>
<?php
    echo $texto;
?>
<br>
<?php
    $texto = 'otro texto';
    echo $texto;
?>
<br>
<?php
    echo NOMBRE, ' ', APELLIDO;// imprimimos 1 sóla operación
    echo '<br>';
    echo NOMBRE . ' ' . APELLIDO;// 2 concatenaciones + 1 impresión
?>
<br>
<?php
    $sql = "SELECT prdNombre, prdPrecio
                FROM productos
                WHERE prdPrecio < ".$numero;
?>
