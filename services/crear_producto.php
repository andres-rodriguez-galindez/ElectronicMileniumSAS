<?php

include('../config/db_connection.php');

$codProd = $_POST['codProd'];
$nomProd = $_POST['nomProd'];
$marcProd = $_POST['marcProd'];
$precProd = $_POST['precProd'];
$cantProd = $_POST['cantProd'];


$sql = "insert into tabla05 values(".$codProd.", '".$nomProd."', '".$marcProd."', ".$precProd.", ".$cantProd.")";

 if (mysqli_query($conn, $sql)){
     echo "El producto fue registrado satisfactoriamente";
 }else{
    echo "Error al ingresar producto, revise si el id proporcionado no esta duplicado o su conexion a la base de datos";
 }

mysqli_close($conn);


?>