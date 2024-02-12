<?php
$conexion=0;
$desarrollo=0;


// Función desarrollo -> activa o desactiva notifiaciones para el tecnico
// development('Se ha cargado header correctamente');
function development($texto){
    global $desarrollo;

    if($desarrollo){
        echo '<div class="desarrollo">'.$texto.'</div>';
    }

}




// conexión con la base de datos

function conectar(){

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "miBaseDeDatos";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("La Conexión ha fallado: " . $conn->connect_error);
    }
    $conexion=1;

}
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
*/
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
*/









// carga de bloques en el HTML
function cargar($cosa){
    global $titulo;
    global $conexion;
    global $desarrollo;

    switch($cosa){
        case 'header':
        case 'cabecera':
        case 'header.php':
            include 'inc/_header.php';
            break;
        case 'footer':
        case 'footer.php':
        case 'pie':
            include 'inc/_footer.php';
            break;
        case 'menu':
            include 'inc/_menu.php';
            break;
        default:
            include $cosa;
    }

    development('Se ha cargado: '.$cosa);
}





cargar('header');

