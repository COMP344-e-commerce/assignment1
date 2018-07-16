<html>
<?php $title = "Register" ?>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Register</h1>
<div>
    <?php
    include("database.php");

    function validatePassword($newPassword)
    {
        $minChar = 6;
        preg_match("/^[a-zA-Z]/", $newPassword, $firstChar);
        preg_match_all("/\d/", $newPassword, $numericChar);
        if (strlen($newPassword) < 6) {
            return "Does not have more than $minChar characters.";
        } elseif (!count($firstChar[0], COUNT_NORMAL) > 0) {
            return "Does not start with a letter.";
        } elseif (!count($numericChar, COUNT_NORMAL) > 0) {
            return "Does not contain any digit.";
        } else {
            return true;
        }
    }

    function comparePasswords($newPassword, $confirmPassword)
    {
        if ($newPassword == $confirmPassword) {
            return true;
        } else {
            return "Passwords do not match.";
        }
    }

    function validateEmail($email)
    {
        preg_match("/[a-zA-Z].*@[a-z]*[.][a-z]*[a-z0-9.]*/", $email, $matchedEmail);
        if ($email == $matchedEmail[0]) {
            return true;
        }
        return "Invalid email address.";
    }

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

    validatePassword($_POST["newPassword"]);

    $error = false;
    $errorMessages = [
        validateEmail($email),
        validatePassword($newPassword),
        comparePasswords($newPassword, $confirmPassword)
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