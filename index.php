<?php
    include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        
        <div class="login">

            <h1>login</h1>

            <form action="script.php" method="post">

                <?php
                    $mensagemDeErro = obterMensagemErro();
                    if(!empty($mensagemDeErro))
                    {
                        echo '<p style="color:#ED145B;font-size:13px;"> ERRO: ',$mensagemDeErro;
                    }
                ?>

                <p>Usuário</p>
                <input type="text" name="usuario" placeholder="Insira seu nome de usuário">
                <p>Senha</p>
                <input type="password" name="senha" placeholder="Insira sua senha">
                <input type="submit" value="Login" class="enviar"/>
                <a>Esqueceu sua senha?</a><br>
                <a>Ainda não possui conta?</a>

            </form>
        </div>

        
    </body>

</html>