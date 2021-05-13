<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cafés - Sanctus Grano</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" puqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="cafes.css" rel="stylesheet" media="all" />
    <link rel="icon" href="../img/icon.png">
    <title>Cafes</title>
</head>
<body>
    <?php require('header_in_sys.php'); ?>
    <section class="box">
        <?php
            //importa o json de cafes
            $cfs_json = file_get_contents('../data/cafes.json');
            //transforma o json pra phpobject
            $cfs = json_decode($cfs_json);

            //importa o json de usuarios
            $usrs_json = file_get_contents('../data/usuarios.json');

            //itera sobre todos os cafés e insere o elemento na tela de acordo com a iteração
            foreach ($cfs as $k => $c) {
                echo('<div class="boximg">
                        <img src="../img/refil.png" class="imgh">
                        <br>
                        <div class="overlay">
                            
                            <div class="overcontent">
                                <h3>Preço: R$'.$c->preco.',00</h3>
                                <p>
                                    '.$c->descricao.'
                                </p>
                                <button type="button" class="button" onclick="addCart('.$k.')">Adicionar ao carrinho</button>
                            </div>
                        </div>                  
                        <h1>'.$c->nome.' - '.$c->peso.'g</h1>

                    </div><br>');
            }
        ?>
    </section>

    <button class="button" onclick="goCart();">Finalizar compras</button>
    <?php require('footer_in_sys.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="cafes.js"></script>
</body>
</html>