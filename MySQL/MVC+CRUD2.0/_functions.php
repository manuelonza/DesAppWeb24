<?php
// Registro de la ruta de todos los archivos
const RUTA_RECURSOS ='assets/';

const RUTA = [
    'css'=>RUTA_RECURSOS.'css/',
    'js' =>RUTA_RECURSOS.'js/',
    'img'=>RUTA_RECURSOS.'img/',
    'inc'=>RUTA_RECURSOS.'inc/',
];


echo RUTA['img'];



function cargar($bloque){
    switch($bloque){
        case 'header':
        case 'cabecera':
        case 'header.php':
            include 'assets/inc/_header.php';
            break;
        case 'footer':
        case 'piesera':
        case 'pie.php':
            include 'assets/inc/_footer.php';
            break;
        case 'menu':
            include 'assets/inc/_menu.php';
            break;
        case 'css':
            echo 'assets/css/style.css';
            break;
        case 'js':
            echo 'assets/js/script.js';
            break;
        default:
            include 'assets/inc/'.$bloque;
    }

}