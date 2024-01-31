<?php 

     // Iniciar sesión
     session_start();

// Verificar si la variable de sesión "usuario" está establecida
if (!isset($_SESSION["usuario"])) {
    // Si no está establecida, redirigir a la página de inicio de sesión o a otra página
   
    header("Location: sinacceso.php");
    exit;
}




include 'assets/_header.php'; ?>
<h1>Zona privada</h1>
<h2></h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae sint neque ut sit nobis? Minus quos distinctio debitis ullam blanditiis voluptas ut hic officiis? Voluptatum natus quaerat pariatur dignissimos debitis?</p>
<?php include 'assets/_footer.php'; ?>