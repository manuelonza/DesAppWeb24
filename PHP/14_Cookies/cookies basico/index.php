<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
    <h1>Voy a crear una cookie</h1>

    <? echo time()?>

<form action="espirar.php" method="post">

    <select name="consumidor" id="consume">
        <option value="viaje-paris">Viaje Paris</option>
        <option value="impresora">Impresora</option>
        <option value="motos">crisis 40</option>
        <option value="friki">Manga</option>
        <option value="porno">Porno</option>
    </select>
<br>
    <label>Mascota?
        <input type="checkbox" name="mascota">
    </label>
    <label>Coche?
        <input type="checkbox" name="coche">
    </label>
    <label>Casa?
        <input type="checkbox" name="casa">
    </label>
    <br>
    <input type="submit" value="Procesar">
</form>


    <?
// Crear una cookie con el nombre "mi_cookie" y el valor "hola mundo"
setcookie("chiquilin", "hola mundo", time() + (30*24*3600)); // Expira en 1 hora
setcookie("fontaneda", "&/T&T/R/R&%E&E&E", time() + (30*24*3600)); // Expira en 1 hora


// Imprimir el valor de la cookie
// Si la cookie existe, imprimir su valor
if (isset($_COOKIE["chiquilin"])) {
    echo $_COOKIE["chiquilin"];
  } else {
    // La cookie no existe
    echo "La cookie no existe la cookie chiquilin";
  }
    
    ?>

    <a href="micookie.php">Ver otra página</a>
    
</body>
</html>