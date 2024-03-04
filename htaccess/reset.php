
<?php $titulo="Reset";?>

<?php require_once '_functions.php'?>
<?php include_once '_header.php'?>

 

<?php
//Crear Tabla
  $sql="
  CREATE TABLE `paginas` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre` varchar(255) NOT NULL,
    `texto` longtext NOT NULL,
    `img` varchar(255) NOT NULL,
    `url` varchar(255) NOT NULL
  );";

  consulta($sql,false);
?>

<?php
//Insertar Datos
  $sql="INSERT INTO `paginas` (`nombre`, `texto`, `img`, `url`)
  VALUES ('proyectos', 'Aquí puedes ver nuestros proyectos', 'proyectos.jpg', 'proyectos');";

  consulta($sql,false);
?>


  
    <?php include_once '_footer.php'?>

