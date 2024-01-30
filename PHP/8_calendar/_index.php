<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$diasSemana=['lunes','martes','miércoles','jueves','viernes','sábado','domingo'];





?>


<div class="semana">
    <?
    
foreach($diasSemana as $dia){
    echo '<div id="'.$dia.'">';
    echo '<h2>'.$dia.'</h2>';
    echo '<ul>';
    echo '</ul>';
    echo '</div>';
}
    
    ?>
</div>

    
    <script src="script.js"></script>
</body>
</html>