<?php

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = agregarUsuario();
    include 'layout/header.php';
    include 'layout/nav.php';
    
    $css = 'danger';
    $mensaje = 'No se pudo agregar el usuario.';
    if ( $chequeo ){
        $css = 'success';
        $mensaje = 'Usuario agregado correctamente.';
    }
?>

    <main class="container py-4">
        <h1>Alta de un usuario</h1>

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