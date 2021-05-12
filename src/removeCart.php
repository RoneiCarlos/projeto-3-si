<?php
    //recebe index do item do café no array do carrinho do usuário via ajax
    $key = $_POST['key'];

    //importa o json de usuários
    $usr_json = file_get_contents('../data/usuarios.json');
    //transforma o json pra obj php
    $usrs = json_decode($usr_json);

    //importar json do usuário logado no momento
    $usr_logado_json = file_get_contents('../data/usuariologado.json');
    //transforma o json pra obj php
    $logado = json_decode($usr_logado_json);

    //pegar o id do usuario logado no momento
    $on = $logado->usuario;
    
    //array do carrinho do usuario logado no momento
    $carrinho = $usrs[$on]->carrinho;
    
    //remove o ítem do carrinho na posição selecionada lá no front
    unset($carrinho[$key]);
    
    //atualiza o carrinho do usuário e reindexa os valores
    $usrs[$on]->carrinho = array_values($carrinho);

    //transforma o obj php manipulado para json
    $usrs = json_encode($usrs);

    //reescreve o arquivo com os itens do carrinho do usuario atual logado atualizados
    file_put_contents("../data/usuarios.json", $usrs);
?>