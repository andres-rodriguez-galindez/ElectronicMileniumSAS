<?php

include('../config/db_connection.php');

$codProd = $_POST['codProd'];

$sql= "SELECT * FROM tabla05 WHERE codProd= ".$codProd;

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo '<table class="table" id="table">';
            echo "<tr>";
                echo "<th>Codigo</th>";
                echo "<th>Nombre</th>";
                echo "<th>Marca</th>";
                echo "<th>Precio</th>";
                echo "<th>Cantidad</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['codProd'] . "</td>";
                echo "<td>" . $row['nomProd'] . "</td>";
                echo "<td>" . $row['marcProd'] . "</td>";
                echo "<td>" . $row['precProd'] . "</td>";
                echo "<td>" . $row['cantProd'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
mysqli_close($conn);
?>
