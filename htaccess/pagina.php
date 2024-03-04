<?php require_once '_functions.php'?>
<?php
//Obtiene via GET el valor del ID
$url= $_GET['url'];

//meta el id en la consulta
echo $sql ='SELECT * FROM paginas WHERE url="'.$url.'"';
$datos = consulta($sql,true);

foreach ( $datos as $dato) {
    $titulo =$dato['nombre'];
    $texto = $dato['texto'];
    $img = $dato['img'];
}

?>


<?php include_once '_header.php'?>
<img src="img/<?php echo $img;?>">


<p><?php echo $texto;?></p>
        
    <?php include_once '_footer.php'?>