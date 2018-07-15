<html>
<head>
    <title>Install</title>
</head>
<body>
<h1>Install</h1>
<?php include("config.php"); ?>
<?php
//Create connection
$conn = mysqli_connect($server_name, $user_name, $passwd);
mysqli_select_db($conn, $database);

//Drop all tables
$sql = "SHOW TABLES";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Bypass constraint check
    $sql = "SET foreign_key_checks = 0;";
    $conn->query($sql);
    //Output data of each row
    while($row = $result->fetch_assoc()) {
        // Use the uppercase column names for the associative array indices

        $sql = "DROP TABLE `". $row[array_keys($row)[0]]. "`;";
        echo $sql. "<br>";
        $conn->query($sql);
    }
    //Re-enable constraint check
    $sql = "SET foreign_key_checks = 1;";
    $conn->query($sql);
} else {
    echo "0 results";
}

//Initialise database structure
$sql = file_get_contents('install.sql');
$conn->multi_query($sql);

//Close connection
$conn->close();
?>
</body>
</html>