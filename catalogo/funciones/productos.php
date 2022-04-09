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
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }


    function subirImagen()
    {
        // si no enviaron imagen
        $prdImagen = 'noDisponible.png';

        // enviaron imagen y está todo ok
        if( $_FILES['prdImagen']['error'] == 0 ){
            $path = 'productos/';
            $nombreTMP = $_FILES['prdImagen']['tmp_name'];
            $nombre = $_FILES['prdImagen']['name'];
            //renombrar archivo
                //extension
            $extension = pathinfo( $nombre, PATHINFO_EXTENSION );
            $prdImagen = time().'.'.$extension;
            //subimos imagen
            move_uploaded_file( $nombreTMP, $path.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'] ;
        $prdPrecio = $_POST['prdPrecio'] ;
        $idMarca = $_POST['idMarca'] ;
        $idCategoria = $_POST['idCategoria'] ;
        $prdDescripcion = $_POST['prdDescripcion'] ;
        //subirImagen *
        $prdImagen = subirImagen();
        //insertar en tabla productos
        $link = conectar();
        $sql ="INSERT INTO productos 
                        VALUES  
                            ( DEFAULT,
                                '".$prdNombre."',
                                ".$prdPrecio.",
                                ".$idMarca.",
                                ".$idCategoria.",
                                '".$prdDescripcion."',
                                '". $prdImagen."', 
                             1 )";

        try{
            $resultado = mysqli_query( $link, $sql );
        }
        catch(Exception $e){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;

    }

/*
 * listarProductos()
 * verProductoPorID()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */