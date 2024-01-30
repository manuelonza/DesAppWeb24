<?php include '_header.php';?>


<a href="index.php">Volver</a>

<?php

// Cargar y decodificar JSON:
        $archivo = 'json.json';
        $json = file_get_contents($archivo); // Lee los datos del JSON
        $datos = json_decode($json, true); // Decodifica el JSON y lo transforma en un array


    if (isset($_GET['peli']) && is_numeric($_GET['peli'])) {
        $numerin = intval($_GET['peli']);}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si la posición existe en el array
        if ($numerin >= 0 && $numerin < count($datos)) {
            // Actualizar los campos de la película en la posición especificada
            // Puedes cambiar y agregar los campos que necesites actualizar
            $datos[$numerin]['title'] = $_POST['title'];
            $datos[$numerin]['poster'] = $_POST['poster'];
            $datos[$numerin]['overview'] = $_POST['overview'];
            $datos[$numerin]['release_date'] = strtotime($_POST['release_date']);
            $datos[$numerin]['genres'] = explode(", ", $_POST['genres']);
            // ...

            // Guardar los cambios en el archivo JSON
            $updatedData = json_encode($datos, JSON_PRETTY_PRINT);
            file_put_contents($archivo, $updatedData);

            echo 'La información de la película: ' . $datos[$numerin]['title']. ' ha sido actualizada correctamente.';
        } else {
            echo 'La posición de la película no es válida.';
        }
}

?>

<h2>Editar Película</h2>
<img src="<?php echo $datos[$numerin]['poster']; ?>">
<form method="post" action="update.php?peli=<?php echo $numerin; ?>">
    <label for="title">Título:</label>
    <input type="text" name="title" value="<?php echo $datos[$numerin]['title']; ?>"><br>

    <label for="poster">URL del Póster:</label>
    <input type="text" name="poster" value="<?php echo $datos[$numerin]['poster']; ?>"><br>

    <label for="overview">Resumen:</label>
    <textarea name="overview"><?php echo $datos[$numerin]['overview']; ?></textarea><br>

    <label for="release_date">Fecha de Estreno:</label>
    <input type="date" name="release_date" value="<?php echo $datos[$numerin]['release_date']; ?>"><br>

    <label for="genres">Géneros (separados por comas):</label>
    <input type="text" name="genres" value="<?php echo implode(", ", $datos[$numerin]['genres']); ?>"><br>

    <input type="submit" value="Actualizar Película">
</form>


<?php include '_footer.php'; ?>