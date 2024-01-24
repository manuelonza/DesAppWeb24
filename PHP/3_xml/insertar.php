<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Libros</title>
</head>
<body>

<h2>Añadir Libro</h2>

<form action="procesar_formulario.php" method="post">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required><br>

    <label for="imagen">URL de la Imagen:</label>
    <input type="text" name="imagen" required><br>

    <label for="genero">Género:</label>
    <input type="text" name="genero" required><br>

    <label for="anio">Año de Publicación:</label>
    <input type="text" name="anio" required><br>

    <label for="editorial">Editorial:</label>
    <input type="text" name="editorial" required><br>

    <input type="submit" value="Agregar Libro">
</form>

</body>
</html>
