<?php

function alea($min, $max) {
    return rand($min, $max);
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta http-equiv="refresh" content="<?php echo alea(5,15) ?>">
</head>
<body>


<?php 

$saludos = [
    "¡Hola, pillo!",
    "¿Qué tal, bribón?",
    "¡Ey, truhán!",
    "¿Cómo va eso, pícaro?",
    "¡Hola, malandrín!",
    "¿Qué pasa, tunante?",
    "¡Ey, pícaro!",
    "¿Cómo te va, granuja?",
    "¡Hola, taimado!",
    "¿Qué cuentas, bribón?",
    "¡Ey, astuto!",
    "¿Cómo andas, pilluelo?",
    "¡Hola, zascandil!",
    "¿Qué hay, tuno?",
    "¡Ey, granujilla!",
    "¿Cómo te trata la vida, truhán?",
    "¡Hola, bribonzuelo!",
    "¿Qué onda, pícarillo?",
    "¡Ey, tunecino!",
    "¿Cómo va eso, travesura?",
    "¡Hola, revoltoso!",
    "¿Qué cuentas, pícaruelo?",
    "¡Ey, picarón!",
    "¿Cómo te va, truhancito?",
    "¡Hola, zorrillo!",
    "¿Qué tal, pillo travieso?",
    "¡Ey, malandrín!",
    "¿Cómo andas, pillo?",
    "¡Hola, truhanillo!",
    "¿Qué pasa, pícaro astuto?",
    "¡Ey, granujillo!",
    "¿Cómo va eso, tunante?",
    "¡Hola, pícaro de la risa!",
    "¿Qué cuentas, granuja de buen humor?",
    "¡Ey, malandrín sonriente!",
    "¿Cómo te va, astuto bromista?",
    "¡Hola, pilluelo risueño!",
    "¿Qué tal, tuno de la alegría?",
    "¡Ey, granujilla chistosa!",
    "¿Cómo andas, pillo bromista?",
    "¡Hola, truhanzuelo divertido!",
    "¿Qué pasa, pícaro risueño?",
    "¡Ey, malandrín juguetón!",
    "¿Cómo va eso, tunante alegre?",
    "¡Hola, pícaro risueño!",
    "¿Qué cuentas, granuja bromista?"
];

// Puedes acceder a cada saludo utilizando el índice del array, por ejemplo: $saludos[0]


$despedidas = [
    "¡Hasta luego, pilluelo!",
    "Nos vemos, tunante.",
    "¡Hasta la próxima, granuja!",
    "Adiós, truhán.",
    "¡Nos vemos, malandrín!",
    "Hasta pronto, pícaro.",
    "¡Que te vaya bien, astuto!",
    "Hasta la vista, taimado.",
    "¡Hasta luego, bribón!",
    "Nos vemos, travesura.",
    "¡Hasta la próxima, zascandil!",
    "Adiós, tuno.",
    "¡Que te vaya bonito, granujilla!",
    "Hasta pronto, pícarillo.",
    "¡Nos vemos, truhanillo!",
    "Adiós, bribonzuelo.",
    "¡Hasta la próxima, pícaruelo!",
    "Nos vemos, picarón.",
    "¡Hasta luego, truhancito!",
    "Que te vaya genial, zorrillo.",
    "¡Nos vemos, pillo travieso!",
    "Adiós, malandrín.",
    "¡Hasta la próxima, pillo!",
    "Que tengas un buen día, truhanillo.",
    "¡Nos vemos, pícaro astuto!",
    "Adiós, granujillo.",
    "¡Hasta la próxima, tunante!",
    "Que te diviertas, pícaro de la risa.",
    "¡Nos vemos, granuja de buen humor!",
    "Adiós, malandrín sonriente.",
    "¡Hasta la próxima, astuto bromista!",
    "Que tengas una buena jornada, pilluelo risueño.",
    "¡Nos vemos, tuno de la alegría!",
    "Adiós, granujilla chistosa.",
    "¡Hasta la próxima, pillo bromista!",
    "Que te rías mucho, truhanzuelo divertido.",
    "¡Nos vemos, pícaro risueño!",
    "Adiós, malandrín juguetón.",
    "¡Hasta la próxima, tunante alegre!",
    "Que tengas un buen día, pícaro risueño.",
    "¡Nos vemos, granuja bromista!",
    "Adiós, pillo risueño.",
    "¡Hasta la próxima, truhanzo bromista!",
    "Que tengas una despedida alegre, granuja risueño."
];

// Puedes acceder a cada despedida utilizando el índice del array, por ejemplo: $despedidas[0]


$mensajesSubrealistas = [
    "Hoy descubrí que las nubes son esponjas gigantes del cielo.",
    "Me perdí en un laberinto de pensamientos y encontré a un unicornio filósofo.",
    "Las ardillas están planeando una revolución de las nueces en secreto.",
    "Los gatos son expertos en teletransportación cuando nadie los está mirando.",
    "Las sombras en realidad son portales a dimensiones paralelas muy aburridas.",
    "Las hamburguesas veganas tienen secretamente superpoderes para convertir a cualquiera en un defensor del medio ambiente.",
    "Cada vez que bostezo, estoy hablando en código morse con los extraterrestres.",
    "Los espejos son ventanas a universos alternativos donde todos usamos bigotes.",
    "Descubrí que mi nevera es una máquina del tiempo, pero solo lleva comida al futuro.",
    "Las estrellas fugaces son en realidad pedacitos de deseos perdidos que caen del cielo.",
    "El aguacate en realidad es una fruta alienígena disfrazada de superalimento.",
    "Las plantas tienen sus propias redes sociales subterráneas donde comparten chismes de jardín.",
    "Las pelotas de playa son en realidad huevos de dragón que esperan pacientemente a eclosionar.",
    "Las señales de tráfico secretamente son mensajes codificados de una sociedad de robots viales.",
    "Los flamencos son expertos en danza porque practican ballet en secreto cuando nadie los ve.",
    "Descubrí que las piedras en realidad son libros geológicos que esperan a ser leídos por exploradores curiosos.",
    "Las luces de las fireflies son en realidad hadas nocturnas teniendo fiestas de baile.",
    "Las patatas fritas son en realidad la moneda oficial en un universo paralelo.",
    "Las sillas de oficina tienen ruedas para entrenar en caso de una invasión repentina de patinetes voladores.",
    "Los relojes de arena son portales temporales que te llevan cinco minutos al futuro cada vez que los volteas.",
    "Las burbujas de jabón contienen pequeños mensajes secretos del mundo de las pompas.",
    "Las sombras de los árboles son en realidad un lenguaje antiguo que solo los pájaros entienden.",
    "El WiFi es en realidad magia invisible que nos mantiene conectados al mundo mágico de internet.",
    "Las tostadoras son portales a un universo donde todo es tostado.",
    "Descubrí que los libros de cocina son manuales de hechizos culinarios.",
    "Las sirenas en realidad son cantantes submarinas que organizan conciertos en las profundidades del océano.",
    "Las escaleras mecánicas son secretamente máquinas de entrenamiento para futuros astronautas.",
    "Las nubes de algodón de azúcar son en realidad fábricas de sueños comestibles.",
    "Los imanes tienen poderes magnéticos porque son pequeños superhéroes del mundo de la física.",
    "Las mariposas son en realidad cartas de amor voladoras de la naturaleza.",
    "Descubrí que las sombrillas son en realidad escudos anti-lluvia diseñados por duendes ingenieros.",
    "Los espejismos son portales a un desierto paralelo lleno de unicornios dorados.",
    "Las luces de navidad son en realidad estrellas fugaces atrapadas en el espíritu festivo.",
    "Las llaves perdidas son en realidad llaves dimensionales que nos llevan a mundos olvidados.",
    "Descubrí que los globos son en realidad mensajeros del cielo enviados por ángeles juguetones.",
    "Las mochilas son en realidad agujeros negros que contienen todo lo que necesitas en la vida.",
    "Las sombras de los objetos inanimados tienen reuniones nocturnas para discutir su existencia en secreto.",
    "Los limones son en realidad baterías ácidas de la naturaleza.",
    "Los cajones desordenados son portales a dimensiones paralelas llenas de calcetines desaparecidos.",
    "Descubrí que los semáforos en realidad son coreógrafos del tráfico.",
    "Las estrellas en el cielo forman constelaciones que son mapas cósmicos para extraterrestres curiosos.",
    "Las nubes de tormenta son en realidad cocineros celestiales preparando la receta perfecta para la lluvia.",
    "Descubrí que las marionetas cobran vida propia cuando nadie las está mirando.",
    "Las luces del árbol de Navidad son en realidad duendes eléctricos iluminando la temporada festiva."
];
$nombre=[
    'Juan',
    'Maria',
    'Antonio',
    'Isabel',
    'Francisco',
    'Laura',
    'Manuel',
    'Ana',
    'Jose',
    'Carmen',
    'David',
    'Elena',
    'Javier',
    'Sofia',
    'Miguel',
    'Raquel',
    'Pedro',
    'Beatriz',
    'Fernando',
    'Natalia',
    'Luis',
    'Rosa',
    'Angel',
    'Patricia',
    'Carlos',
    'Eva',
    'Jorge',
    'Silvia',
    'Diego',
    'Cristina',
    'Rafael',
    'Lucia',
    'Pablo',
    'Lorena',
    'Jose Antonio',
    'Marta',
    'Joaquin',
    'Miriam',
    'Alberto',
    'Ines',
    'Ruben',
    'Claudia',
    'Ivan',
    'Adriana'];

// Puedes acceder a cada mensaje subrealista utilizando el índice del array, por ejemplo: $mensajesSubrealistas[0]






$mail=$nombre[alea(0,count($nombre)-1)]."@gmail.com";



$mensaje="<p>".$saludos[alea(0,count($saludos)-1)]." ".$nombre[alea(0,count($nombre)-1)]."</p>";
$mensaje.="<p>".$mensajesSubrealistas[alea(0,count($mensajesSubrealistas)-1)]."</p>";
$mensaje.="<p>".$despedidas[alea(0,count($despedidas)-1)]."</p>";

echo $mensaje;
mail($mail,"mi asunto",$mensaje);


?>




