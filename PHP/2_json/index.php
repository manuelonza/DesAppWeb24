<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<ul>

<?php

if(file_exists('json.json'))
{
	$json = file_get_contents('json.json'); //lee los datos del JSON
	$datos = json_decode($json, true);  //decodifinaca el JSON
	

	foreach($datos as $dato) {
		echo "
		<li>
		<img src='{$dato['poster']}'>
		<h2>{$dato['title']}</h2>
		<p>{$dato['overview']}</p>
		</li>";
	
	}
	
}
else{
	echo "No se ha podido cargare el JSON";
}


?>

</ul>