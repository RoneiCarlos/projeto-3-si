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
        </div>

        <div class="container2">

            <div class="conteudo">
                <div class="container">
                    <nav class="menu">
                        <ul class="submenu">
                            <li class="spacin"><a href="sobre.html">Sobre</a></li>
                        </ul>
                        <ul>
                            <li class="baixacess"><a href="index.html">Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        <div class="bg-form">
            <div id="area">
                <form id="formulario" method="POST" action="logar.php" autocomplete="on">
                    <input required="required" name="email" id="email" placeholder="E-mail" class="campo" type="text">
                    <input required="required" name="senha" id="senha" placeholder="Senha" class="campo" type="password">

                    <div class="buttonf">
                        <input class="btn_cc" type="button" onclick="gocad();" value="Criar conta">
                        <input class="btn_submit" type="submit" value="Acessar">
                    </div>

                    
                </form>
            </div>
        </div>
    
    <script>
        function gocad() {
            window.location.href = "cadastro.php";
        }
    </script>
</body>
</html>