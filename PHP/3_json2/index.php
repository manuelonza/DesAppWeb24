<h1>Lector de JSONs</h1>



<?php
$archivo='json.json';

if(file_exists($archivo)){
    $contenido = file_get_contents($archivo);
    $datos = json_decode($contenido, true);

    foreach($datos as $dato) {
        echo "
        <li>
        <img src='{$dato['poster']}' alt='{$dato['title']}'>
        <h2>{$dato['title']}</h2>
        <p>{$dato['overview']}</p>
        </li>";
    }
}
else{
    echo "No hemos podido cargar el archivo ".$archivo;
}
?>