<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ahora estoy en otra página donde no se crean cookies nuevas, simplemente se leen</h1>

    <?

// Imprimir el valor de la cookie
// Si la cookie existe, imprimir su valor
if (isset($_COOKIE["chiquilin"])) {
    echo "Chiquilin vale: ".$_COOKIE["chiquilin"];
  } else {
    // La cookie no existe
    echo "La cookie no existe la cookie chiquilin";
  }


  if (isset($_COOKIE["fontaneda"])) {
    echo "Fontaneda vale: ".$_COOKIE["fontaneda"];
  } else {
    // La cookie no existe
    echo "La cookie no existe la cookie fontaneda";
  }

    
    ?>

    <a href="index.php">Volver a Inicio</a>
    
</body>
</html>