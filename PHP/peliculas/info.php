<?php
include 'data.php'; 
$i = $_GET['v'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lista[$i][0] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="index.php" class="btn">Volver</a>
<br>

<?


echo'
<h1>'.$lista[$i][0].'</h1>
    <img src="img/'.$lista[$i][3].'" alt="'.$lista[$i][3].'">
    <p class="epi">EPISODIO '.$lista[$i][1].'</p>
    <p class="ano">año '.$lista[$i][2].'</p>
    <p class="ano">año '.$lista[$i][4].'</p>';
?>
 

 <hr>
 <?php
 echo '<ul>';
for ($i=0; $i < count($lista) ; $i++) {
    echo '<li>
    <a href="info.php?v='.$i.'">
    <img src="img/'.$lista[$i][3].'" alt="'.$lista[$i][3].'">
    <h2>'.$lista[$i][0].'</h2>
    </a>
    </li>';
};
echo '</ul>';
 ?>
</body>
</html>