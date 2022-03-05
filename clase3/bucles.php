<?php
    include 'layout/header.php';
?>
    <main class="container py-3 mb-5">
        <h1>Bucles en PHP</h1>

    <div class="alert bg-light shadow-sm">
<?php
    $n = 1;
    while ( $n < 15 ){//límite
        //bloque de código a iterar
        echo $n, '<br>';
        $n++;//incremento
    }
?>
    </div>

    <div class="alert bg-light shadow-sm">
<?php
    $marcas = [
        'Samsung', 'Huawei', 'iPhone',
        'Xiaomi', 'Motorola', 'Alcatel',
        'Sony', 'Kyocera'
    ];
    $n = 0;
    $cantidad = count( $marcas );
    while( $n < $cantidad ){
        //bloque de código a iterar
        echo $marcas[$n], '<br>';
        $n++;
    }
?>
    </div>

    </main>
<?php
    include 'layout/footer.php';
?>