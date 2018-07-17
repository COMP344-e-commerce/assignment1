<html>
<?php $title = "Register" ?>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Register</h1>
<div>
    <?php
    include("database.php");
    include("dataValidation.php");

    $email = $_POST["email"];
    $newPassword = hash($hash, $_POST["newPassword"], false);
    $confirmPassword = hash($hash, $_POST["confirmPassword"], false);
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];

    $error = false;
    $errorMessages = [
        validateEmail($email),
        validatePassword($_POST["newPassword"]),
        comparePasswords($newPassword, $confirmPassword),
        validateCountry($country, $countries),
        validateName($firstName),
        validateName($lastName, "last name"),
        validateAddress($state),
        validateAddress($city, "city"),
        validateAddress($address, "street address"),
        validatePostcode($postcode)
    ];

    for ($i = 0; count($errorMessages, COUNT_NORMAL) > $i; $i++) {
        if ($errorMessages[$i] !== true) {
            echo $errorMessages[$i] . "<br>";
            $error = true;
        }
    }

    if ($error) {
        echo "Unable to register.";
    } else {
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
    }

    ?>
</div>
</body>
</html>