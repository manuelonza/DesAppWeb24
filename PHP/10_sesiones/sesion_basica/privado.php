<?php
// Iniciar sesión
session_start();

// Verificar si la variable de sesión "usuario" está establecida
if (!isset($_SESSION["usuario"])) {
    // Si no está establecida, redirigir a la página de inicio de sesión o a otra página
   if(!$_SESSION['rol']=='administrador')
    header("Location: no_puedes_pasar.php");
    exit;
}

// El resto del contenido de tu página después de haber verificado la sesión
echo "¡Hola, ".$_SESSION["usuario"]."! Bienvenido a tu página protegida.";

// Puedes agregar más contenido aquí...

?>



<h1>Esta usted en una zona privada</h1>
<p>Esto es información super secreta del Octógono Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta distinctio beatae tempore, accusantium porro doloremque accusamus odit nulla repellendus et, adipisci blanditiis consequuntur non molestiae, pariatur laborum dolore. Officiis.</p>
<p>Esto es una cosa privada Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores nostrum corrupti, a numquam libero molestias eveniet expedita ipsum sunt ut doloremque culpa beatae consequatur magnam, inventore facere, quos officiis at?</p>

<a href="cerrar_sesion.php">Cerrar Sesión</a>