<?php
 include 'assets/_header.php'; 

$lista = [
    ['nombre' => 'alejandro', 'password' => '1234'],
    ['nombre' => 'jairo', 'password' => 'contrasena']
];


$nombre=$_POST['nombre'];
$password=$_POST['password'];


foreach($lista as $lis){
    if($lis['nombre']==$nombre && $lis['password']==$password){

        // Iniciar sesión
        session_start();

        // Definir variables de la sesión
        $_SESSION["usuario"] = $nombre;



        header("Location: privado.php");
        exit;
    }
}

 include 'assets/_footer.php';

header("Location: sinacceso.php");
exit;