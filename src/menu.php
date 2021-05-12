<header class="header">
    <a class="sg">Sanctus Grano</a>
    <nav>
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="carrinho.php">Carrinho</a></li>
        </ul>
    </nav>
    <span class="menu" style="margin-left: 10%; font-size: 1rem;">
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
        echo($usrs[$on]->nome);
    ?>
    </span>
    <div style="margin-left: 1rem;">|</div>
    <a href="login.php" style="margin-left: 1rem;">Sair</a>
</header>
