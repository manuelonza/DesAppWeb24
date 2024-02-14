<?
// cargamos las funciones habituales
require '_functions.php';

// consultamos el id de la URL
$id=$_GET['id'];
// preparamos la consulta a la base de datos
$sql="SELECT * FROM alumnos WHERE id=".$id;
// lanzamos la consulta
$alumnos=consulta($sql);

mostrarArray($alumnos);

//Cargamos título de la web y variable alumno tendrá el mismo valor
$titulo = $alumno = $alumnos[0]['nombre']." ".$alumnos[0]['apellidos'];

cargar('header'); ?>

<div class="info">
 <img src="<?e(RUTA['img'].$alumnos[0]['foto'])?>" alt="<?e($alumno)?>">
 <p>Correo electrónico: <a href="mailto:<?e($alumnos[0]['email'])?>"><?e($alumnos[0]['email'])?></a></p>
 <p>Teléfono: <a href="tel:<?e($alumnos[0]['telefono'])?>"><?e($alumnos[0]['telefono'])?></a></p>
 <p>Dirección: <?e($alumnos[0]['direccion'])?></p>
 <a href="https://www.openstreetmap.org/search?query=<? echo urlencode($alumnos[0]['direccion']); ?>">Ver en Open Maps</a>
 <p>----</p>
 <? echo generarIframe($alumnos[0]['direccion']); ?>
</div>

<? cargar('footer');


//llamar al footer.php ?>