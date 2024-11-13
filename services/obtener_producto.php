<?php

include('../config/db_connection.php');

$codProd = $_POST['codProd'];

$sql= "SELECT * FROM tabla05 WHERE codProd= ".$codProd;

$data = array();
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_row($result)){
            array_push($data, $row);
        }
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    return false;
}

echo json_encode($data);
 
mysqli_close($conn);
?>
