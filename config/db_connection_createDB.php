<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password);



// Check conn
if (!$conn){
    die("Falló la conexión: " . mysqli_connect_error());
}else{
    echo "Base de datos en linea!";
}

?>