<?php
$titulo="Crear Tabla";
require '_functions.php'; 

$sql = "
-- Insertar información
INSERT INTO `alumnos` (`nombre`, `apellidos`, `foto`) VALUES
('Manu', 'Luna', '001.jpg'),
('Jose', 'Soleado', '002.jpg'),
('Hugo', 'Estelar', '003.jpg'),
('Valerio', 'Aurora', '004.jpg'),
('Miguel', 'Cielo', '005.jpg'),
('Samuel', 'Galaxia', '006.jpg'),
('Valentina', 'Nebula', '007.jpg'),
('Mateo', 'Luminoso', '008.jpg'),
('Sofía', 'Celestial', '009.jpg'),
('Liam', 'Estrella', '010.jpg'),
('Isabella', 'Cosmos', '011.jpg'),
('Noah', 'Cometa', '012.jpg'),
('Emma', 'Orbita', '013.jpg'),
('Oliver', 'Astralis', '014.jpg'),
('Ava', 'Quasar', '015.jpg'),
('James', 'Astro', '016.jpg'),
('Emily', 'Sideral', '017.jpg'),
('Benjamin', 'Supernova', '018.jpg'),
('Charlotte', 'Eclíptica', '019.jpg'),
('Ethan', 'Nébula', '020.jpg'),
('Amelia', 'Luz', '021.jpg'),
('Mason', 'Cometario', '022.jpg'),
('Harper', 'Interstelar', '023.jpg'),
('Logan', 'Estelar', '024.jpg'),
('Aria', 'Cosmica', '025.jpg');
";
conectar($sql);
/*

// Cómo sería todo esto sin la función conectar();
define('CONN', [
    'servername'  => 'localhost',
    'username'    => 'root',
    'password'    => 'root',
    'dbname'      => 'miBaseDeDatos'
]);
// Create connection
$conn = new mysqli(CONN['servername'], CONN['username'], CONN['password'], CONN['dbname']);
// Check connection
if ($conn->connect_error) {
die("La Conexión ha fallado: " . $conn->connect_error);
}

$sql = "
-- Insertar información
INSERT INTO `alumnos` (`nombre`, `apellidos`, `foto`) VALUES
('Manu', 'Luna', '001.jpg'),
('Jose', 'Soleado', '002.jpg'),
('Hugo', 'Estelar', '003.jpg'),
('David', 'Aurora', '004.jpg'),
('Mia', 'Cielo', '005.jpg'),
('Samuel', 'Galaxia', '006.jpg'),
('Valentina', 'Nebula', '007.jpg'),
('Mateo', 'Luminoso', '008.jpg'),
('Sofía', 'Celestial', '009.jpg'),
('Liam', 'Estrella', '010.jpg'),
('Isabella', 'Cosmos', '011.jpg'),
('Noah', 'Cometa', '012.jpg'),
('Emma', 'Orbita', '013.jpg'),
('Oliver', 'Astralis', '014.jpg'),
('Ava', 'Quasar', '015.jpg'),
('James', 'Astro', '016.jpg'),
('Emily', 'Sideral', '017.jpg'),
('Benjamin', 'Supernova', '018.jpg'),
('Charlotte', 'Eclíptica', '019.jpg'),
('Ethan', 'Nébula', '020.jpg'),
('Amelia', 'Luz', '021.jpg'),
('Mason', 'Cometario', '022.jpg'),
('Harper', 'Interstelar', '023.jpg'),
('Logan', 'Estelar', '024.jpg'),
('Aria', 'Cosmica', '025.jpg');
";
$result = $conn->query($sql);
*/


echo "La tabla Alumnos se ha creado correctamente";

cargar('footer');

