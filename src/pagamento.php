<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Pagamento - Sanctus Grano</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="pagamento.css" rel="stylesheet" media="all" />
    <link rel="icon" href="../img/icon.png">
    <title>Detalhes dos itens</title>
</head>
<body>
    <?php 
    require('header_in_sys.php');
    
    //importar json do usuário logado no momento
    $usr_logado_json = file_get_contents('../data/usuariologado.json');
    //transforma o json pra obj php
    $logado = json_decode($usr_logado_json);

    //pegar o id do usuario logado no momento
    $on = $logado->usuario;

    ?>
    <div class="mu">
        <div class="pagamento">
            <div class="text">
                <p>
                    Agradecemos a preferência! Faça o pagamento via pix no app do seu banco.<br> 
                    Após a confirmação do pagamento seu pedido começará a ser preparado.
                </p>
            </div>

            <div class="pix">
                <img src="../img/pix.png" alt="imagem de um qr code">
            </div>

            <button class="voltar" onclick="clearCart(<?php echo($on); ?>);">Voltar</button>
            
        </div>
    </div>
    <?php require('footer_in_sys.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function clearCart (on) {
            $.post('clearCart.php', {
                on: on
            }, function(response){
                alert('Obrigado por comprar com a gente!');
                window.location.href = "cafes.php";
            });
        }
    </script>
</body>
</html>