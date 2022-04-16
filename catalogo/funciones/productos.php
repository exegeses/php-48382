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

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'] ;
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        m.idMarca, mkNombre, 
                        c.idCategoria, catNombre, 
                        prdDescripcion, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE m.idMarca = p.idMarca
                    AND c.idCategoria = p.idCategoria
                    AND idProducto = ".$idProducto;
        try{
            $resultado = mysqli_query( $link, $sql );
            $producto = mysqli_fetch_assoc( $resultado );
        }
        catch(Exception $e){
            $producto = false;
            echo $e->getMessage();
        }
        return $producto;
    }

    function subirImagen()
    {
        // si no enviaron imagen en agregar
        $prdImagen = 'noDisponible.png';

        // si no enviaron imagen en modificar
        if ( isset( $_POST['imgActual'] ) ){
            $prdImagen = $_POST['imgActual'];
        }

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

    function modificarProducto(){
        $link = conectar();
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        //subirImagen *
        $prdImagen = subirImagen();
        $sql = "UPDATE productos  
                  SET prdNombre = '".$prdNombre."',
                      prdPrecio = ".$prdPrecio.",
                      idMarca = ".$idMarca.",
                      idCategoria = ".$idCategoria.",
                      prdDescripcion = '".$prdDescripcion."',
                      prdImagen = '".$prdImagen."'
                  WHERE idProducto = ".$idProducto;

        try{
            $resultado = mysqli_query($link,$sql);
        }
        catch(Exception $e){
            $resultado = false;
            echo $e->getMessage;
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