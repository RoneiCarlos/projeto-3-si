<?php 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //importa o json
    $usr_json = file_get_contents('../data/usuarios.json');
    //transforma o json pra phpobject
    $usrs = json_decode($usr_json);

    $r_senha = '';
    $r_email = '';
    $r_nome = '';

    //itera sobre os usuários e armazena quando ambas forem compatíveis
    foreach ($usrs as $u) {
        if ($senha == $u->senha && $email == $u->email) {
            $r_email = $u->email;
            $r_senha = $u->senha;
            $r_nome = $u->nome;
            break;
        }
    }
    //se ambas forem compatíveis entra no sistema, caso contrário, não
    if ($r_senha == $senha && $r_email == $email) {
        echo ("
            <script>
                alert('Bem vindo ".$r_nome."');
                window.location.href='cafes.php';
            </script>
        ");
    } else {
        echo ("
            <script>
                alert('Email ou senha inválidos ou não cadastrados!');
                window.location.href='login.php';
            </script>
        ");
    }
?>