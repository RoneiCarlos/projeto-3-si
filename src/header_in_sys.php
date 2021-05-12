<head>
    <style>
        @font-face {
            font-family: Merienda;
            src: url(../fonts/Merienda.ttf);
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .template {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .bar {
            position: fixed;
            height: 5rem;
            width: 100%;
            background-color: #161412;
            display: flex;
            align-items: center;
            z-index: 10;
        }
        .bg-sg {
            width: 20em;
            background: #161412;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .sg {
            font-family: Merienda;
            font-size: 2.3rem;
            text-decoration: none;
            color: #c28d4b;
        }
        .menu {
            display: flex;
            justify-content: center;
            margin-left: .8rem;
        }
        .menu ul {
            list-style: none;
        }
        .menu li {
            margin-left: 1rem;
        }
        .menu li a {
            text-decoration: none;
            color: #ddcdbf;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1.5rem;
            padding: 1.30rem 2rem;
        }
        .menu li a:hover {
            color: #c28d4b;
            border-bottom: 3px solid #c28d4b;
        }
        .sd {
            display: flex;
        }
        .side {
            position: fixed;
            margin-top: 5rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 20rem;
            background: #161412;
            min-height: calc(35rem - 5rem);
            color: #ddcdbf;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
        .icon {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .icon i {
            font-size: 3.5rem;
            margin-top: 2rem;
        }
        .icon span{
            margin-top: 1rem;
            font-size: 1.25rem;
        }
        .sair {
            margin-bottom: 1.5rem;

        }
        .sair a {
            text-decoration: none;
            color: #c28d4b;
            font-size: 1.2rem;
        }
        .content {
            margin-left: 20rem;
            margin-top: 5rem;
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<?php
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

    //mostra o nome do usuario atual logado
    $nome = $usrs[$on]->nome;
?>
<div class="template">
    <div class="bar">
        <div class="bg-sg">
            <a href="index.html" class="sg">Sanctus Grano</a>
        </div>
        <div class="menu">
            <ul class="menu">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="sobre.html">Sobre</a>
                </li>
                <li>
                    <a href="carrinho.php">Carrinho</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sd">
        <div class="side">
            <div class="icon">
                <i class="fas fa-user-alt"></i>
                <span><?=$nome?></span>
            </div>
            <span class="sair"><a href="login.php">Sair</a></span>
        </div>
        <div class="content">

        
