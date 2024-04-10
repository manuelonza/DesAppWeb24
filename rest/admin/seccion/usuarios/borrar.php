<?php
include ('../../basedatos.php');

if ($_POST) { // Comprueba si hay datos POST
    // Verifica si las claves existen antes de asignarlas para evitar Undefined variable
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
 
    //CONSULTA A LA BASE DE DATOS PARA OBTENER TODAS LAS RELACIONEs  EN CUENTA QUE NO SEAN EL ID PROPIO
    $sql = "SELECT * FROM `usuarios` WHERE `id` = '" . $id . "';";
    $result = $conn->query($sql);  

    // Verifica si la consulta fue exitosa
    if ($result && $result->num_rows > 0) {
        // Obtén el primer resultado (ya que se espera solo un banner)
        $usuario = $result->fetch_assoc();
        
        // Asigna los valores a las variables
        $id = $usuario['id'];
        $nombre = $usuario['nombre'];
        $password = $usuario['password'];
        $correo = $usuario['correo'];
    
        // Elimina el registro de la base de datos
        $deleteSql = "DELETE FROM `usuarios` WHERE `id` = '".$id."';";
        if ($conn->query($deleteSql) === TRUE) {
            echo "<p style='text-align:center; background-color:red; color:white; font-size:30px;'>Estás ELIMINANDO el REGISTRO permanentemente</p>";
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    }   
// Cierra la conexión a la base de datos después de la operación
$conn->close();
}

include ('../../templates/header.php');
?>

<br>
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Password</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>                
                        <tr class="">
                            <td scope="row"><?php echo $id ?></td>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $password ?></td>
                            <td><?php echo $correo?></td>
                            <td>
                                <a name="" id="" class="btn btn-danger" href="usuarios.php" role="button">Borrar</a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include ('../../templates/footer.php'); ?>