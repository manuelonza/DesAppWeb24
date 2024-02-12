<?php $titulo="Reset";?>
<?php require '_functions.php'; ?>

<h1><?echo $titulo;?></h1>
<p>Vamos a resetear todo el contenido de la base de datos</p>


<a href="borrarTabla.php" class="btn">Borrar tabla alumnos</a>
<a href="crearTabla.php" class="btn">Crear tabla alumnos</a>
<a href="insertarDatos.php" class="btn">Insertar Datos en tabla alumnos</a>



<?php cargar('footer'); ?>