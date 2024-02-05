<?php

//algo.com/loquesea/index.php?t=SOHO
// if(isset($_GET['t'])){
//   $texto = $_GET['t'];
// }
// else{
//   $texto='hola';
// }

//if minimizado
(isset($_GET['t'])) ? $texto = $_GET['t'] : $texto='hola';


?>



<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Canva FX gernator Epilepsia 3</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<canvas id="miLienzo" width="960" height="960"></canvas>

<div id="mitexto">
  <h1>
	<?php echo $texto?>
</h1>
 

</div>
<footer>  <input type="range" min="0" max="360" step="any" value="0" onmousemove="hue()" id="tono">
</footer>

<!-- partial -->


<script>
function hue() {
    let mitono = document.getElementById('tono').value;
    document.getElementById('miLienzo').style.filter = "hue-rotate(" + mitono+ "deg)";
}

</script>
  <script  src="script.js"></script>

</body>
</html>
