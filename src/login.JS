function login(event) {
    event.preventDefault();
    var username = document.getElementsByName('username')[0].value;
    var password = document.getElementsByName('password')[0].value;

    if (username == "bfc" && password == "bfc") {
        alert("Dados corretos!");
        window.location = "login.html";
    }
    else {
        alert("Dados incorretos, tente novamente!");
    }
}