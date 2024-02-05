var ancho = window.innerWidth;
var alto = window.innerHeight;


let medida=8;		// alto y ancho del eleemnto
let gap=2;			// separación entre elementos
let porcolumna=54; // elementos por columna
let porlinea=20;	// elementos por fila
let velocidad=0.05;	// velocidad en segundos

let wcanvas=(gap+medida)*porcolumna+gap;
let hcanvas=(gap+medida)*porlinea+gap;

let xpos=1;
let ypos=1;





// FUNCIÓN ALEATORIA
function alea(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}




// presentamos los elemntos a modificar
	let canvas = document.querySelector("#miLienzo");
	let ctx = canvas.getContext("2d");

// modifica las medidas del lienzo
	canvas.width=wcanvas;
	canvas.height=hcanvas;

//color de fondo
	ctx.fillStyle = "black";
	ctx.fillRect(0, 0, canvas.width, canvas.height);


// construir reticulilla
function dibujar(){
	
		//borramos el contenido del canva
	ctx.clearRect(0, 0, canvas.width, canvas.height);

	// constuir fila
	for(y=0;y<porlinea;y++){
		// dibujador de columna
		for(i=0;i<porcolumna;i++){
			// dibujar cuadrado y colorear aleatoriamente
	
			//ctx.fillStyle = "rgba("+alea(0,255)+", "+alea(0,255)+", 255,0."+alea(0,9)+")";
			// primer posición en X, Y, tamañoX, tamñoY
			ctx.fillRect((((medida+gap)*i)+gap),gap+(ypos*y)*(medida+gap),medida,medida);
			
			
			
			// Rounded rectangle with 40px radius (single element list)
ctx.beginPath();
ctx.roundRect((((medida+gap)*i)+gap), gap+(ypos*y)*(medida+gap), medida, medida, [40]);
ctx.stroke();
			
			
			
			//Trazo exterior de cada rectángulo
			ctx.lineWidth=alea(0,5);
			ctx.strokeStyle = "rgba("+alea(0,255)+", "+alea(0,255)+", 255,0."+alea(0,9)+")";
			ctx.strokeRect((((medida+gap)*i)+gap),gap+(ypos*y)*(medida+gap),medida,medida);

			
			

		}

	}
}

setInterval(dibujar, (1000*velocidad));