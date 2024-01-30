<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>


<?php

// Leer el archivo JSON
$jsonData = file_get_contents('eventos.json');
$data = json_decode($jsonData, true);

// Mostrar catálogo de eventos
// Mostrar catálogo de eventos
if (!isset($_GET['evento'])) {
    echo "<h2>Catálogo de Eventos</h2>";
    echo "<ul>";

    foreach ($data['eventos'] as $key => $evento) {
        $fechaInicio = date('l j F H:i', strtotime($evento['fecha_inicio']));
        echo "<li>";
        echo "<strong>" . $evento['titulo'] . "</strong>";
        echo "<br>Fecha y hora: $fechaInicio";
        echo "<br>Ubicación: " . $evento['ubicacion'];
        echo "<br><a class='btn' href='index.php?evento=$key'>Descargar evento</a>";
        echo "</li>";
    }

    echo "</ul>";
} else {
    // Obtener el índice del evento seleccionado
    $indiceEvento = $_GET['evento'];

    // Validar el índice del evento
    if (!is_numeric($indiceEvento) || $indiceEvento < 0 || $indiceEvento >= count($data['eventos'])) {
        echo "<p>Evento no válido</p>";
    } else {
        // Obtener el evento seleccionado
        $evento = $data['eventos'][$indiceEvento];

        // Encabezado para el archivo .ics
        $icsContent = "BEGIN:VCALENDAR\r\n";
        $icsContent .= "VERSION:2.0\r\n";
        $icsContent .= "PRODID:-//Your Company//Your App//EN\r\n";

        // Añadir el evento al archivo .ics
        $icsContent .= "BEGIN:VEVENT\r\n";
        $icsContent .= "SUMMARY:" . $evento['titulo'] . "\r\n";
        $icsContent .= "DESCRIPTION:" . $evento['descripcion'] . "\r\n";
        $icsContent .= "DTSTART:" . date('Ymd\THis', strtotime($evento['fecha_inicio'])) . "\r\n";
        $icsContent .= "DTEND:" . date('Ymd\THis', strtotime($evento['fecha_fin'])) . "\r\n";
        $icsContent .= "LOCATION:" . $evento['ubicacion'] . "\r\n";
        $icsContent .= "END:VEVENT\r\n";

        // Pie del archivo .ics
        $icsContent .= "END:VCALENDAR\r\n";

        // Encabezados para la descarga del archivo
        header('Content-Type: text/calendar');
        header('Content-Disposition: attachment; filename="evento_' . $indiceEvento . '.ics"');

        // Imprimir el contenido del archivo .ics
        echo $icsContent;
    }
}

?>

</main>

</body>
</html>