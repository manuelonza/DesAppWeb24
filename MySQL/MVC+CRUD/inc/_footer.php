</main>
</footer>
<? cargar('menu')?>

<p>&copy; <? echo $titulo?>- </p>
</footer>

<?php

// cerrar la conexión en caso de que esté abierta
if($conexion){
    $conn->close();
    development('Conexión cerrada');
}
?>



</body>
</html>