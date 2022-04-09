<?php

    require 'funciones/productos.php';
    agregarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo agregar el producto.';
   /* if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto agregado correctamente.';
    }*/

?>

    <main class="container py-4">
        <h1>Alta de un producto</h1>

        <div class="alert alert-<?= $css ?> col-7 mx-auto">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light m-2">
                Volver a panel de productos
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>