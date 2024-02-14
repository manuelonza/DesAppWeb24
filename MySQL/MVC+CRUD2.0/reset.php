<?
$titulo="Reset";
require '_functions.php';
cargar('header');
?>


<a href="borraTabla.php" class="btn">Borrar Tabla</a>
<a href="crearTabla.php" class="btn">Crear Tabla</a>
<a href="inserTabla.php" class="btn">Insertar Datos</a>

<h2>Estos son los datos actuales de la tabla:</h2>
<?

 $sql="SELECT * FROM alumnos";
 $alumnos=consulta($sql);

echo '<ul class="lista">';
// Recorrer y mostrar los datos de los alumnos
foreach ( $alumnos as $alumno) {
    $ruta = RUTA['img'];
    
    echo <<<HTML
    <li>
      <a href="info.php?v={$alumno['id']}">
        <img src="{$ruta}{$alumno['foto']}" alt="{$alumno['nombre']} {$alumno['apellidos']}">
        {$alumno['nombre']} {$alumno['apellidos']}
      </a>
    </li>
    HTML;
  
  }
echo '</ul>';


cargar('footer');?>