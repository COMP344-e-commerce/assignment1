<?php 

include("dbconnect.php"); 

$sql = "update PRODUCT set PRODUCTID = '101' where PRODUCTID='100'"; 

if (mysqli_query($conn, $sql) === TRUE) {
    echo "UPDATE is successful";
} else {
    echo "Error: UPDATE did not succeed";
}

?>







