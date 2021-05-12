<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rsenha = $_POST['rsenha'];

    if($senha !== $rsenha) {
        echo ("<script>
        alert('As senhas não conferem!');
        window.location.href='cadastro.php';
        </script>");
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("<script>
        alert('O email inserido não é um email válido!');
        window.location.href='cadastro.php';
        </script>");
    } else {
        //importa o json
        $usr_json = file_get_contents('../data/usuarios.json');
        //transforma o json pra phpobject
        $usrs = json_decode($usr_json, true);
        //retorna a quantidade de usuários no array
        $index = count($usrs);
        //cria um array com os dados do novo usuario para adicionar ao array com todos os usuarios do arquivo
        $n_usr = $array = [
            "nome" => $nome,
            "email" => $email,
            "senha" => $senha, 
            "carrinho" => []
        ];
        //adiciona o usuário no próximo index do array de usuários
        $usrs[$index] = $n_usr;
        //transforma o array php para json
        $usrs = json_encode($usrs);
        //sobreescreve os novos dados no arquivo
        file_put_contents("../data/usuarios.json", $usrs);

        echo("<script>
            alert('Você foi cadastrado com sucesso! Faça login e aproveite!');
            window.location.href='login.php';
            </script>");
    }
?>