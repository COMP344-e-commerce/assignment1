<?php

   include("dbconnect.php"); 

  
  $sql = 'select * from PRODUCT order by PRODUCTID asc';

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // Use the uppercase column names for the associative array indices
        echo "productID:" , $row['PRODUCTID'] , "<br>";
	echo "productname:" , $row['PRODUCTNAME'] , "<br>";
	echo "productprice:" , $row['PRODUCTPRICE'] , "<br>";
	echo "<p><HR><p>";
      }
  } else {
      echo "0 results";
  }

$conn->close();

?> 

