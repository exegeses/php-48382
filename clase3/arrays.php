<?php
    include 'layout/header.php';
?>
    <main class="container py-3">
        <h1>Arrays en PHP</h1>
    <div class="alert shadow">
<?php
    //$nombres = array('Apolinar', 'Cipriano', 'Daniel', 'Didier', 'Elías');
    $nombres = ['Apolinar', 'Cipriano', 'Daniel', 'Didier', 'Elías'];
    echo $nombres[2];
?>
    </div>

    <div class="alert shadow">
<?php
    $marcas = [
                'Samsung', 'Huawei', 'iPhone',
                'Xiaomi', 'Motorola', 'Alcatel',
                'Sony', 'Kyocera'
              ];
    echo '<pre>';
    print_r( $marcas );
    echo '</pre>';
?>
    </div>

    <div class="alert shadow">
<?php
    //double arrow =>
    $marcas = [
                5 => 'Samsung', 9 => 'Huawei', 'iPhone',
                'Xiaomi', 'Motorola', 'Alcatel',
                'Sony', 'Kyocera'
              ];
    echo '<pre>';
    print_r( $marcas );
    echo '</pre>';
?>
    </div>

        <div class="alert shadow">
<?php
        $marcas = [
            'Samsung'=>'A10',
            'Huawei'=>'P50 Pro',
            'iPhone'=>'12x Pro',
            'Xiaomi'=>'MI9' ,
            'Motorola'=>'Moto G Stylus',
            'Alcatel'=>'1v',
            'Sony'=>'G3423',
            'Kyocera'=>'KC-S701'
        ];

        echo $marcas['Xiaomi'];

        echo '<pre>';
        print_r( $marcas );
        echo '</pre>';
?>
        </div>

    <div class="alert shadow">
<?php
    $semana = [
                'Domingo', 'Lunes', 'Martes', 'Miércoles',
                'Jueves', 'Viernes', 'Sábado'
              ];
    $meses = [
                "Enero", "Febrero", "Marzo",
                "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre",
                "Octubre", "Noviembre", "Diciembre"
             ];
    $nSemana = date('w'); //número del día de la semana
    $diaMes = date('d');
    $nMes = date('n');
    $anio = date('Y');
    //imprimir fecha formato Sábado 5 de febrero de 2022
    echo $semana[$nSemana], ' ', $diaMes, ' de ', $meses[$nMes], ' de ', $anio;
?>

    </div>

    </main>
    <br>
<?php
    include 'layout/footer.php';
?>