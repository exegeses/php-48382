<?php

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
