<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad05";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check conn
if (!$conn){
    die("Falló la conexión: " . mysqli_connect_error());
}

?>