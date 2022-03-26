<?php
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de una marca</h1>

        <div class="alert alert-success col-7 mx-auto">
            Marca agregada correctamente.
            <a href="adminMarcas.php" class="btn btn-light m-2">
                Volver a panel de marcas
            </a>
        </div>

        <div class="alert alert-danger col-7 mx-auto">
            No se pudo agregar la marca.
            <a href="adminMarcas.php" class="btn btn-light m-2">
                Volver a panel de marcas
            </a>
        </div>

    </main>

<?php
    include 'layout/footer.php';
?>