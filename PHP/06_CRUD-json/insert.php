<?php
include '_header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $title = $_POST["title"];
    $poster = $_POST["poster"];
    $overview = $_POST["overview"];
    $release_date = strtotime($_POST["release_date"]);
    $genres = explode(", ", $_POST["genres"]);

    // Crear nuevo objeto película
    $newMovie = [
        // "id" => uniqid(),  // Puedes generar un ID único aquí
        "title" => $title,
        "poster" => $poster,
        "overview" => $overview,
        "release_date" => $release_date,
        "genres" => $genres
    ];

    // Cargar el JSON existente
    $existingData = json_decode(file_get_contents("json.json"), true);

    // Añadir la nueva película al array existente
    $existingData[] = $newMovie;

    // Guardar el JSON actualizado
    file_put_contents("json.json", json_encode($existingData, JSON_PRETTY_PRINT));

    header("Location: index.php");
    die();
}
?>

<h2>Añadir Película</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="title">Título:</label>
    <input type="text" name="title" required><br>

    <label for="poster">URL del Póster:</label>
    <input type="text" name="poster" required><br>

    <label for="overview">Resumen:</label>
    <textarea name="overview" required></textarea><br>

    <label for="release_date">Fecha de Estreno:</label>
    <input type="date" name="release_date" required><br>

    <label for="genres">Géneros (separados por comas):</label>
    <input type="text" name="genres" required><br>

    <input type="submit" value="Añadir Película">
</form>

<?php include '_footer.php'; ?>
