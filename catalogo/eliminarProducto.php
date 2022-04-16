<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = eliminarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo eliminar el producto.';
    if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto eliminado correctamente.';
    }

?>

    <main class="container py-4">
        <h1>Baja de un producto</h1>

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