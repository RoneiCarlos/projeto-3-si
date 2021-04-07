function login(event) {
    event.preventDefault();
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

     if (email == '' || senha == '') {
        alert("Dados incompletos, revise os campos.");
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
        alert("Nos falta informação!");
    } else {
        alert('Obrigado sr(a) ' + nome + ' os seus dados foram encaminhados com sucesso!');
        window.location.href = "home.html";
    }
    
}

// jQuery.fn.shake = function () {
//     this.each(function (i) {
//         $(this).css({
//             "position": "relative"
//         });
//         for (var x = 1; x <= 5; x++) {
//             $(this).animate({
//                 left: -25
//             }, 50).animate({
//                 left: 0
//             }, 250).animate({
//                 left: 25
//             }, 50).animate({
//                 left: 0
//             }, 250);
//         }
//     });
// }

function start() {
    $('#coffe').shake();
    $('#jarro').shake();
    $('#van').shake();
    $('#carrin').shake();
};

//linkagem de páginas
function gotohome() {
    window.location.href = "home.html";
}

function gotologin() {
    window.location.href = "login.html";
}

function gotoprodutos() {
    window.location.href = "produtos.html";
}

function gotosobre() {
    window.location.href = "sobre.html";
}

function gotocafes() {
    window.location.href = "cafes.html";
}

function gotojarros() {
    window.location.href = "jarros.html";
}

function mostra1() {
    var spanacaia =  document.getElementById("spanacaia");
    spanacaia.removeAttribute("class");
}

function esconde1() {
    spanacaia.setAttribute("class", "hidden");
}

function mostra2() {
    var spanarabica =  document.getElementById("spanarabica");
    spanarabica.removeAttribute("class");
}

function esconde2() {
    spanarabica.setAttribute("class", "hidden");
}

function mostra3() {
    var spanbourbon =  document.getElementById("spanbourbon");
    spanbourbon.removeAttribute("class");
}

function esconde3() {
    spanbourbon.setAttribute("class", "hidden");
}

function mostra4() {
    var spancatuai =  document.getElementById("spancatuai");
    spancatuai.removeAttribute("class");
}

function esconde4() {
    spancatuai.setAttribute("class", "hidden");
}

function mostra5() {
    var spangeisha =  document.getElementById("spangeisha");
    spangeisha.removeAttribute("class");
}

function esconde5() {
    spangeisha.setAttribute("class", "hidden");
}

function mostra6() {
    var spanicatu =  document.getElementById("spanicatu");
    spanicatu.removeAttribute("class");
}

function esconde6() {
    spanicatu.setAttribute("class", "hidden");
}

function mostra7() {
    var spankona =  document.getElementById("spankona");
    spankona.removeAttribute("class");
}

function esconde7() {
    spankona.setAttribute("class", "hidden");
}

function mostra8() {
    var spanmundonovo =  document.getElementById("spanmundonovo");
    spanmundonovo.removeAttribute("class");
}

function esconde8() {
    spanmundonovo.setAttribute("class", "hidden");
}

function mostra9() {
    var spanrobusta =  document.getElementById("spanrobusta");
    spanrobusta.removeAttribute("class");
}

function esconde9() {
    spanrobusta.setAttribute("class", "hidden");
}

function mostra10() {
    var spantopazio =  document.getElementById("spantopazio");
    spantopazio.removeAttribute("class");
}

function esconde10() {
    spantopazio.setAttribute("class", "hidden");
}

function mostra11() {
    var jarro1 =  document.getElementById("jarro1");
    jarro1.removeAttribute("class");
}

function esconde11() {
    jarro1.setAttribute("class", "hidden");
}

function mostra12() {
    var jarro2 =  document.getElementById("jarro2");
    jarro2.removeAttribute("class");
}

function esconde12() {
    jarro2.setAttribute("class", "hidden");
}

function mostra13() {
    var jarro3 =  document.getElementById("jarro3");
    jarro3.removeAttribute("class");
}

function esconde13() {
    jarro3.setAttribute("class", "hidden");
}

function mostra14() {
    var jarro4 =  document.getElementById("jarro4");
    jarro4.removeAttribute("class");
}

function esconde14() {
    jarro4.setAttribute("class", "hidden");
}