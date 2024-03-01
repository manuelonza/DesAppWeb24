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

// Ejemplo de uso
$alumno1= new Puntuar('Harry Potter','Gryffindor');
$alumno1->asignarPuntuacion(10);

$alumno2= new Puntuar('Hermione Granger','Gryffindor');
$alumno2->asignarPuntuacion(15);

$alumno1->mostrarPuntuacion();
$alumno2->mostrarPuntuacion();
