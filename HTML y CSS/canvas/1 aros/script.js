let trazado=0;
let colorfondo='white';
var grosor = 5;




function tamano(){
	trazado = document.getElementById("barrita").value;
	console.log(trazado);
	migrosor(trazado);	
}


function migrosor(valor) {
	grosor = valor;
	
	

	
	// presentamos los elemntos a modificar
	var canvas = document.querySelector("#miLienzo");
	var ctx = canvas.getContext("2d");
	//borramos el contenido del canva
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	
	//color de fondo
	colorfondo= document.getElementById("colorinchi").value;
	ctx.fillStyle = colorfondo;
	ctx.fillRect(0, 0, canvas.width, canvas.height);

	//Dibujamos el contenido
	ctx.beginPath(); // iniciar trazado
	ctx.arc(195, 190, 80, 0, 2 * Math.PI); //dibujar arco
	ctx.lineWidth = grosor; // grosor de linea
	ctx.strokeStyle = "orange"; // color
	ctx.stroke(); // trazo exterior

	ctx.beginPath(); // iniciar trazado
	ctx.arc(95, 110, 80, 0, 2 * Math.PI); //dibujar arco
	ctx.lineWidth = grosor; // grosor de linea
	ctx.strokeStyle = "green"; // color
	ctx.stroke(); // trazo exterior

	ctx.beginPath(); // iniciar trazado
	ctx.arc(295, 110, 80, 0, 2 * Math.PI); //dibujar arco
	ctx.lineWidth = grosor; // grosor de linea
	ctx.strokeStyle = "black"; // color
	ctx.stroke(); // trazo exterior

	ctx.beginPath(); // iniciar trazado
	ctx.arc(395, 190, 80, 0, 2 * Math.PI); //dibujar arco
	ctx.lineWidth = grosor; // grosor de linea
	ctx.strokeStyle = "red"; // color
	ctx.stroke(); // trazo exterior

	ctx.beginPath(); // iniciar trazado
	ctx.arc(495, 110, 80, 0, 2 * Math.PI); //dibujar arco
	ctx.lineWidth = grosor; // grosor de linea
	ctx.strokeStyle = "blue"; // color
	ctx.stroke(); // trazo exterior
	
	

}



	migrosor(grosor);