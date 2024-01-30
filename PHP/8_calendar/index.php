<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Gim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php


// Cargar y leer el contenido del JSON
$jsonData = file_get_contents('actividades.json');
$data = json_decode($jsonData, true);




?>

<div class="semana">
    <?
    
    foreach($data['calendario'] as $dia){
 
    echo '<div id="'.$dia['dia'].'">';
    echo '<h2>'.$dia['dia'].'</h2>';
    echo '<ul>';

        foreach($dia['actividades'] as $actividad){

            echo '<li class="'.$actividad['categoria'].'" onclick="modal(this)">
            <h3>'.$actividad['actividad'].'</h3>
            <p class="hora"><i class="fa-solid fa-clock"></i>'.$actividad['hora'].'</p>
            <p class="duracion"><i class="fa-solid fa-hourglass-half"></i>'.$actividad['duracion'].'min</p>
            <p class="sala"><i class="fa-solid fa-location-dot"></i>'.$actividad['sala'].'</p>
            <p class="monitor"><i class="fa-solid fa-user"></i>Monitor: '.$actividad['monitor'].'</p>


    <div class="modal desactivado">
    <div class="ventana '.$actividad['categoria'].'"> 
        <div class="cerrar"><i class="fa-solid fa-xmark"></i></div>   
        <img src="img/'.$actividad['foto'].'" alt="'.$actividad['actividad'].'">
        <h3>'.$actividad['actividad'].'</h3>
                <p class="hora"><i class="fa-solid fa-clock"></i>'.$actividad['hora'].'</p>
                <p class="duracion"><i class="fa-solid fa-hourglass-half"></i>'.$actividad['duracion'].'min</p>
                <p class="sala"><i class="fa-solid fa-location-dot"></i>'.$actividad['sala'].'</p>
                <p class="monitor"><i class="fa-solid fa-user"></i>Monitor: '.$actividad['monitor'].'</p>
                <p class="descripcion"><i class="fa-solid fa-person-running"></i></i>Descripcion: '.$actividad['descripcion'].'</p>
        </div>
    </div>

        </li>';
        }
 
    echo '</ul>';
    echo '</div>';
}
    ?>
</div>

    
    <script src="script.js"></script>
</body>
</html>