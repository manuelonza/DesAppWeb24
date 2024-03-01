<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Listado de Libros</h1>

<?php
// POO - Programación orientada a objetos
// Creamos una clase con la que trabajaremos más adelante
class biblioteca
{
    // Atributos
    public $titulo;
    public $autor;
    public $editorial;
    public $ano_publicacion;
    public $portada;
    public $precio = 0;

    // Metódos
    public function __construct($titulo, $autor, $editorial, $ano_publicacion, $portada, $precio){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editorial = $editorial;
        $this->ano_publicacion = $ano_publicacion;
        $this->portada = $portada;
        $this->precio = $precio;
    }

    public function sumarGastosEnvio($gasto)
    {

        $this->precio += $gasto;
        echo '<div class="gasto gastos-'.$this->titulo.'">';
        echo "Gasto de envío: $".number_format($gasto, 2)."<div>";
    }

    public function mostrarDatos()
    {
        echo '<img src="img/'.$this->portada.'" alt="'.$this->titulo.'">'."\n";
        echo '<h2>'.$this->titulo.'</h2>'."\n";
        echo '<p> Autor: '.$this->autor.'</p>'."\n";
        echo '<p> Editorial: '.$this->editorial . '</p>'."\n";
        echo '<p> Año de Publicación: '.$this->ano_publicacion.'</p>'."\n";
        echo '<p> Precio: '.$this->precio.' € </p>'."\n";
    }
}

// Ahora llamamos al objeto(class)  y le pasamos los valores para que se muestren en pantalla.

//Listamos DATOS en un array:(esto es la base de datos simulada)
const IVA = 0.21;

const DATOS = [
    [
        'titulo' => "Harry  Potter y la piedra filosofal",
        'autor' => "J.K. Rowling",
        'portada'=>"harrypotter.jpg",
        'editorial' => "Blastoise Books",
        'anio' => 1997,
        'precio' => 20,
        'gastosEnvio' => 0
    ],
    [
        'titulo' => "El Hobbit",
        'autor' => "Tolkien",
        'portada'=>"hobbit.jpg",
        'editorial' => "Rocamora Books",
        'anio' => 1937,
        'precio' => 30,
        'gastosEnvio' => 20
    ],
    [
        'titulo' => "Don Quijote de La Mancha",
        'autor' => "Miguel de Cervantes",
        'portada'=>"quijote.jpg",
        'editorial' => "La Libreria del Caballero",
        'anio' => 1605,
        'precio' => 40,
        'gastosEnvio' => 10
    ],
];

$libros = [];
$gastosEnvio = 0;

echo '<ul class="grid">';
foreach (DATOS as $dato) {
    echo '<li>';
    $librin = new biblioteca($dato['titulo'], $dato['autor'], $dato['editorial'], $dato['anio'],$dato['portada'], $dato['precio']);

    $librin->mostrarDatos();

    if ($dato['gastosEnvio'] > 0) {
        $librin->sumarGastosEnvio($dato['gastosEnvio']);
        $gastosEnvio += $dato['gastosEnvio'];
    }

    $libros[] = $librin; //Añadimos el libro a la lista de libros
    echo '</li>';
}
echo '</ul>';

// echo '<pre>';
// print_r($libros);
// echo '</pre>';

// $libro1 = new biblioteca("Harry  Potter y la piedra filosofal", "J.K. Rowling", "Blastoise Books", 1997, 50);
// $libro1 ->mostrarDatos();

// $libro2 = new biblioteca ("El Hobbit", "Tolkien",   "Rocamora Books", 1937 , 60 );
// $libro2 ->mostrarDatos();
// $libro2 ->sumarGastosEnvio(5); 

// $libro3 = new biblioteca  ("Don Quijote de La Mancha", "Miguel de Cervantes", "La Libreria del Caballero",  1605, 80);
// $libro3 ->mostrarDatos();

$precioTotal = 0;

echo "<h2> GASTOS TOTALES </h2>";
echo '<ul>';
foreach ($libros as $libro) {
    $precioTotal += $libro->precio;
    echo '<li>';
    echo $libro->titulo;
    echo ': ';
    echo $libro->precio;
    echo '€';
    echo '</li>';
}
echo '</ul>';

echo '<ul>';
echo '<li> +gastos de envio ' . $gastosEnvio . '€</li>';
echo "<li>SUBTOTAL: " . ($precioTotal + $gastosEnvio) . " € </li>";
echo "<li>+" . (IVA * 100) . "% IVA: " . ($precioTotal + $gastosEnvio) * IVA . " € </li>";
echo '<li class="precioFinal">PRECIO TOTAL: ' . ($precioTotal + $gastosEnvio) + (($precioTotal + $gastosEnvio) * IVA) . ' €</li>';
echo '</ul>';
?>

</body>
</html>