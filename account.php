<html>
<head>
    <script src="js/validate.js"></script>
</head>
<?php $title = "Account" ?>
<?php include("head.php"); ?>
<body>
<?php include("header.html"); ?>
<h1>Register</h1>
<div>
    <form method="post" action="register.php" id="registerForm">
        <label>Email: </label>
        <input name="email" type="email" onchange="validateEmail();"><div name="emailVali"></div><br>
        <label>New password: </label>
        <input name="newPassword" type="password" onchange="validatePassword();validateConfirm();"><div name="newPasswordVali"></div><br>
        <label>Confirm password: </label>
        <input name="confirmPassword" type="password" onchange="validateConfirm();"><div name="confirmPasswordVali"></div><br>
        <label>First Name: </label>
        <input name="firstName" type="text"><br>
        <label>Last Name: </label>
        <input name="lastName" type="text"><br>
        <label>Country: </label>
        <select name="country">
            <?php
            // Maybe I want to sell textbooks to China in the future, so I use an array
            for ($i = 0; $i < count($countries, COUNT_NORMAL); $i++) {
                echo "<option value='$countries[$i]'>$countries[$i]</option>";
            }
            ?>
        </select>
        <br>
        <label>State: </label>
        <input name="state" type="text"><br>
        <label>City: </label>
        <input name="city" type="text"><br>
        <label>Street address: </label>
        <input name="address" type="text"><br>
        <label>Postcode: </label>
        <input name="postcode" type="number" min="0" onchange="validatePostcode();"><div name="postcodeVali"></div><br>
        <label>Credit card number: </label>
        <input name="cardNumber" type="number" onchange="validateCardNumber();"><div name="cardNumberVali"></div><br>
        <label>Credit card expiry: </label>
        <input name="cardExpiry" type="month" /><br>
        <input type="submit" value="Register" name="registerButton" >
    </form>
</div>
<h1>Login</h1>
<div>
    <form method="post" action="login.php" id="loginForm">
        <label>Email: </label>
        <input name="emailLogin" onchange="validateEmailLogin();"><div name="emailLoginVali"></div><br>
        <label>Password: </label>
        <input name="password" type="password"><br>
        <input type="submit" value="Sign in" name="loginButton">
    </form>
</div>
<?php include("footer.html"); ?>
</body>
</html>