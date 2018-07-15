<?php 

include("dbconnect.php"); 


$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];

  
$sql = "INSERT INTO TBLUSERS (FIRSTNAME, LASTNAME, EMAIL, USERNAME, PASSWORD) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')"; 

if (mysqli_query($conn, $sql) === TRUE) {
    echo "Thank you for registration";
} else {
    echo "Error: Query did not succeed";
}

?>

