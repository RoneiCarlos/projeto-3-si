<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" media="all">
    <link rel="icon" href="../img/icon.png">
    <title>Login - Sanctus Grano</title>
</head>
<body>
    <div class="vh100">
        <div class="container-img">
            <img class="img" src="../img/lona-w2bzqWfcaeU-unsplash.jpg" alt="">
        </div>
        <div class="conteudo">
            <div class="container">
                <nav class="menu">
                    <ul class="menu">
                        <li class="spacin">Produtos</li>
                        <li class="spacin">Sobre</li>
                    </ul>
                    <ul>
                        <li class="baixacess">Home</li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="bg-form">
            <div id="area">
                <form id="formulario" method="POST" action="logar.php" autocomplete="on">
                    <input required="required" name="email" id="email" placeholder="E-mail" class="campo" type="text"><br><br><br>
                    <input required="required" name="senha" id="senha" placeholder="Senha" class="campo" type="password"><br>
                    <br><br><br><br>
                    <input class="btn_cc" type="button" value="Criar conta">
                    <input class="btn_submit" type="submit" value="Acessar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>