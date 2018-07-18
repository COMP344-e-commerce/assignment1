<html>
<?php $title = "Register" ?>
<?php include("head.php"); ?>
<body>
<?php include("header.html"); ?>
<h1>Register</h1>
<div>
    <?php
    include("database.php");
    include("dataValidation.php");

    $email = $_POST["email"];
    $rawPassword = $_POST["newPassword"];
    $newPassword = hash($hash, $_POST["newPassword"], false);
    $confirmPassword = hash($hash, $_POST["confirmPassword"], false);
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $cardNumber = $_POST["cardNumber"];
    $cardExpiry = $_POST["cardExpiry"]. "-01 00:00:00";

    $error = false;

    // Collect all the errors the client made
    $errorMessages = [
        validateEmail($email, $validDomains),
        validatePassword($rawPassword),
        comparePasswords($newPassword, $confirmPassword),
        validateCountry($country, $countries),
        validateName($firstName),
        validateName($lastName, "last name"),
        validateAddress($state),
        validateAddress($city, "city"),
        validateAddress($address, "street address"),
        validatePostcode($postcode),
        validateCard($cardNumber),
        validateExpiry($cardExpiry)
    ];

    // Display all the errors the client made
    for ($i = 0; count($errorMessages, COUNT_NORMAL) > $i; $i++) {
        if ($errorMessages[$i] !== true) {
            echo $errorMessages[$i] . "<br>";
            $error = true;
        }
    }

    // if the client provides all valid data, insert the data into database
    if ($error) {
        echo "Unable to register.";
    } else {
        $sql = "
        INSERT INTO `user` 
        (`userFirstName`, `userLastName`, `email`, `country`, `state`, `city`, `address`, `postCode`, 
        `password`, `creditCardNumber`, `creditCardExpiry`) 
        VALUES ('$firstName', '$lastName', '$email', '$country', '$state', '$city', '$address', '$postcode',
        '$newPassword', '$cardNumber', '$cardExpiry');
        ";

        if ($conn->query($sql)) {
            $to = $email;
            $subject = "Textbook store account registered";
            $message = "
            Thank you for registering at our textbook store.<br>
            Your acocunt email is $email.<br>
            Your password is $rawPassword.
            ";
            $headers = 'Reply-To: ' . $to . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            echo $message;
        } else {
            echo "Unable to register.";
        }
    }
    $conn->close();
    ?>
</div>
<?php include("footer.html"); ?>
</body>
</html>