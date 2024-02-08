<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Formulario</title>
</head>
<body>
<?php

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "formulario";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "INSERT INTO datos_formulario (nombre, email, mensaje,fecha )
 VALUES ('John', 'john@example.com','Hola mundo','12122012')";
 
 if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
?>


</body>
</html>
