<?php

$servername = "202.118.249.4";
$username = "ausstu2";
$password = "DhKCaeN0";
$database = "ausstu2";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

if (mysqli_connect_errno()) 
{
 die("Connection failed to database: " . mysqli_connect_error());
}
else{
 echo "Connect successfully\n";
 echo"<br />";
}
// Use database 
mysqli_select_db($conn, $database);


?> 


