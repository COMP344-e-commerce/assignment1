var email, password, confirm, postcode, cardNumber, emailLogin;

function validateEmail() {
    var email = document.getElementById("email").value;
    var reg = /[a-zA-Z0-9]*@[.a-zA-Z0-9]*mq.edu.au|[a-zA-Z0-9]*@[.a-zA-Z0-9]*hit.edu.cn/;
    if (reg.test(email)) {
        document.getElementById("emailVali").style.display = "none";
        window.email = true;
    }
    else {
        document.getElementById("emailVali").style.display = "block"
        document.getElementById("emailVali").innerHTML = "Illegal email. Please use MQ or HIT email addresses.";
        window.email = false;
    }
    console.log(window.email);
    buttonRegi();
}

function validatePassword() {
    var password = document.getElementById("newPassword").value;
    var reg = /^[a-zA-Z]{1}[a-zA-Z0-9]{5}$/;
    if (reg.test(password)) {
        document.getElementById("newPasswordVali").style.display = "none";
        window.password = true;
    }
    else {
        document.getElementById("newPasswordVali").style.display = "block";
        document.getElementById("newPasswordVali").innerHTML = "Incorrect password format. It must be 6 char and " +
            "not start with a number";
        window.password = false;
    }
    console.log(window.password);
    buttonRegi();
}

function validateConfirm() {
    if (document.getElementById("newPassword").value ==
        document.getElementById("confirmPassword").value) {
        document.getElementById("confirmPasswordVali").style.display = "none";
        window.confirm = true;
    }
    else {
        document.getElementById("confirmPasswordVali").style.display = "block";
        document.getElementById("confirmPasswordVali").innerHTML = "passwords are different";
        window.confirm = false;
    }
    console.log(window.confirm);
    buttonRegi();
}

function validatePostcode() {
    var postcode = document.getElementById("postcode").value;
    var reg = /^[0-9]{4}$/;
    if (reg.test(postcode)) {
        document.getElementById("postcodeVali").style.display = "none";
        window.postcode = true;
    }
    else {
        document.getElementById("postcodeVali").style.display = "block";
        document.getElementById("postcodeVali").innerHTML = "Illegal postcode. It must be 4 number characters.";
        window.postcode = false;
    }
    console.log(window.postcode);
    buttonRegi();
}

function validateCardNumber() {
    var cardNumber = document.getElementById("cardNumber").value;
    var reg = /^[0-9]{10}$/;
    if (reg.test(cardNumber)) {
        document.getElementById("cardNumberVali").style.display = "none";
        window.cardNumber = true;
    }
    else {
        document.getElementById("cardNumberVali").style.display = "block";
        document.getElementById("cardNumberVali").innerHTML = "Illegal CardNumber";
        window.cardNumber = false;
    }
    console.log(window.cardNumber);
    buttonRegi();
}

function validateCardExpiry() {
    var cardExpiry = (new Date(document.getElementById("cardExpiry").value)).getTime() / 1000;
    var currentTime = parseInt((new Date()).getTime() / 1000);
    if (currentTime < cardExpiry) {
        document.getElementById("cardExpiryVali").style.display = "none";
        window.cardExpiry = true;
    }
    else {
        document.getElementById("cardExpiryVali").style.display = "block";
        document.getElementById("cardExpiryVali").innerHTML = "Expired card";
        window.cardExpiry = false;
    }
    console.log(window.cardExpiry);
    buttonRegi();
}

function buttonRegi() {
    if (window.email && window.password && window.confirm && window.postcode && window.cardNumber && window.cardExpiry) {
        console.log("yes");
        document.getElementById("registerButton").disabled = false;
    }
    else {
        console.log("no");
        document.getElementById("registerButton").disabled = true;
    }
}

function validateEmailLogin() {
    var email = document.getElementById("emailLogin").value;
    var reg = /[a-zA-Z0-9]*@[.a-zA-Z0-9]*mq.edu.au|[a-zA-Z0-9]*@[.a-zA-Z0-9]*hit.edu.cn/;
    if (reg.test(email)) {
        document.getElementById("emailLoginVali").style.display = "none";
        window.emailLogin = true;
    }
    else {
        document.getElementById("emailLoginVali").style.display = "block";
        document.getElementById("emailLoginVali").innerHTML = "Illegal email";
        window.emailLogin = false;
    }
    console.log(window.email);
    buttonLogin();
}

function buttonLogin() {
    if (window.emailLogin) {
        console.log("yes");
        document.getElementById("loginButton").disabled = false;
    }
    else {
        console.log("no");
        document.getElementById("loginButton").disabled = true;
    }
}

window.onload = function () {

    validateEmail();
    validatePassword();
    validateConfirm();
    validatePostcode();
    validateCardNumber();
    validateEmailLogin();
}