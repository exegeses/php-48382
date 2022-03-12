<?php

    require 'conectarConServer.php';

    $sql = "SELECT idCategoria, catNombre
                FROM categorias";

    $resultado = mysqli_query( $link, $sql );

    // función auxiliar  mysqli_fetch_assoc()

    while( $fila = mysqli_fetch_assoc( $resultado ) )
    {
        echo $fila['idCategoria'], ' ';
        echo $fila['catNombre'], '<br>';
    }






