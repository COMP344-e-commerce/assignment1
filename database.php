<?php
include("config.php");

function check_conn() {
    if (mysqli_connect_errno()) {
        die("Connection failed to database: " . mysqli_connect_error());
    } else {
        return "Connect successfully";
    }
}

// Create connection
$conn = mysqli_connect($server_name, $user_name, $passwd);

// Use database
mysqli_select_db($conn, $database);
