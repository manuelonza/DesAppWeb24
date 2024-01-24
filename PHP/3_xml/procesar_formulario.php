<?php
$rutaArchivo = 'xml.xml';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $imagen = $_POST['imagen'];
    $genero = $_POST['genero'];
    $anio = $_POST['anio'];
    $editorial = $_POST['editorial'];

    $xml = simplexml_load_file($rutaArchivo);

    $nuevoLibro = $xml->addChild('libro');
    $nuevoLibro->addChild('titulo', $titulo);
    $nuevoLibro->addChild('autor', $autor);
    $nuevoLibro->addChild('imagen', $imagen);
    $nuevoLibro->addChild('genero', $genero);

    $publicacion = $nuevoLibro->addChild('publicacion');
    $publicacion->addChild('anio', $anio);
    $publicacion->addChild('editorial', $editorial);

    $xml->asXML($rutaArchivo);

    echo 'Libro agregado correctamente.';
} else {
    echo 'Acceso no permitido.';
}
?>
