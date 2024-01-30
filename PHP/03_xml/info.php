<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector XML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">< Volver</a>

    <ul>
<?php

// Obtener el número de la variable GET
$numerin = intval($_GET['v']);

// Cargar el XML
$xml = simplexml_load_file('xml.xml');


$libro = $xml->libro[$numerin];

            echo "<li>
            <img src='{$libro->imagen}'>
            <h2>" . $libro->titulo . "</h2>
            <p>Autor: " . $libro->autor . "</p>
            <p>Género: " . $libro->genero . "</p>
            <p>Año de publicación: ".$libro->publicacion->anio."</p>
            <p>Editorial: ".$libro->publicacion->editorial."</p>
            </li>";
 

?>
</ul>

<a href="insertar.php">Insertar</a>
</body>
</html>