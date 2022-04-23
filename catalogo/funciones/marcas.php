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
        $idMarca = $_GET['idMarca'];
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

    function modificarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "UPDATE marcas
                    SET mkNombre = '".$mkNombre."'
                    WHERE idMarca = ".$idMarca;
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }

    /**
     * función para verificar si hay productos
     * asignados a un marca
     */
    function verificarProdPorMarca()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT 1 FROM productos
                    WHERE idMarca = ".$idMarca;
        try {
            $resultado = mysqli_query( $link, $sql );
            $cantidad = mysqli_num_rows( $resultado );
        }catch ( Exception $e ){
            $cantidad = 0;
            echo $e->getMessage();
        }
        return $cantidad;

    }

    function eliminarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE FROM marcas
                      WHERE idMarca = ".$idMarca;

        try{
            $resultado = mysqli_query($link,$sql);
        }
        catch(Exception $e){
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