<?php
$expira=(30*24*3600);

$mascota=0;
$coche=0;
$casa=0;



//$valor =$_POST['nombre'];
$consumidor =$_POST['consumidor'];
if(isset($_POST['mascota'])){
    setcookie("mascota", '1', time() + $expira);
    $mascota='A';
    
}else{ setcookie("mascota", '0', time() + $expira);}

if(isset($_POST['coche'])){
    setcookie("coche", '1', time() + $expira);
    $coche='B';
}else{setcookie("coche", '0', time() + $expira);}

if(isset($_POST['casa'])){
    setcookie("casa", '1', time() + $expira);
    $casa='C';
}else{setcookie("casa", '0', time() + $expira);}


echo $espia ='3GT-'. $mascota . $coche . $casa.'-'.time();

setcookie("ESPIA", $espia, time() + $expira);




//echo "<p>".$valor."</p>";
echo "<p>".$consumidor."</p>";








$txt ="A tí lo que te gusta yeee.... ";

switch($consumidor){
    case 'viaje-paris':
        $txt="Tú lo que yes es un Baguette.";
        break;
    case 'impresora':
            $txt.=" causar impresión";
            break;
    case 'motos':
            $txt.="no dar una pedalada";
            break;
    case 'friki':
            $txt.="que Vader sea tu padre.";
            break;
    case 'porno':
            $txt.="quedate ciego.";
            break;
    default:
            $txt="No sabemos qué es lo que te gusta, así que metemos cualquier cosa";
}

setcookie("anuncios", $consumidor, time() + $expira); // Expira en 1 hora


echo $txt;

echo "---";

if (isset($_COOKIE["anuncios"])) {
    echo $_COOKIE["anuncios"];
  } else {
    // La cookie no existe
    echo "La cookie no existe la cookie anuncios";
  }


?>