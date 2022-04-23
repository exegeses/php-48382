<?php

#########################
###  CRUD de categorías
#########################

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                        FROM categorias";
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }

    function verCategoriaPorID()
    {
        $link = conectar();
        $idCategoria = $_GET['idCategoria'];
        $sql = "SELECT idCategoria, catNombre
                        FROM categorias
                    WHERE idCategoria = ".$idCategoria;
        try {
            $resultado = mysqli_query( $link, $sql );
            $categoria = mysqli_fetch_assoc($resultado);
        }catch ( Exception $e ){
            $categoria = false;
            echo $e->getMessage();
        }
        return $categoria;
    }

    function agregarCategoria()
    {
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias
                            ( catNombre )
                        VALUE
                            ( '".$catNombre."' )";
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }

    function modificarCategoria()
    {
        $idCategoria = $_POST['idCategoria'];
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "UPDATE categorias
                    SET catNombre = '".$catNombre."'
                    WHERE idCategoria = ".$idCategoria;
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }

