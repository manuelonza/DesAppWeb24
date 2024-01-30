<?php
include '_header.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener el número de la película desde la variable GET
    if (isset($_GET['peli']) && is_numeric($_GET['peli'])) {
        $numerin = intval($_GET['peli']);


        // Variable con el archivo a cargar
        $archivo = 'json.json';
        $json = file_get_contents($archivo); // Lee los datos del JSON
        $datos = json_decode($json, true); // Decodifica el JSON y lo transforma en un array


        $peliEliminada = $datos[$numerin]['title'];

        // Verificar si la posición existe en el array
        if ($numerin >= 0 && $numerin < count($datos)) {
            // Eliminar la película en la posición especificada
            array_splice($datos, $numerin, 1);

            // Guardar los cambios en el archivo JSON
            $updatedData = json_encode($datos, JSON_PRETTY_PRINT);
            file_put_contents($archivo, $updatedData);

            echo '<p>La película en la posición <strong>' . $peliEliminada . ' </strong> ha sido eliminada correctamente.</p><a href="index.php">Volver</a>';
        } else {
            echo 'La posición de la película no es válida.';
        }
    } else {
        echo 'No se proporcionó una posición válida a través de GET.';
    }
} else {
    echo 'Error: Acceso no permitido.';
}

?>
<?php include '_footer.php'; ?>
