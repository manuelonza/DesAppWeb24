<?php
// Establecer la duración de la sesión en segundos (por ejemplo, 30 minutos)
$tiempo_sesion = 1800; // 30 minutos
ini_set('session.gc_maxlifetime', $tiempo_sesion);

// Iniciar sesión
session_start();

// Definir variables de la sesión
$_SESSION["usuario"] = "miguel";
$_SESSION["rol"] = "administrador";

echo "<h1>La sesión Iniciada se ha iniciado correctamente</h1>";
echo "<p>Hola ".$_SESSION["usuario"]."</p>";
?>

<a href="cerrar_sesion.php">Cerrar Sesión</a>
<a href="privado.php">Privado y super secreto</a>