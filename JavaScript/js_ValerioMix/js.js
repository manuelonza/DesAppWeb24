let lista=[
    '001.mp3',
    '002.mp3',
    '003.mp3',
    '004.mp3',
    '005.mp3',
    '006.mp3',
    '007.mp3'
];

let current=0;
let ruta='mp3/';
let archivo=ruta+lista[current];
let tiempo=0;
let audio;


let html='';

for(let i=0 ;i<lista.length;i++){
    html+='<li><button onclick="load('+i+')">'+lista[i]+'</button>';
}

document.querySelector('#musicList').innerHTML=html;

//-------------------------------------------------------

function load(a){
    current=a;
    let actual= lista[a];
    document.querySelector('#musicaActual').innerHTML=actual;
    console.log(current);

}

function play(){
    archivo=ruta+lista[current]
    audio= new Audio(archivo);
    audio.pause();
    audio.play();
    audio.currentTime=tiempo;

    console.log(audio);
    console.log(archivo);
}

function stop(){
    audio.pause();
    tiempo=0;
}

function pause(){
    audio.pause();
    tiempo=audio.currentTime;
}

function rewind(){
    tiempo=0;
    audio.play();
    audio.currentTime=tiempo;
}
