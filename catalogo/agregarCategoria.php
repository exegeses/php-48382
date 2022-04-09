<?php
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo agregar la categoría.';
    if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Categoría agregada correctamente.';
    }
?>

    <main class="container py-4">
        <h1>Alta de una categoría</h1>

        <div class="alert alert-<?= $css ?> col-7 mx-auto">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-light m-2">
                Volver a panel de categorías
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>