<html>
<head>
    <script src="js/validate.js"></script>
</head>
<?php $title = "Account" ?>
<?php include("head.php"); ?>
<body>
<?php include("header.html"); ?>
<div class="register">
    <h1>Register</h1>
    <div>
        <form method="post" action="register.php" id="registerForm">
            <label>Email: </label>
            <input id="email" name="email" type="email" onchange="validateEmail();"><br>
            <div id="emailVali"></div>
            <label>New password: </label>
            <input id="newPassword" name="newPassword" type="password" maxlength="6" minlength="6"
                   onchange="validatePassword();validateConfirm();"><br>
            <div id="newPasswordVali" name="newPasswordVali"></div>
            <label>Confirm password: </label>
            <input id="confirmPassword" name="confirmPassword" type="password" maxlength="6" minlength="6"
                   onchange="validateConfirm();"><br>
            <div id="confirmPasswordVali" name="confirmPasswordVali"></div>
            <label>First Name: </label>
            <input id="firstName" name="firstName" type="text"><br>
            <label>Last Name: </label>
            <input id="lastName" name="lastName" type="text"><br>
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
            <input id="postcode" name="postcode" type="text" pattern="[0-9.]+" minlength="4" maxlength="4"
                   onchange="validatePostcode();"><br>
            <div id="postcodeVali" name="postcodeVali"></div>
            <label>Credit card number: </label>
            <input id="cardNumber" name="cardNumber" type="text" maxlength="10" minlength="10"
                   onchange="validateCardNumber();"><br>
            <div id="cardNumberVali" name="cardNumberVali"></div>
            <label>Credit card expiry: </label>
            <input id="cardExpiry" name="cardExpiry" type="month" onchange="validateCardExpiry();"/><br>
            <div id="cardExpiryVali"></div>
            <input class="btn btn-primary btn-block btn-large" type="submit" value="Register" id="registerButton"
                   name="registerButton">
        </form>
    </div>
</div>

<div class="login">
    <h1>Login</h1>
    <div>
        <form method="post" action="login.php" id="loginForm">
            <label>Email: </label>
            <input id="emailLogin" name="emailLogin" onchange="validateEmailLogin();"><br>
            <div id="emailLoginVali" name="emailLoginVali"></div>
            <label>Password: </label>
            <input name="password" type="password"><br>
            <input class="btn btn-primary btn-block btn-large" type="submit" value="Sign in" id="loginButton"
                   name="loginButton">
        </form>
    </div>
</div>
<?php include("footer.html"); ?>
</body>
</html>