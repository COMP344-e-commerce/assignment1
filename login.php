<html>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Register</h1>
<?php
include("database.php");
$email = $_POST["email"];
$password = hash($hash, $_POST["password"], false);

$sql = "
SELECT `email`, `password` FROM `user`
WHERE `email` = '$email';
";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password != $row["password"]) {
        echo "Wrong password.";
    } else {
        echo "Login successfully.";
    }
} else {
    echo "User does not exist.";
}

?>
</body>
</html>