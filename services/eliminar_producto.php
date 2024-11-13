<?php

include('../config/db_connection.php');

$codProd = $_POST['codProd'];


$sql = "delete from tabla05 where codProd =".$codProd;

 if (mysqli_query($conn, $sql)){
     echo "El producto se ha eliminado satisfactoriamente";
 }else{
    echo "Error al eliminar producto, revise si el id proporcionado es correcto o su conexion a la base de datos";
 }

mysqli_close($conn);


?>