//Definimos las variables con las que vamos a trabajar

let xpos=25;  // posicion inicial x
let ypos=25;  // posición inicial y
let radio=25; // radio 20

let wcanva=960;	// ancho canva
let ycanva=400;	// alto canva

let elementos=0;
let lineas =1;
let grosor=1;

let color=22;

//Funciones que harán las tareas

//Función aleatorio
function alea(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}
//alea(10,5)


//Función dibujar, que dibujará a partir de las variables anteriores


function dibujar(){
//Definir espacio de dibujo
let canvas = document.querySelector("#miLienzo");
let ctx = canvas.getContext("2d");
	

	//Dibujamos el contenido
	ctx.beginPath(); // iniciar trazado
	ctx.arc(xpos, ypos, alea(55,5), 0, 2 * Math.PI); //dibujar arco
	ctx.lineWidth = alea(8,1); // grosor de linea
	//ctx.strokeStyle = "orange"; // color

	ctx.fillStyle="rgba("+alea(255,0)+", "+alea(255,0)+", "+alea(255,0)+", 0.5)";
	ctx.fill();
	
		ctx.strokeStyle = "rgba("+alea(255,0)+", "+alea(255,0)+", "+alea(255,0)+", 0.5)";
	ctx.stroke(); // trazo exterior
	
	
	//incrementos por iteración
		grosor++;
	color+=13;
	console.log("color"+color);
	
	//-----
	
	xpos=xpos+48;
	
	elementos++; //incrementamos en 1 los elementos
	
	document.querySelector('#datos').innerHTML=elementos;
	
	//salto de linea - reseteo
	if(elementos>20){
		ypos=ypos+radio;
		xpos=radio;
		elementos=0;
		grosor=1;
		lineas++;
		console.log(lineas)
	}
	
	if(lineas>13){
		lineas=0;
		ypos=25;
		}
	
	}

setInterval(dibujar, 10);