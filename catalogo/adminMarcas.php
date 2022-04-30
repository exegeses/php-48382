<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de marcas</h1>

        <div class="row my-3 d-flex justify-content-between">
            <div class="col">
                <a href="admin.php" class="btn btn-outline-secondary">
                    Dashboard
                </a>
            </div>
            <div class="col text-end">
                <a href="formAgregarMarca.php" class="btn btn-outline-secondary">
                    <i class="bi bi-plus-square"></i>
                    Agregar
                </a>
            </div>
        </div>

        
        <ul class="list-group">
<?php
        while( $marca = mysqli_fetch_assoc( $marcas ) ){
?>
            <li class="col-md-6 list-group-item list-group-item-action d-flex justify-content-between">
            <div class="col">
                <span class="fs-4"><?= $marca['mkNombre'] ?></span>
            </div>
            <div class="col text-end btn-group">
                <a href="formModificarMarca.php?idMarca=<?= $marca['idMarca'] ?>" class="btn btn-outline-secondary me-1">
                    <i class="bi bi-pencil-square"></i>
                    Modificar
                </a>
                <a href="formEliminarMarca.php?idMarca=<?= $marca['idMarca'] ?>&mkNombre=<?= $marca['mkNombre'] ?>" class="btn btn-outline-secondary me-1">
                    <i class="bi bi-trash"></i>
                    &nbsp;Eliminar&nbsp;
                </a>
            </div>
            </li>
<?php
        }
?>
        </ul>


    </main>

<?php
    include 'layout/footer.php';
?>