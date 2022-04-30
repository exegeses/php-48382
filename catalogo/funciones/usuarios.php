<?php

    function listarUsuarios()
    {
        $link = conectar();
        $sql  = "SELECT idUsuario, nombre, apellido, email
                            FROM usuarios";
        try{
            $resultado = mysqli_query($link,$sql);
        }
        catch(Exception $e){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }
    function agregarUsuario()
    {
        $nombre = $_POST['nombre'] ;
        $apellido = $_POST['apellido'] ;
        $email = $_POST['email'] ;
        $clave = $_POST['clave'] ; //clave sin encriptar
        $idRol = 2;

        //clave encriptada
        $pwHash = password_hash( $clave, PASSWORD_DEFAULT );

        $link = conectar();

        $sql ="INSERT INTO usuarios 
                    VALUES  
                        ( DEFAULT ,
                         '".$nombre."',
                         '".$apellido."',
                         '".$email."',
                         '". $pwHash."',
                         ". $idRol.")";

        try{
            $resultado = mysqli_query($link,$sql);
        }
        catch(Exception $e){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }

    function modificarClave()
    {
        //capturamos clave actual SIN ENCRIPTAR
        $clave = $_POST['clave'];
        /** obtenemos la contraseña encriptada **/
        $link = conectar();
        $sql  = "SELECT clave
                    FROM usuarios 
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        //obtenemos clave encriptada
        $usuario = mysqli_fetch_assoc($resultado);
        $pwHash = $usuario['clave'];
        // las comparamos con password_verify()
        if ( password_verify( $clave, $pwHash ) ){
            // coinciden
                //encriptamos la clave nueva
            $newClave = $_POST['newClave'];
            $newClaveHash = password_hash($newClave,PASSWORD_DEFAULT);
            //modificamos en tabla usuarios
            $sql = "UPDATE usuarios 
                        SET clave = '".$newClaveHash."' 
                        WHERE idUsuario = ".$_SESSION['idUsuario'];
            try {
                $resultado = mysqli_query( $link, $sql );
            }catch ( Exception $e ){
                $resultado = false;
                echo $e->getMessage();
            }
            return $resultado;
        }
        //si no coinciden, redireccion a form de modificación
        header('location: formModificarClave.php?error=1');
    }