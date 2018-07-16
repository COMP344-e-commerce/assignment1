<html>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Register</h1>
<div class="table">
    <form method="post" action="register.php" id="registerForm">
        <label>Email: </label>
        <input name="email"><br>
        <label>Password: </label>
        <input name="password"><br>
        <label>First Name: </label>
        <input name="firstName"><br>
        <label>Middle Name: </label>
        <input name="middleName"><br>
        <label>Last Name: </label>
        <input name="lastName"><br>
        <label>Country: </label>
        <input name="country"><br>
        <label>State: </label>
        <input name="state"><br>
        <label>City: </label>
        <input name="city"><br>
        <label>Street address: </label>
        <input name="address"><br>
        <label>Postcode: </label>
        <input name="postcode"><br>
        <input type="submit" value="Submit">
    </form>
</div>
<?php
include("database.php");
$email = $_POST["email"];
$password = $_POST["password"];
$firstName = $_POST["firstName"];
$middleName = $_POST["middleName"];
$lastName = $_POST["lastName"];
$country = $_POST["country"];
$state = $_POST["state"];
$city = $_POST["city"];
$address = $_POST["address"];
$postcode = $_POST["postcode"];

$sql = "
INSERT INTO `user` 
(`userFirstName`, `userMiddleName`, `userLastName`, `email`, `country`, `state`, `city`, `address`, `postCode`, 
`password`) 
VALUES ('$firstName', '$middleName', '$lastName', '$email', '$country', '$state', '$city', '$address', '$postcode', 
'$password');
";

$conn->query($sql);

?>
</body>
</html>