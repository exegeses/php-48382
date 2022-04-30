<?php
    $clave = 'manzana';
    $pwHash = password_hash( $clave, PASSWORD_DEFAULT );

    echo $pwHash;// primer valor
    echo '<br>';

    $pwHash = password_hash( $clave, PASSWORD_DEFAULT );
    echo $pwHash;// segundo valor

//password_verify()