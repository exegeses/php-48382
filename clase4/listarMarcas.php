<?php

    require 'conectarConServer.php';

    $sql = "SELECT idMarca, mkNombre
                FROM marcas";

    $resultado = mysqli_query( $link, $sql );

    // función auxiliar  mysqli_fetch_assoc()

    while( $fila = mysqli_fetch_assoc( $resultado ) )
    {
        echo $fila['idMarca'], ' ';
        echo $fila['mkNombre'], '<br>';
    }






