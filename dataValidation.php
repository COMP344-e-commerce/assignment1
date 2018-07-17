<?php
function validatePassword($newPassword)
{
    $minChar = 6;
    preg_match("/^[a-zA-Z]/", $newPassword, $firstChar);
    preg_match_all("/\d/", $newPassword, $numericChar);
    if (strlen($newPassword) < 6) {
        return "Does not have more than $minChar characters.";
    } elseif (!ctype_alpha($firstChar[0])) {
        return "Does not start with a letter.";
    } elseif (count($numericChar[0], COUNT_NORMAL) <= 0) {
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
    $valid = filter_var($postcode, FILTER_VALIDATE_INT);
    if ($valid & $postcode > 0) {
        return true;
    }
    return "Postcode provided is not valid.";
}