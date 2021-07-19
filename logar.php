<?php

session_start();
//Verificando se foi digitado e-mail e senha,
//caso nao tenha sido digitado nada, a página será redirecionada para o inicio
if (!empty($_POST['email']) && !empty($_POST['senha'])) {

//Estabelecendo conexão com as classes, Conexão e Usuario, para efetuar login
    
    require './conexao.php';
    require './Usuario.php';
    
//Criando um novo objeto do tipo usuário
    $usuario = new Usuario();

    /** @var type $_POST */
    
 //Por questão de segurança, verificando novamente se realmente algo foi digitado
   
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    //Caso esteja tudo certo, o novo objeto criado do tipo Usuario,chamará o methodo login
    //da classe Usuario;
    $usuario->login($email, $senha);
} else {
    header("location: index.php");
    $_SESSION['msgErro'] = "Informações não inseridas!";
}

