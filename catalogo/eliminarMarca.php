<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        esAdmin();
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = eliminarMarca();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo eliminar la marca.';
    if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Marca eliminada correctamente.';
    }
?>

    <main class="container py-4">
        <h1>Baja de una marca</h1>

        <div class="alert alert-<?= $css ?> col-7 mx-auto">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-light m-2">
                Volver a panel de marcas
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>