<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector XML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
<?php
// Cargar el XML
$xml = simplexml_load_file('xml.xml');

// Verificar si la carga fue exitosa
if ($xml==true) {
    // Recorrer cada libro
    foreach ($xml->libro as $libro) {   
            echo "<li>
            <img src='{$libro->imagen}'>
            <h2>" . $libro->titulo . "</h2>
            <p>Autor: " . $libro->autor . "</p>
            <p>Género: " . $libro->genero . "</p>
            <p>Año de publicación: " . $libro->publicacion->anio . "</p>
            <p>Editorial: " . $libro->publicacion->editorial . "</p>
            </li>";
    }
} else {
    // Mensaje de error si no se puede cargar el archivo
    echo "Error al cargar el archivo XML.";
}


?>
</ul>
</body>
</html>