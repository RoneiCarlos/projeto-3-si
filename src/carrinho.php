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

    <?php require('header_in_sys.php'); ?>

    <section>

        <div class="mu">
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
                                <div class="nome">
                                    <span>'.$ob_cafes[$i]->nome.'</span>
                                </div>
                                
                                <div class="qp">
                                    <div class="quantidade">
                                        <span>Quantidade</span>
                                        <p>'.$ob_cafes[$i]->peso.' g</p>
                                    </div>

                                    <div class="preco">
                                        <span>Preço</span>
                                        <p>R$'.$ob_cafes[$i]->preco.',00</p>
                                    </div>
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