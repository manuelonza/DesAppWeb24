<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Actividades</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Lee el contenido del JSON
$jsonData = file_get_contents('actividades.json');
$data = json_decode($jsonData, true);

// Verifica si se pudo decodificar correctamente
if ($data !== null) {
    // Itera sobre los días y actividades
    foreach ($data['calendario'] as $day) {
        echo '<h2>' . $day['dia'] . '</h2>';
        echo '<table>';
        echo '<tr><th>Hora</th><th>Actividad</th></tr>';
        
        foreach ($day['actividades'] as $activity) {
            echo '<tr>';
            echo '<td>' . $activity['hora'] . '</td>';
            echo '<td>' . $activity['actividad'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
} else {
    echo 'Error al leer el archivo JSON.';
}
?>

</body>
</html>
