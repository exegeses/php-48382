<?php
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de categorías</h1>

        <div class="row my-3 d-flex justify-content-between">
            <div class="col">
                <a href="admin.php" class="btn btn-outline-secondary">
                    Dashboard
                </a>
            </div>
            <div class="col text-end">
                <a href="formAgregarCategoria.php" class="btn btn-outline-secondary">
                    <i class="bi bi-plus-square"></i>
                    Agregar
                </a>
            </div>
        </div>

        
        <ul class="list-group">
            <li class="col-md-6 list-group-item list-group-item-action d-flex justify-content-between">
            <div class="col">
                <span class="fs-4">Categoría</span>
            </div>
            <div class="col text-end btn-group">
                <a href="#" class="btn btn-outline-secondary me-1">
                    <i class="bi bi-pencil-square"></i>
                    Modificar
                </a>
                <a href="#" class="btn btn-outline-secondary me-1">
                    <i class="bi bi-trash"></i>
                    &nbsp;Eliminar&nbsp;
                </a>
            </div>
            </li>
        </ul>


    </main>

<?php
    include 'layout/footer.php';
?>