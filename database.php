<?php

include("config.php");

// Create connection
$conn = mysqli_connect($server_name, $user_name, $passwd);

function check_conn() {
    if (mysqli_connect_errno()) {
        die("Connection failed to database: " . mysqli_connect_error());
    } else {
        return "Connect successfully";
    }
}

// Use database
mysqli_select_db($conn, $database);

