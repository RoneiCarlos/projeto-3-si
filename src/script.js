function login(event) {
    event.preventDefault();
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

     if (email == '' || senha == '') {
        alert("dados incompletos, revise os campos");
    }
    else {
        alert("Dados corretos! Bem vindo: "+email);
        window.location.href = "ecommerce.html";
    }
}

function Enviar(event) {
    event.preventDefault();
    var nome = document.getElementById('nomeid').value;
    var email = document.getElementById('emailid').value;
    var opiniao = document.getElementById('opiniaoid').value;

    if (nome == '' || email == '' || opiniao == '') {
        alert("Nos falta informação");
    } else {
        alert('Obrigado sr(a) ' + nome + ' os seus dados foram encaminhados com sucesso');
        window.location.href = "home.html";
    }
    
}