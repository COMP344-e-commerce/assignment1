<html>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Register</h1>
<?php
include("database.php");
$email = $_POST["email"];
$newPassword = hash($hash, $_POST["newPassword"], false);
$oldPassword = hash($hash, $_POST["oldPassword"], false);
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$country = $_POST["country"];
$state = $_POST["state"];
$city = $_POST["city"];
$address = $_POST["address"];
$postcode = $_POST["postcode"];
$sql = "
INSERT INTO `user` 
(`userFirstName`, `userLastName`, `email`, `country`, `state`, `city`, `address`, `postCode`, 
`password`) 
VALUES ('$firstName', '$lastName', '$email', '$country', '$state', '$city', '$address', '$postcode',
'$newPassword');
";

if ($conn->query($sql)) {
    echo "Registered successfully";
} else {
    echo "Unable to register.";
}

?>
</body>
</html>