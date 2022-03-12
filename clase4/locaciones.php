<?php
    $fotos =
        [
            'angkor', 'azul', 'basil', 'burj',
            'colosseo', 'easter', 'eiffel',
            'gizah', 'ha-long', 'liberty',
            'machu', 'opera', 'palace', 'petra',
            'sagrada', 'santorini', 'taj',
            'wall'
        ];
    $paises =
        [
            'Cambodia', 'Turquía', 'Rusia',
            'Dubai', 'Italia', 'Chile',
            'Francia', 'Egipto', 'Vietnam',
            'USA', 'Peru', 'Australia',
            'Tailandia', 'Jordania', 'España',
            'Grecia', 'India', 'China'
        ];
    $descripciones =
        [
            'Angkor Wat, Angkor',
            'Mezquita azul, Estambul',
            'Catedral de San Basilio, Moscu',
            'Burj Khalifa, Dubai',
            'El Coliseo, Roma', 'Isla de Pascua, Chile',
            'Tour Eiffel, París',
            'Gran Pirámide de Guiza, Guiza',
            'Hạ Long Bay, Quang Ninh, Vietnam',
            'Estatua de la Libertad, New York',
            'Machu Picchu, Perú',
            'Opera House, Sydney', 'Grand Palace, Bangkok', 'petra',
            'La Sagrada Familia, Barcelona',
            'Santorini, Archipiélago de las Cícladas',
            'Taj Mahal, Agra',
            'La Gran Muralla, Jinshanling'
        ];
    $cantidad = count( $paises );
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
   for( $n = 0; $n < $cantidad; $n++ )
        {
?>
        <article>
            <img src="locaciones/<?= $fotos[$n]; ?>.jpg">
            <h2><?= $paises[$n]; ?></h2>
            <p>
                <?= $descripciones[$n]; ?>
            </p>
        </article>
<?php
        }
    //fin de bucle
?>


</main>

</body>
</html>


