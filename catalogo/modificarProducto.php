<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo modificar el producto.';
    if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto modificado correctamente.';
    }

?>

    <main class="container py-4">
        <h1>Modificación de un producto</h1>

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