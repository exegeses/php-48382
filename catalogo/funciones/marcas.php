<?php

#########################
###  CRUD de marcas
#########################

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }

    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'] ;
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        try{
            $resultado = mysqli_query( $link, $sql );
            $marca = mysqli_fetch_assoc( $resultado );
        }
        catch(Exception $e){
            $marca = false;
            echo $e->getMessage();
        }
        return $marca;
    }

    function agregarMarca()
    {
        //captura de datos enviados por el form
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUE
                        ( '".$mkNombre."' )";
/*        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );//control de errores 7.4
*/
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }


/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */