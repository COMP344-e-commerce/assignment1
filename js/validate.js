var email, password, confirm, postcode, cardNumber, emailLogin;

function validateEmail() {
    var email = document.getElementsByName("email")[0].value;
    var reg = /[a-zA-Z0-9]*@[.a-zA-Z0-9]*mq.edu.au|[a-zA-Z0-9]*@[.a-zA-Z0-9]*hit.edu.cn/;
    if (reg.test(email)) {
        document.getElementsByName("emailVali")[0].style.display = "none";
        window.email = true;
    }
    else {
        document.getElementsByName("emailVali")[0].style.display = "block"
        document.getElementsByName("emailVali")[0].innerHTML = "illegal email";
        window.email = false;
    }
    console.log(window.email);
    buttonRegi();
}

function validatePassword() {
    var password = document.getElementsByName("newPassword")[0].value;
    var reg = /^[a-zA-Z]{1}[a-zA-Z0-9]{5}$/;
    if (reg.test(password)) {
        document.getElementsByName("newPasswordVali")[0].style.display = "none";
        window.password = true;
    }
    else {
        document.getElementsByName("newPasswordVali")[0].style.display = "block";
        document.getElementsByName("newPasswordVali")[0].innerHTML = "Incorrect password format";
        window.password = false;
    }
    console.log(window.password);
    buttonRegi();
}

function validateConfirm() {
    if (document.getElementsByName("newPassword")[0].value ==
        document.getElementsByName("confirmPassword")[0].value) {
        document.getElementsByName("confirmPasswordVali")[0].style.display = "none";
        window.confirm = true;
    }
    else {
        document.getElementsByName("confirmPasswordVali")[0].style.display = "block";
        document.getElementsByName("confirmPasswordVali")[0].innerHTML = "passwords are different";
        window.confirm = false;
    }
    console.log(window.confirm);
    buttonRegi();
}

function validatePostcode() {
    var postcode = document.getElementsByName("postcode")[0].value;
    var reg = /^[0-9]{4}$/;
    if (reg.test(postcode)) {
        document.getElementsByName("postcodeVali")[0].style.display = "none";
        window.postcode = true;
    }
    else {
        document.getElementsByName("postcodeVali")[0].style.display = "block";
        document.getElementsByName("postcodeVali")[0].innerHTML = "illegal postcode";
        window.postcode = false;
    }
    console.log(window.postcode);
    buttonRegi();
}

function validateCardNumber() {
    var cardNumber = document.getElementsByName("cardNumber")[0].value;
    var reg = /^[0-9]{10}$/;
    if (reg.test(cardNumber)) {
        document.getElementsByName("cardNumberVali")[0].style.display = "none";
        window.cardNumber = true;
    }
    else {
        document.getElementsByName("cardNumberVali")[0].style.display = "block";
        document.getElementsByName("cardNumberVali")[0].innerHTML = "illegal CardNumber";
        window.cardNumber = false;
    }
    console.log(window.cardNumber);
    buttonRegi();
}

function buttonRegi() {
    if (window.email && window.password && window.confirm && window.postcode && window.cardNumber) {
        console.log("yes");
        document.getElementsByName("registerButton")[0].disabled = false;
    }
    else {
        console.log("no");
        document.getElementsByName("registerButton")[0].disabled = true;
    }
}

function validateEmailLogin() {
    var email = document.getElementsByName("email")[1].value;
    var reg = /[a-zA-Z0-9]*@[.a-zA-Z0-9]*mq.edu.au|[a-zA-Z0-9]*@[.a-zA-Z0-9]*hit.edu.cn/;
    if (reg.test(email)) {
        document.getElementsByName("emailLoginVali")[0].style.display = "none";
        window.emailLogin = true;
    }
    else {
        document.getElementsByName("emailLoginVali")[0].style.display = "block";
        document.getElementsByName("emailLoginVali")[0].innerHTML = "illegal email";
        window.emailLogin = false;
    }
    console.log(window.email);
    buttonLogin();
}

function buttonLogin() {
    if (window.emailLogin) {
        console.log("yes");
        document.getElementsByName("loginButton")[0].disabled = false;
    }
    else {
        console.log("no");
        document.getElementsByName("loginButton")[0].disabled = true;
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