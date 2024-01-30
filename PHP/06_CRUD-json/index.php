<?php

include '_header.php';

// variable con el archivo a cargar
$archivo ='json.json';

// si el archivo existe..
if(file_exists($archivo))
{
	
	$json = file_get_contents($archivo); //lee los datos del JSON
	$datos = json_decode($json, true);  //decodifinaca el JSON y lo transforma en un array
	$i=0;

	//recorremos el array de desplegamos su contenido
	echo '<ul>';
	foreach($datos as $dato) {
		echo "
		<li>
		<a href='info.php?peli={$i}' title='{$dato['title']}'>
		<img src='{$dato['poster']}'>
		<h2>{$dato['title']}</h2>
		</a>
		</li>";
		$i++;
	}
	echo '</ul>';
	
}
// si el archivo no existe lanzamos un mensaje..
else{
	echo "<p>No se ha podido cargare el {$archivo}. <button onclick='window.history.back();'>Volver atrás</button>";
}


?>

</ul>

<a href="insert.php">Añadir película</a>

<?php include '_footer.php'; ?>