<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Archivos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    
    </style>
</head>
<body>
<div class="folders">
    <?php
    //ruta de la carpeta donde se encuentra este archivo
    $carpetaActual=dirname(__FILE__);

    // escanerar los elementos de la carpeta actual
    $elementos = scandir($carpetaActual);

    //crea array nuevo sin los elementos mencionados
    $elementos=array_diff($elementos,array('.','..','index.php','style.css'));

    //desplagamos array de elementos listados
    foreach($elementos as $elemento){
        //obtenemos ruta global
        $ruta_elemento = $carpetaActual.'/'.$elemento;
     
        //si es ruta el icono es una carpeta
        if(is_dir($ruta_elemento)){
            $icono='fa-folder';
        }
        //si no, el icono es un archivo
        else{
            $icono='fa-file';
        } 
        //imprimimos el contenido añadiendo un icono  
        echo "<a href='/{$elemento}'>
        <i class='fa-solid {$icono}'></i>
        {$elemento}
        </a>";
    }
    ?>

</div>
</body>
</html>