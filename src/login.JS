function login(event) {
    event.preventDefault();
    var Usuario = document.getElementsByName('username')[0].value;
    var senha = document.getElementsByName('password')[0].value;

    if (Usuario == "bfc" && senha == "bfc") {
        alert("Dados corretos!");
        window.location = "login.html";
    }
    else {
        alert("Dados incorretos, tente novamente!");
    }
}