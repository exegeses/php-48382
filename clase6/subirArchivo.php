<?php

    //capture archivo enviado multipart
    $prdImagen = $_FILES['prdImagen'];

    //sólamente para ver QUE hay dentro del multipart
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    // sí sólo queremos ver partes
    echo 'Nombre: ', $_FILES['prdImagen']['name'];
    echo '<br>';
    echo 'Error code: ', $_FILES['prdImagen']['error'];

    /* movemos archivo a directorio /productos */
    $path = 'productos/';
    $nombre = $_FILES['prdImagen']['name'];
    $nombreTMP = $_FILES['prdImagen']['tmp_name'];

    move_uploaded_file( $nombreTMP, $path.$nombre );
