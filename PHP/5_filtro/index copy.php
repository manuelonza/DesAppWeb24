<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php





?>
<!-- Control buttons -->
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Mostrar Todo</button>
  <button class="btn" onclick="filterSelection('branding')"> Branding</button>
  <button class="btn" onclick="filterSelection('infog3D')"> 3D</button>
  <button class="btn" onclick="filterSelection('maquetacion')"> Maquetacion Editorial</button>
  <button class="btn" onclick="filterSelection('redes')"> Redes</button>
  <button class="btn" onclick="filterSelection('ilustracion')"> Ilustracion</button>
  <button class="btn" onclick="filterSelection('video')"> Edición de Video</button>
  <button class="btn" onclick="filterSelection('webui')"> Diseño Web y Ui</button>
  <button class="btn" onclick="filterSelection('wesweb')"> Desarrollo Web</button>
</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="container">
  <div class="filterDiv webui wesweb">61 Festival de Cine de Gijón</div>
  <div class="filterDiv webui wesweb">60 Festival de Cine de Gijón</div>
  <div class="filterDiv webui wesweb">59 Festival de Cine de Gijón</div>
  <div class="filterDiv webui wesweb">58 Festival de Cine de Gijón</div>
  <div class="filterDiv webui wesweb">ESDAC Escuela Superor de Diseño y Creatividad</div>
  <div class="filterDiv webui wesweb">Protocolo Asturias</div>
  <div class="filterDiv webui wesweb">Funeraria Angelín</div>
  <div class="filterDiv webui wesweb">Psicólogos Uría</div>
  <div class="filterDiv branding">Branding Psicologos Uria</div>


</div>




    <script src="js.js"></script>
</body>
</html>