<?php

    function login()
    {
        $email = $_POST['email'];
        $clave= $_POST['clave'];
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
            $usuario = mysqli_fetch_assoc( $resultado );
            if( !password_verify( $clave, $usuario['clave'] ) )
            {
                //redirección a formLogin
                header('location: formLogin.php?error=1');
            }
            /* acá ya sabemos que se logueó bien */
            ######  RUTINA DE AUTENTICACIÓN   #######
            $_SESSION['login'] = 1;
            #registramos otros datos del usuario en su sesión
            $_SESSION['idUsuario'] = $usuario['idUsuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['apellido'] = $usuario['apellido'];
            $_SESSION['idRol'] = $usuario['idRol'];
            //redirección a admin
            header('location: admin.php');
        }
    }
    function logout()
    {
        //eliminamos datos de la sesión
        session_unset();
        //eliminamos la sesión
        session_destroy();
        //redirección a index con un delay
        header('refresh:3;url=index.php');
    }
    function autenticar()
    {
        if( !isset( $_SESSION['login'] ) )
        {
            header('location: formLogin.php?error=2');
        }
    }

    function esAdmin()
    {
        if( $_SESSION['idRol'] != 1 )
        {
            header('location: noAdmin.php');
        }
    }