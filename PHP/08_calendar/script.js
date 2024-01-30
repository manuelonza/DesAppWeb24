function modal(evento) {
    evento.classList.toggle('activo');
}

function cargar(i){
    let html="";
    html+=`
    <h1>${actividades[i][0]}</h1>
    <img src="img/${actividades[i][2]}">
    <p class="hora">${actividades[i][3]}</p>
    <p class="duracion">${actividades[i][4]}</p>
    <p class="descripcion">${actividades[i][7]}</p>
    <p class="sala">${actividades[i][5]}</p>
    <p class="monitor">${actividades[i][6]}</p>
    `
    document.querySelector('#dato').innerHTML=html;
}

cargar(0)