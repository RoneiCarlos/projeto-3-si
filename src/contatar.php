<?php

$nome = $_POST['nome_c'];
$email = $_POST['email_c'];
$mensagem = $_POST['mensagem_c'];

if($nome && $email && $mensagem) {
    echo("<script>
            alert('Retornaremos o contato em breve!');
            window.location.href = 'sobre.html#formulario';
        </script>
    ");
    
}

?>