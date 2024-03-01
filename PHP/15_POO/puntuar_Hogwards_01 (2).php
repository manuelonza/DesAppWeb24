<?php

//Clase para Puntuar a alumnos de Hogwards
class Puntuar{
    public $nombre;
    public $casa;
    public $puntuacion=0;

    public function __construct($nombre, $casa){
        $this->nombre = $nombre;
        $this->casa = $casa;
    }

    public function asignarPuntuacion($puntos){
        $this->puntuacion+=$puntos;
    }

    public function mostrarPuntuacion(){
        echo "<li>";
        echo "{$this->nombre} de la casa {$this->casa} tiene {$this->puntuacion} puntos.";
        echo "</li>";
    }
}

// Crear un array de datos de alumnos y puntuaciones
$datos_alumnos = [
    ['nombre' => 'Harry Potter', 'casa' => 'Gryffindor', 'puntos' => 10],
    ['nombre' => 'Hermione Granger', 'casa' => 'Gryffindor', 'puntos' => 15],
    ['nombre' => 'Ron Weasley', 'casa' => 'Gryffindor', 'puntos' => 5],
    ['nombre' => 'Draco Malfoy', 'casa' => 'Slytherin', 'puntos' => 15],
    ['nombre' => 'Luna Lovegood', 'casa' => 'Ravenclaw', 'puntos' => 12],
    ['nombre' => 'Neville Longbottom', 'casa' => 'Gryffindor', 'puntos' => 8],
    ['nombre' => 'Ginny Weasley', 'casa' => 'Gryffindor', 'puntos' => 18],
    ['nombre' => 'Cho Chang', 'casa' => 'Ravenclaw', 'puntos' => 10],
    ['nombre' => 'Cedric Diggory', 'casa' => 'Hufflepuff', 'puntos' => 20],
    ['nombre' => 'Zacharias Smith', 'casa' => 'Hufflepuff', 'puntos' => 8],
];

// Array para almacenar instancias de la clase Puntuar
$alumnos = [];

// Bucle para crear instancias y asignar puntuaciones
foreach ($datos_alumnos as $datos) {
    $alumno = new Puntuar($datos['nombre'], $datos['casa']);
    $alumno->asignarPuntuacion($datos['puntos']);
    $alumnos[] = $alumno;
}

// echo '<pre>';
// print_r($alumnos);
// echo '</pre>';

// Mostrar puntuación individual de cada alumno
foreach ($alumnos as $alumno) {
    $alumno->mostrarPuntuacion();
}

// Calcular el cómputo final por casas
$casa_puntuaciones = [];

foreach ($alumnos as $alumno) {
    $casa = $alumno->casa;
    //Si la casa no tiene puntuación asignale 0
    if (!isset($casa_puntuaciones[$casa])) {
        $casa_puntuaciones[$casa] = 0;
    }
    $casa_puntuaciones[$casa] += $alumno->puntuacion;
}

// Mostrar el cómputo final por casas
echo "<h2>Cómputo Final por Casas</h2>";
foreach ($casa_puntuaciones as $casa => $puntuacion) {
    echo "<p>{$casa}: {$puntuacion} puntos</p>";
}
?>