<?php

    function login()
    {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $link = conectar();
        $sql = "SELECT idUsuario, nombre, apellido,
                       clave, idRol
                   FROM usuarios
                   WHERE email = '".$email."'";
        try {
            $resultado = mysqli_query( $link, $sql );
            $cantidad = mysqli_num_rows($resultado);
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }

        //si $cantidad == 0  -> usuario mal
        //si $cantidad == 1  -> usuario ok
        if ( $cantidad == 0 ){
            //redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{
            //verificar contraseña

        }
    }
    function logout()
    {}
    function autenticar()
    {}