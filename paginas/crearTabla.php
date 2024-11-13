<?php
include('../config/db_connection.php');

//Creación de la tabla
$sql = "CREATE TABLE tabla05 (
    codProd INT(15) PRIMARY KEY,
    nomProd VARCHAR(50) NOT NULL,
    marcProd VARCHAR(30) NOT NULL,
    precProd DECIMAL(10, 2) NOT NULL,
    cantProd INT(5) NOT NULL
)";

if (mysqli_query($conn, $sql)){
    echo "La tabla de productos se ha creado satisfactoraimente";
}else{
    echo "Error al crear la tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?>