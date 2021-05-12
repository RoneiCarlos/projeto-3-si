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
    $r_k = '';

    //itera sobre os usuários e armazena quando ambas forem compatíveis
    foreach ($usrs as $key => $u) {
        if ($senha == $u->senha && $email == $u->email) {
            $r_email = $u->email;
            $r_senha = $u->senha;
            $r_nome = $u->nome;
            $r_k = $key;
            break;
        }
    }
    //se ambas forem compatíveis entra no sistema, caso contrário, não
    if ($r_senha == $senha && $r_email == $email) {
        //importa o json para gravar o usuario logado no momento
        $usr_log_json = file_get_contents('../data/usuariologado.json');
        //transforma o json pra phpobject
        $usr = json_decode($usr_log_json,true);

        //cria um obj php com o indice do usuario atualmente logado
        $logado = $array = [
            "usuario" => $r_k
        ];

        //transforma o array php para json
        $logado = json_encode($logado);
        //sobreescreve os novos dados no arquivo
        file_put_contents("../data/usuariologado.json", $logado);
        
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