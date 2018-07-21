<html>
<head>
    <script src="js/validate.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
</head>
<?php $title = "Account" ?>
<?php include("head.php"); ?>
<body>
<?php include("header.html"); ?>

<div class="top-content">
<h1>COMP344 Bookstore</h1>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Register</h3>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form method="post" action="register.php" id="registerForm" class="login-form">
                            <div class="form-group">
                                <input id="email" name="email" type="email" onchange="validateEmail();" 
                                class="form-username form-control" placeholder="E-mail">
                                <div id="emailVali" class="alert alert-warning"></div>
                            </div>
                            <div class="form-group">
                                <input id="newPassword" name="newPassword" type="password" maxlength="6" minlength="6"
                                    onchange="validatePassword();validateConfirm();" class="form-username form-control" placeholder="New Possword">
                                <div id="newPasswordVali" name="newPasswordVali" class="alert alert-warning"></div>
                            </div>
                            <div class="form-group">
                                <input id="confirmPassword" name="confirmPassword" type="password" maxlength="6" minlength="6"
                                    onchange="validateConfirm();" class="form-username form-control" placeholder="Confirm Password">
                                <div id="confirmPasswordVali" name="confirmPasswordVali" class="alert alert-warning"></div>
                            </div>
                            <div class="form-group">
                                <input id="firstName" name="firstName" type="text" class="form-username form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input id="lastName" name="lastName" type="text" class="form-username form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <select name="country" class="form-username form-control" placeholder="Country">
                                    <?php
                                    // Maybe I want to sell textbooks to China in the future, so I use an array
                                    for ($i = 0; $i < count($countries, COUNT_NORMAL); $i++) {
                                        echo "<option value='$countries[$i]'>$countries[$i]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="state" type="text" class="form-username form-control" placeholder="State">
                            </div>
                            <div class="form-group">
                                <input name="city" type="text" class="form-username form-control" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input name="address" type="text" class="form-username form-control" placeholder="Street address">
                            </div>
                            <div class="form-group">
                                <input id="postcode" name="postcode" type="text" pattern="[0-9.]+" minlength="4" maxlength="4"
                                    onchange="validatePostcode();" class="form-username form-control" placeholder="Postcode">
                                <div id="postcodeVali" name="postcodeVali" class="alert alert-warning"></div>
                            </div>
                            <div class="form-group">
                                <input id="cardNumber" name="cardNumber" type="text" maxlength="10" minlength="10"
                                    onchange="validateCardNumber();" class="form-username form-control" placeholder="Credit Card Number">
                                <div id="cardNumberVali" name="cardNumberVali" class="alert alert-warning"></div>
                            </div>
                            <div class="form-group">
                                <input id="cardExpiry" name="cardExpiry" type="month" onchange="validateCardExpiry();" 
                                class="form-username form-control" placeholder="Credit card expiry"/>
                            </div>
                            <input class="btn btn-primary btn-block btn-large" type="submit" value="Register" id="registerButton"
                            name="registerButton" class="btn">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Sign In</h3>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form method="post" action="login.php" id="registerForm" class="login-form">
                            <div class="form-group">
                                <input id="emailLogin" name="emailLogin" onchange="validateEmailLogin();"
                                class="form-username form-control" placeholder="E-mail">
                                <div id="emailLoginVali" name="emailLoginVali" class="alert alert-warning"></div>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password"class="form-username form-control" placeholder="Possword">
                            </div>
                            <input class="btn btn-primary btn-block btn-large" type="submit" value="Sign in" id="loginButton"
                                name="loginButton">
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
</div>

<?php include("footer.html"); ?>
</body>
</html>