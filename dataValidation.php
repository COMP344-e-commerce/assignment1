<?php
function validatePassword($newPassword)
{
    $minChar = 6;
    $maxChar = 6;
    preg_match("/^[a-zA-Z]/", $newPassword, $firstChar);
    preg_match_all("/\d/", $newPassword, $numericChar);
    if (strlen($newPassword) < 6 & strlen($newPassword) > $maxChar) {
        return "Password need to be betwwn $minChar and $maxChar characters.";
    } elseif (!ctype_alpha($firstChar[0])) {
        return "Password does not start with a letter.";
    } elseif (count($numericChar[0], COUNT_NORMAL) <= 0) {
        return "Password does not contain any digit.";
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

function validateEmail($email, $validDomains)
{


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // construct regex
        $regex = "@[\S]*";
        for ($i = 0; $i < count($validDomains); $i++) {
            $regex = $regex . $validDomains[$i] . "|";
        }
        // remove the last | in the regex
        $regex = substr($regex, 0, strlen($regex) - 1);

        preg_match("/$regex/", $email, $matchedEmail);
        if (count($matchedEmail) <= 0) {
            return "Only allow emails from these domains: " . implode(", ", $validDomains);
        }
        return true;
    }
    return "Invalid email address.";
}

function validateCountry($country, $countries)
{
    for ($i = 0; $i < count($countries, COUNT_NORMAL); $i++) {
        if ($country == $countries[$i]) {
            return true;
        }
    }
    return $country . " is not supported at the moment.";
}

function validateName($name, $part = "first name")
{
    $regex = "[a-zA-Z-_\s]*";
    preg_match("/$regex/", $name, $matchedName);
    if ($name == $matchedName[0]) {
        return true;
    }
    return "The $part can only contain $regex";
}

function validateAddress($address, $part = "state")
{
    $regex = "[a-zA-Z-_\s\d']*";
    preg_match("/$regex/", $address, $matchedState);
    if ($address == $matchedState[0]) {
        return true;
    }
    return "The $part can only contain $regex";
}

function validatePostcode($postcode)
{
    if (filter_var($postcode, FILTER_VALIDATE_INT)) {
        return true;
    }
    return "Postcode provided is not valid.";
}

function validateExpiry($cardExpiry)
{
    $regex = "[0-9]{4}-[0-9]{2}-01\s00:00:00";
    preg_match("/$regex/", $cardExpiry, $matchedDate);
    $currentTimestamp = strtotime(date('Y-m-d H:i:s'));
    $cardTimestamp = strtotime($cardExpiry);
    if ($cardExpiry == $matchedDate[0] & $cardTimestamp > $currentTimestamp) {
        return true;
    }
    return "Credit card expiry is invalid. It might be expired.";
}

function validateCard($number)
{
    // Discover has 13 numbers, and some cards can have up to 19 numbers.
    // I allow up to 20 numbers because I'm not sure
    $regex = "[0-9]{10}";
    preg_match("/$regex/", $number, $matchedNumber);
    if ($number == $matchedNumber[0]) {
        return true;
    }
    return "Credit card number is invalid.";
}