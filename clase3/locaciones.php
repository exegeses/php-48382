<?php
    $locaciones =
        [
            'angkor', 'azul', 'basil', 'burj',
            'colosseo', 'easter', 'eiffel',
            'gizah', 'ha-long', 'liberty',
            'machu', 'opera', 'palace', 'petra',
            'sagrada', 'santorini', 'taj',
            'wall'
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
    $cantidad = count( $locaciones );
    $n = 0;
    //inicio de bucle
    while ( $n < $cantidad ) {
?>
        <article>
            <img src="locaciones/<?php echo $locaciones[$n]  ?>.jpg">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto assumenda atque corporis est expedita hic ipsam laborum maxime quas.
            </p>
        </article>
<?php
        $n++;
    }
    //fin de bucle
?>


    </main>

</body>
</html>
