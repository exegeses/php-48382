<?php
    include 'layout/header.php';
?>
    <main class="container py-3">
        <h1>Casteo de comillas y errores</h1>

        <div class="alert shadow">
<?php
    $nombre = 'marcos';
    echo 'Tu nombre es: $nombre';// no castea la variable
    echo '<br>';
    echo "Tu nombre es: $nombre";// si castea la variable
    echo '<br>';
    //echo manzana;
    echo 'Tu nombre es: ', $nombre;
?>
        </div>

<?php
    $letras = ['a', 'b', 'c'];
    const IVA = 21;
    //echo $letras[8];
    echo '<br>', IVA;
?>

    </main>
<?php
    include 'layout/footer.php';
?>