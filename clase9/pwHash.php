<?php
    $clave = 'manzana';
    $pwHash = password_hash( $clave, PASSWORD_DEFAULT );

    echo $pwHash;

    //password_verify()