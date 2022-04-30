<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modificarClave();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo modificar la contraseña.';
    if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Contraseña modificada correctamente.';
    }
?>

    <main class="container py-4">
        <h1>Modificación de contraseña</h1>

        <div class="alert alert-<?= $css ?> col-7 mx-auto">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-light m-2">
                Volver a panel de usuarios
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>