function onRegister() {
    var register = document.getElementById("register");
    var login = document.getElementById("login");
    var registerContain = document.getElementById("register_contain");
    var loginContain = document.getElementById("login_contain");
    if (register.classList.contains("btn-info")) {
        return;
    } else {
        login.classList.remove("btn-info")
        register.classList.add("btn-info");
        loginContain.style.display = "none";
        registerContain.style.display = "block";
    }
}
function onLogin() {
    var register = document.getElementById("register");
    var login = document.getElementById("login");
    var registerContain = document.getElementById("register_contain");
    var loginContain = document.getElementById("login_contain");
    if (login.classList.contains("btn-info")) {
        return;
    } else {
        register.classList.remove("btn-info")
        login.classList.add("btn-info");
        registerContain.style.display = "none";
        loginContain.style.display = "block";
    }
}