<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Contato - Sanctus Grano</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" puqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="cafes.css" rel="stylesheet" media="all" />
    <link rel="icon" href="../img/icon.png">
    <title>Cafes</title>
</head>
<body>

    <?php require('menu.php'); ?>

    <section class="box">

        <?php 
        
            //importa o json
            $cfs_json = file_get_contents('../data/cafes.json');
            //transforma o json pra phpobject
            $cfs = json_decode($cfs_json);
            
            //itera sobre todos os cafés e insere o elemento na tela de acordo com a iteração
            foreach ($cfs as $k => $c) {
                echo(
                    '<div class="boximg">
                        <h1>'.$c->nome.'</h1>
                        <img src="../img/refil.png" class="imgh">

                        <div class="overlay">
                            
                            <div class="overcontent">
                                <h3>Preço: R$'.$c->preco.'/KG</h3>
                                <p>
                                    '.$c->descricao.'
                                </p>
                                <button class="button login">Faça login para comprar</button>
                            </div>
                        </div>                  
                    </div>'
                );
            }
        
        ?>               
                
    </section>

    <script src="script.js"></script>
</body>
</html>