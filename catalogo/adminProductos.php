<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de productos</h1>

        <div class="row my-3 text-start">
            <div class="col-11">
                <a href="admin.php" class="btn btn-outline-secondary">
                    Dashboard
                </a>
            </div>
            <div class="col-1 text-end">
                <a href="formAgregarProducto.php" class="btn btn-outline-secondary">
                    <i class="bi bi-plus-square"></i>
                    Agregar
                </a>
            </div>
        </div>
<?php
      while ( $producto = mysqli_fetch_assoc( $productos ) ){
?>
        <div class="row mt-3">
            <figure class="col-3">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
            </figure>
            <div class="col-8">
                <h2><?= $producto['prdNombre'] ?></h2>
                <span class="precio3">$<?= $producto['prdPrecio'] ?></span>
                <p>
                    Marca: <?= $producto['mkNombre'] ?> <br>
                    Categoría: <?= $producto['catNombre'] ?> <br>
                    <?= $producto['prdDescripcion'] ?>
                </p>
            </div>
            <div class="col-1 d-grid d-md-block">
                <a href="#" class="btn btn-outline-secondary me-1">
                    <i class="bi bi-pencil-square"></i>
                    Modificar
                </a>
                <a href="#" class="btn btn-outline-secondary me-1">
                    <i class="bi bi-trash"></i>
                    &nbsp;Eliminar&nbsp;
                </a>
            </div>
        </div>
<?php
      }
?>
          

    </main>

<?php
    include 'layout/footer.php';
?>