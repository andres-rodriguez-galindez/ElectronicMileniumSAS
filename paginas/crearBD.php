<?php
include('../config/db_connection_createDB.php');
//Crear BD
$sql = "CREATE DATABASE bdunad05 CHARACTER SET utf8 COLLATE utf8_spanish_ci";

if (mysqli_query($conn, $sql)){
    echo "La base de datos se creó correctamente";
}else{
    echo "Se produjo un error al crear la base de datos:" . mysqli_error($conn);
}

mysqli_close($conn);

?>