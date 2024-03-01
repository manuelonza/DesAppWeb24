<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php

// POO - Programación orientada a objetos
class biblioteca {
    // Atributos
    public  $titulo;
    public $autor;
    public $editorial;
    public $ano_publicacion;
    public $precio = 0;
    
    // Metódos
    public function  __construct($titulo, $autor, $editorial, $ano_publicacion, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editorial = $editorial;
        $this->ano_publicacion = $ano_publicacion;
        $this->precio = $precio;
        }

    public function sumarGastosEnvio($gasto){

        $this->precio += $gasto;
        echo  "Se ha agregado el gasto de envío: $" . number_format(  $gasto ,2 ) . " al libro: " . $this -> titulo . "<br>";

    }

    public function mostrarDatos() {
        echo "<h2> Título: ". $this->titulo ."</h2>"; 
        echo "<p> Autor: ". $this->autor ." </p>";
        echo "<p> Editorial: ". $this->editorial ." </p>";
        echo "<p> Año de Publicación: ". $this->ano_publicacion ." </p>";
        echo "<p> Precio: ". $this->precio ." € </p>";
 
    }

}

// Ahora llamamos al objeto(class)  y le pasamos los valores para que se muestren en pantalla.

//Listamos DATOS en un array:(esto es la base de datos simulada)
const IVA=0.21;

const DATOS=[
    ['titulo'=> "Harry  Potter y la piedra filosofal", 'autor'=> "J.K. Rowling", 'editorial'=>"Blastoise Books", 'anio'=> 1997, 'precio'=>20, 'gastosEnvio'=>0],
    ['titulo'=> "El Hobbit", 'autor'=> "Tolkien", 'editorial'=>"Rocamora Books", 'anio'=> 1937, 'precio'=>30,'gastosEnvio'=>10],
    ['titulo'=> "Don Quijote de La Mancha", "Miguel de Cervantes", 'autor'=> "Miguel de Cervantes", 'editorial'=>"La Libreria del Caballero", 'anio'=> 1605, 'precio'=>40, 'gastosEnvio'=>10],
];

$libros=[];
$gastosEnvio=0;

echo '<ul>';
foreach  (DATOS as $dato) {
    echo '<li>';
    $librin=new biblioteca ($dato['titulo'],$dato['autor'],$dato['editorial'], $dato['anio'],$dato['precio']);
    
    $librin->mostrarDatos();
    
    if($dato['gastosEnvio']>0){
        $librin->sumarGastosEnvio($dato['gastosEnvio']);
        $gastosEnvio+=$dato['gastosEnvio'];
    }
    
    $libros[]=$librin; //Añadimos el libro a la lista de libros
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

$precioTotal=0;

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
    



echo '<p> +gastos de envio '.$gastosEnvio.'€</p>';
echo "<h4>SUBTOTAL: ".($precioTotal+$gastosEnvio)." € </h4>";
echo "<h4>+".(IVA*100)."% IVA: ".($precioTotal+$gastosEnvio)*IVA." € </h4>";
echo "<h4>PRECIO TOTAL: ".($precioTotal+$gastosEnvio)+(($precioTotal+$gastosEnvio)*IVA)." €</h4>";


?>