<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css" media="all">
    <link rel="icon" href="../img/icon.png">
    <title>Cadastro - Sanctus Grano</title>
</head>
<body>
    <div class="vh100">
        <div class="container-img">
            <img class="img" src="../img/eric-parks-TsNwtbCih0M-unsplash.jpg">
        </div>
        <div class="conteudo">
            <div class="container">
                <nav class="menu">
                    <ul class="menu">
                        <li class="spacin"><a href="cafes.php">Produtos</a></li>
                        <li class="spacin"><a href="sobre.html">Sobre</a></li>
                    </ul>
                    <ul>
                        <li class="baixacess"><a href="index.html">Home</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-form">
        <div>
            <form method="POST" action="cadastrar.php">
                <input name="nome" value="" placeholder="Nome Completo" class="campo" type="text" required="required"><br><br><br>
                <input name="email" value="" placeholder="Email" class="campo" type="text" required="required"><br><br><br>
                <input name="senha" value="" placeholder="Senha" class="campo" type="password" required="required"><br><br><br>
                <input name="rsenha" value="" placeholder="Repita sua senha" class="campo" type="password" required="required"><br><br><br><br>
                <input class="btn_cc" type="button" onclick="redirectLogin();" value="Fazer login">
                <input class="btn_submit" type="submit" value="Criar conta">
            </form>
        </div>
    </div>

    <script>
        function redirectLogin(){
            window.location.href = "login.php";
        };
    </script>
</body>
</html>