<html>
<?php $title = "Login" ?>
<?php include("head.php"); ?>
<body>
<?php include("header.html"); ?>
<h1>Login</h1>
<?php
@session_start();
include("database.php");
$email = $_POST["email"];
$password = hash($hash, $_POST["password"], false);

$sql = "
SELECT `email`, `password` FROM `user`
WHERE `email` = '$email'
AND `password` = '$password';
";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['user'] = $email;
    echo "Login successfully.";
} else {
    echo "Unable to login.";
}

?>
<?php include("footer.html"); ?>
</body>
</html>