<?php
session_start();
include_once './conexao.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_SESSION['msgErro'])) {
    $msg = $_SESSION['msgErro'];
    echo $msg;
}
unset($_SESSION['msgErro']);
?>


<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./imagens/icon_logo_v1.png">
        <link rel="stylesheet" href="./stililo.css">
        <title>Triplice Tecnologia</title>
    </head>
    <body id="sigin"> 
        <!<!------------------------------- lado esquerdo da tela com a imagem do logo-------------------------------------- -->


        <div style="float:left">
            <div id="tela_login_lado_esquerdo"> 
                <img src="./imagens/logo_padrao_oficial.png" width="666"/>
            </div>
        </div>

        <!<!------------------------------- lado direito para inserir as informações e efetuar o login -------------------------------------- -->
        <div style="float: right">
            <div id="tela_login_lado_direito">
                <img id="imagem_texto_entrar_sigin" src="./imagens/texto_entrar_tela_login.png" width="250"/>

                <form method="POST" action="logar.php" >

                    <input name="email" id="email" type="email" placeholder="E-mail" maxlength="30">
                    <input name="senha" id="senha" type="password" placeholder="Senha" maxlength="30">
                    <div>
                        <input name="botao" id="botaologar" type="submit" value="Logar">
                    </div>
                </form>
            </div>  
        </div>


    </body>
</html>
