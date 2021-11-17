var login = document.getElementById("login-container");
var register = document.getElementById("register-container");

function loginFunction() {

    login.className="login-wrapper";
    register.className="hidden";

}

function registerFunction() {

    register.className="register-wrapper";
    login.className="hidden";

}