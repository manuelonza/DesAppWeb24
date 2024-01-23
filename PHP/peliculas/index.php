<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <ul> 
<?
for ($i=0; $i < count($lista) ; $i++) {
    echo '<li>
    <a href="info.php?v='.$i.'">
    <img src="img/'.$lista[$i][3].'" alt="'.$lista[$i][3].'">
    <h2>'.$lista[$i][0].'</h2>
    </a>
    <p class="epi">EPISODIO '.$lista[$i][1].'</p>
    <p class="ano">año '.$lista[$i][2].'</p>
    </li>';
};
?>
</ul>   
</body>
</html>