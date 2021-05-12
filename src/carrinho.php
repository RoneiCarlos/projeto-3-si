<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Carrinho - Sanctus Grano</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" puqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="icon" href="../img/icon.png">
    <link href="carrinho.css" rel="stylesheet" media="all" />
    <title>Detalhes dos itens</title>
</head>
<body>
    <section>
        <div class="container">   
            <header class="header">
                <a class="sg">Sanctus Grano</a>
                <nav>
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cafes.php">Cafes</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                        <li><a href="carrinho.php">Carrinho</a></li>
                    </ul>
                </nav>
            </header>  

            <div class="content">

                    <div class="user">
                        <i class="fas fa-user" style="font-size:100px; color:#ddcdbf;"></i>
                        <h3><?php

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
                        </h3>
                        <button class="button1" onclick="window.location.href='login.php'">Sair</button>
                    </div>

                    <div class="carrinho">


                        <?php
                            $cfs_json = file_get_contents('../data/cafes.json');
                            $ob_cafes = json_decode($cfs_json);
                            $usrs_json = file_get_contents('../data/usuarios.json');
                            $ob_usuarios = json_decode($usrs_json);
                            $on_js = file_get_contents('../data/usuariologado.json');
                            $ob_ul = json_decode($on_js);

                            $on = $logado->usuario;

                            $ob_carrinho = $ob_usuarios[$on]->carrinho;


                            $v_total = 0;

                            foreach($ob_carrinho as $key => $i) {
                                echo('
                                    <div class="produto">
                                        <div>
                                            <h1>'.$ob_cafes[$i]->nome.'</h1>
                                        </div>
                                        
                                        <div>
                                            <p>Quantidade</p>
                                            <p>'.$ob_cafes[$i]->peso.' g</p>
                                        </div>

                                        <div>
                                            <p>Preço</p>
                                            <p>R$'.$ob_cafes[$i]->preco.',00</p>
                                        </div>

                                        <div class="lixo">
                                            <button style="background: transparent; border: none;" onclick="remove('.$key.');"><i class="fas fa-trash" style="font-size:40px; color:#ddcdbf;"></i></button>
                                        </div>
            
                                    </div>
                                ');
                                $v_total += $ob_cafes[$i]->preco;
                            }
                        
                        ?>
                        

                        <div class="add">
                            <button class="button2" onclick="window.location.href='cafes.php'">Adicionar mais itens</button>
                        </div>

                        <div class="total">
                            <p>Valor total da compra R$<?php echo($v_total); ?>,00</p>
                        </div>

                        <div class="finalizar"><button class="button2" onclick="window.location.href='pagamento.html'">Finalizar compra</button></div>
                    </div>
            </div>
        </div>

    </section>

    <script>
        function remove(key) {
            
            // ajax passando o indice do café no carrinho do usuário para ser removido
            $.post('removeCart.php', {
                key: key
            }, function(response){
                // recarrega a página para carregar novamente o array de cafés do carrinho
                location.reload(true);
            }
            );
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>