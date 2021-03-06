<?php
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container">
        <h1>Alta de un producto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="prdNombre">Nombre del producto</label>
                    <input type="text" name="prdNombre"
                           class="form-control" id="prdNombre" required>
                </div>

                <label for="prdPrecio">Precio del producto</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="prdPrecio"
                           class="form-control" id="prdPrecio" min="0" step="0.01" required>
                </div>

                <div class="form-group mb-4">
                    <label for="idMarca">Marca</label>
                    <select class="form-select" name="idMarca" id="idMarca" required>
                        <option value="">Seleccione una marca</option>
<?php
                while ( $marca = mysqli_fetch_assoc( $marcas ) ){
?>
                        <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
<?php
                }
?>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="idCategoria">Categoría</label>
                    <select class="form-select" name="idCategoria" id="idCategoria" required>
                        <option value="">Seleccione una categoría</option>
<?php
            while ( $categoria = mysqli_fetch_assoc( $categorias ) ){
?>
                        <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
<?php
            }
?>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="prdDescripcion">Descripción del producto</label>
                    <textarea name="prdDescripcion" class="form-control" id="prdDescripcion" rows="3" required></textarea>
                </div>

                <div class="form-group mt-1 mb-4">
                    <label for="formFile" class="form-label">Seleccionar archivo:</label>
                    <input type="file" name="prdImagen" class="form-control" id="formFile">
                </div>

                <button class="btn btn-dark px-4">Agregar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">
                    Volver a panel de productos
                </a>

            </form>
        </div>

    </main>

<?php
    include 'layout/footer.php';
?>