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
