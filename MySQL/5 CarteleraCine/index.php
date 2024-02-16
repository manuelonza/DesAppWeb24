<?php require_once 'inc/header.php'?>

<ul id="cartelera">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cartelera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT * FROM peliculas";
$sql = "SELECT
peliculas.id,
peliculas.titulo,
peliculas.cartel,
peliculas.sinopsis,
peliculas.duracion,
peliculas.calificacion,
peliculas.trailer,
peliculas.estreno,
peliculas.fin,
generos.nombre_genero
FROM cartelera.peliculas
INNER JOIN cartelera.generos
ON peliculas.genero_id = generos.id_genero;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo <<<HTML
    <li>
    <img src="img/{$row['cartel']}">
    <h2>{$row['titulo']}</h2>
    <p>Genero:{$row['nombre_genero']}<p>
    <p>Duración:{$row['duracion']}<p>
    <p>Calificación: +{$row['calificacion']}<p>
    </li>
    
    HTML;
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</ul>





    
</body>
</html>