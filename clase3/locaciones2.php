<?php
$locaciones2 =
    [
        'Cambodia'=>'angkor',
        'Turquía'=>'azul',
        'Rusia'=>'basil',
        'Dubai'=>'burj',
        'Italia'=>'colosseo',
        'Chile'=>'easter',
        'Francia'=>'eiffel',
        'Egipto'=>'gizah',
        'Vietnam'=>'ha-long',
        'USA'=>'liberty',
        'Peru'=>'machu',
        'Australia'=>'opera',
        'Tailandia'=>'palace',
        'Jordania'=>'petra',
        'España'=>'sagrada',
        'Grecia'=>'santorini',
        'India'=>'taj',
        'China'=>'wall'
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <main>

<?php
    //inicio de bucle
    // foreach ( $contenedor as $key => $valor )
    foreach ( $locaciones2 as $pais => $foto ) {
?>
        <article>
            <img src="locaciones/<?php echo $foto ?>.jpg">
            <h2><?php echo $pais  ?></h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto assumenda atque corporis est expedita hic ipsam laborum maxime quas.
            </p>
        </article>
<?php
    }
    //fin de bucle
?>


    </main>

</body>
</html>
