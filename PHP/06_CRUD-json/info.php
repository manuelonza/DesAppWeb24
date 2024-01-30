<?php include '_header.php'; ?>
	
<a href="index.php"><i class="fa-solid fa-angle-left"></i> Volver</a>

<div class="ficha">
<?php
// (...)info.php?peli=2
// capturamos el GET peli que está en la URL
$numerin = $_GET['peli'];

// variable con el archivo a cargar
$archivo ='json.json';

// si el archivo existe..
if(file_exists($archivo))
{
	
	$json = file_get_contents($archivo); //lee los datos del JSON
	$datos = json_decode($json, true);  //decodifinaca el JSON y lo transforma en un array
	
	//vamos al elemento del array que queremos cargar
	
		echo "
		<img src='{$datos[$numerin]['poster']}'>
        <div>
		<h2>{$datos[$numerin]['title']}</h2>
		<p>{$datos[$numerin]['overview']}</p>
		<a class='btn' href='update.php?peli={$numerin}'><i class='fa-solid fa-pencil'></i> Actualizar</a>
		<a class='btn' onclick='confirmar()'><i class='fa-solid fa-trash'></i> Borrar</a>
        </div>";

	
}
// si el archivo no existe lanzamos un mensaje..
else{
	echo "<p>No se ha podido cargare el {$archivo}. <button onclick='window.history.back();'>Volver atrás</button>";
}


?>
</div>


<script>

	let npeli="<?php echo $datos[$numerin]['title']; ?>";

function confirmar(){
	var resultado = confirm("¿Estás seguro de que deseas eliminar la película "+npeli+"?");
	if (resultado) {
		window.location = "delete.php?peli=<?php echo $numerin?>";
	} else {
		alert("Ok, "+npeli+" no se borrará");
	}
}
</script>

<?php include '_footer.php'; ?>