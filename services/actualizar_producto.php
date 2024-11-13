<?php

include('../config/db_connection.php');

$codProd = $_POST['codProd'];
$nomProd = $_POST['nomProd'];
$marcProd = $_POST['marcProd'];
$precProd = $_POST['precProd'];
$cantProd = $_POST['cantProd'];


$sql = "update tabla05 set codProd=".$codProd.", nomProd='".$nomProd."', marcProd='".$marcProd."', precProd=".$precProd.", cantProd=".$cantProd." where codProd=".$codProd;

 if (mysqli_query($conn, $sql)){
     echo "El producto fue actualizado satisfactoriamente";
 }else{
    echo "Error al actualizar producto, revise su conexion a la base de datos";
 }

mysqli_close($conn);


?>