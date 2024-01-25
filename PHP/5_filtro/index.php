<?php

define('ARCHIVO','portfolio.json');

if(file_exists(ARCHIVO))
{
	$json = file_get_contents(ARCHIVO); //lee los datos del JSON
	$datos = json_decode($json, true);  //decodifinaca el JSON
}

else{
	echo "No se ha podido cargare el JSON";
}



// Convertir a SLUG
function convertirASlug($texto) {
    // Reemplazar caracteres especiales y espacios por guiones bajos
    $texto = preg_replace('/[^\p{L}0-9]+/u', '_', $texto);

    // Convertir a minúsculas
    $texto = strtolower($texto);

    return $texto;
}
//-

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<!-- Control buttons -->
<div id="myBtnContainer">
<button class="btn active" onclick="filterSelection('all')"> Mostrar Todo</button>
<?php


$ambitosUnicos = [];

foreach ($datos as $proyecto) {
    $ambitosUnicos = array_merge($ambitosUnicos, $proyecto['ambito']);
}

$ambitosUnicos = array_unique($ambitosUnicos);

foreach($ambitosUnicos as $miambito){
echo "<button class='btn' onclick='filterSelection(`".convertirASlug($miambito)."`)'>{$miambito}</button>";
}


?>

</div>







<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<ul class="container">


<?php

	
	foreach($datos as $dato) {
		echo "<li class='filterDiv";
        foreach( $dato['ambito'] as $ambito ){
            echo " ".convertirASlug($ambito); 
        }
        echo "'>{$dato['proyecto']}</li>";
    }
?>
</ul>




    <script src="js.js"></script>
</body>
</html>