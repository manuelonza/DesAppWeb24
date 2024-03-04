<?php

function consulta($sql, $devolverDatos=true){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "empresa_marketing";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);    }
    
    //realizamos la consulta
    $result=$conn->query($sql);
    
    //Devolvemos los datos obtenidos de la BD en un array? true/false
    if($devolverDatos){
            $datos = [];
    
            while ($fila = $result->fetch_assoc()) {
                $datos[] = $fila;
            }
            //devuelve un array con los datos solicitados de la consulta
            return $datos;
        
    }

    $conn->close();
}