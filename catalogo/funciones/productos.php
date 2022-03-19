<?php
#########################
###  CRUD de productos
#########################

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        mkNombre, catNombre, 
                        prdDescripcion, prdImagen
                    FROM productos, marcas, categorias
                    WHERE marcas.idMarca = productos.idMarca
                    AND categorias.idCategoria = productos.idCategoria";
    /*
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        mkNombre, catNombre,
                        prdDescripcion, prdImagen
                    FROM productos
                    JOIN marcas
                      ON marcas.idMarca = productos.idMarca
                    JOIN categorias
                      ON categorias.idCategoria = productos.idCategoria";
    */
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

/*
 * listarProductos()
 * verProductoPorID()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */