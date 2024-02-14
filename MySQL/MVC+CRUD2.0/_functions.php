<?php
// Elementos modificables
const DESARROLLO = 1;



// Registro de la ruta de todos los archivos
const RUTA_RECURSOS ='assets/';
const RUTA = [
    'css'=>RUTA_RECURSOS.'css/',
    'js' =>RUTA_RECURSOS.'js/',
    'img'=>RUTA_RECURSOS.'img/',
    'inc'=>RUTA_RECURSOS.'inc/',
];

// cargar bloques html
function cargar($bloque){
    global $conexion;

    switch($bloque){
        //include
        case 'header':
            include RUTA['inc'].'_header.php';
            break;
        case 'footer':
            include RUTA['inc'].'_footer.php';
            break;
        case 'menu':
            include RUTA['inc'].'_menu.php';
            break;
        // echo
        case 'css':
            echo RUTA['css'].'style.css';
            break;
        case 'js':
            echo RUTA['js'].'script.js';
            break;
        default:
            include 'assets/inc/'.$bloque;
    }

}

// Función desarrollo -> activa o desactiva notifiaciones para el tecnico
// development('Se ha cargado header correctamente');
function development($texto){

    if(DESARROLLO){
        echo '<div class="desarrollo">'.$texto.'</div>';
    }

}

// e('Lo que quieres escribir')
function e($txt){
    echo $txt;
}


// img('001.jpg','Mujer mirando al horizonte','La Mona Lisa de Leonardo Davinchi');
// img('001.jpg');
function img($src,$alt='',$title=''){
    echo '<img src="'.RUTA['img'].$src.'" alt="'.$alt.'" title="'.$alt.'">';
}

function tag($tag,$content,$id='',$class=''){
    echo '<'.$tag.' id="'.$id.'" class="'.$class.'">'.$content.'</'.$tag.'>';
}


function consulta($sql){
    // Datos de la conexión
    define('CONN', [
        'servername'  => 'localhost',
        'username'    => 'root',
        'password'    => 'root',
        'dbname'      => 'miBaseDeDatos'
    ]);

      // Crear conexión
      $conn = new mysqli(CONN['servername'], CONN['username'], CONN['password'], CONN['dbname']);

      // Verificar conexión
      if ($conn->connect_error) {
        die("La Conexión ha fallado: " . $conn->connect_error);
      }
 
      // Consulta SQL
      return $result = $conn->query($sql);

      if (!$result) {
        die("Error al ejecutar la consulta: " . $conn->error);
         }

        $datos = [];

        while ($fila = $result->fetch_assoc()) {
        $datos[] = $fila;
        }
    //devuelve un array con los datos solicitados de la consulta
    return $datos;

    //cerrar conexión base de datos.
    $conn->close();
}