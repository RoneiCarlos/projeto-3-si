<?php

    //recebe o id do café via ajax
    $id_cafe = $_POST['id_cafe'];

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

    //tamanho do carrinho do usuario logado
    $index = count($carrinho);

    //adiciona o ítem no carrinho
    $carrinho[$index] = intval($id_cafe);

    
    
    //atualiza o carrinho do usuario logado com os valores inseridos
    $usrs[$on]->carrinho = $carrinho;

    //transforma o obj php manipulado para json
    $usrs = json_encode($usrs);
    
    //reescreve o arquivo com os itens do carrinho do usuario atual logado atualizados
    file_put_contents("../data/usuarios.json", $usrs);
?>