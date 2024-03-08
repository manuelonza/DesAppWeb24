let $puntuacion=0;	//almacena la putuación del jugador
let $fase=0;		//almacena la fase en la que se encuentra
let $juegos=1;
let $fases =[		//características de cada fase
	//enemigos, color, tiempo, border-radius
	[5, 'red',30,0],
	[10, 'orange', 120,10],
	[15,'blue',220,20],
	[20,'green',550,33],
	[200,'magenta',650,50]
];

$posX=0;
$posY=0;


//Generador de entero aleatorio
function aleatorio(min, max) {
	return Math.floor(Math.random() * (max - min + 1) ) + min;
  }

function constructor(){
	$puntuacion=0;
	//Constructor de Fases
	let $miHTML='<ul>';
	for($i=0; $i<($fases[$fase][0]*$juegos); $i++){
		$posX=aleatorio(0,130);
		$posY=aleatorio(0,130);
		
		$miHTML+='<li onmouseover="cosa(this)" style="background-color:'+$fases[$fase][1]+'; border-radius:'+$fases[$fase][3]+'%; position:relative; left:'+$posX+'px; top:'+$posY+'px" ></li>';
	}
	 $miHTML+='</ul>';

	document.querySelector('#contenedor').innerHTML=$miHTML;
}
		
function cosa($elemento){
	$elemento.classList.toggle('tocado');	
	puntuacion();

}

function puntuacion(){
	$puntuacion++;
	document.querySelector('#puntuacion').innerHTML="Puntuacion: "+$puntuacion+"/"+($fases[$fase][0])*$juegos+" Fase: "+($fase+1)+" Juego :"+$juegos;
	haGanado();
}

function haGanado(){
	if($puntuacion>=($fases[$fase][0])*($juegos)){
		
		if($fase>3){
			alert("Te has acabado el JUEGO!!!!!");
			alert("Volerás a empezar; obtienes el mismo premio que el que ha perdido");
			$fase=0;
			$juegos++;
		}
		else{
		alert("has ganado esta fase, mira que te gusta perder tiempo...");

		$fase++; //pasamos a la fase siguiente
		}
		
		constructor();
	}
}

//Iniciamos Juego:
constructor();