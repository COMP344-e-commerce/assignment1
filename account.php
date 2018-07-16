<html>
<?php $title = "Account" ?>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Register</h1>
<div>
    <form method="post" action="register.php" id="registerForm">
        <label>Email: </label>
        <input name="email" type="email"><br>
        <label>New password: </label>
        <input name="newPassword" type="password"><br>
        <label>Confirm password: </label>
        <input name="confirmPassword" type="password"><br>
        <label>First Name: </label>
        <input name="firstName" type="text"><br>
        <label>Last Name: </label>
        <input name="lastName" type="text"><br>
        <label>Country: </label>
        <input name="country" type="text"><br>
        <label>State: </label>
        <input name="state" type="text"><br>
        <label>City: </label>
        <input name="city" type="text"><br>
        <label>Street address: </label>
        <input name="address" type="text"><br>
        <label>Postcode: </label>
        <input name="postcode" type="number" min="0"><br>
        <input type="submit" value="Register">
    </form>
</div>
<h1>Login</h1>
<div>
    <form method="post" action="login.php" id="loginForm">
        <label>Email: </label>
        <input name="email"><br>
        <label>Password: </label>
        <input name="password" type="password"><br>
        <input type="submit" value="Sign in">
    </form>
</div>
</body>
</html>