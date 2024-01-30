<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Gim 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Calendario Gim</h1>
        <nav>
            <ul>
                <li><a href="index.php">Ver en modal</a></li>
                <li><a href="index2.php">Ver tipo mail</a></li>
            </ul>
        </nav>
</header>

<main>

<?php

// Cargar y leer el contenido del JSON
$jsonData = file_get_contents('actividades.json');
$data = json_decode($jsonData, true);

?>

<div class="semana">
    <?php


    $arrayJS='';

    
    $i=0;
    foreach($data['calendario'] as $dia){
 
    echo '<div id="'.$dia['dia'].'">';
    echo '<h2>'.$dia['dia'].'</h2>';
    echo '<ul>';


        foreach($dia['actividades'] as $actividad){

            echo '<li class="'.$actividad['categoria'].'" onclick="cargar('.$i.')">
            <h3>'.$actividad['actividad'].'</h3>
            <p class="hora"><i class="fa-solid fa-clock"></i>'.$actividad['hora'].'</p>
            <p class="duracion"><i class="fa-solid fa-hourglass-half"></i>'.$actividad['duracion'].'min</p>
            <p class="sala"><i class="fa-solid fa-location-dot"></i>'.$actividad['sala'].'</p>
            </li>';

            // Tu bucle o lógica para agregar elementos al array
            $arrayJS.='
            ["'.$actividad['actividad'].'","'.$actividad['categoria'].'","'.$actividad['foto'].'","'.$actividad['hora'].'","'.$actividad['duracion'].'","'.$actividad['sala'].'","'.$actividad['monitor'].'","'.$actividad['descripcion'].'"],';

        

           
            $i++;
        }
        
        echo '</ul>';
        echo '</div>';
        
    }

        // Eliminar la coma al final del último elemento
        $arrayJS = rtrim($arrayJS, ',');
    
    echo '<script>
    let actividades =[
    '.$arrayJS.'
];
    </script>';
    
    
    ?>
</div> <!-- semana -->

<div id="dato">


</div> <!-- dato -->
</main>
    
    <script src="script.js"></script>
</body>
</html>