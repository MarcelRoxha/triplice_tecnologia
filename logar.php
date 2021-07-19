<?php

session_start();

if (!empty($_POST['email']) && !empty($_POST['senha'])) {


    require './conexao.php';
    require './Usuario.php';

    $usuario = new Usuario();

    /** @var type $_POST */
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $usuario->login($email, $senha);
} else {
    header("location: index.php");
    $_SESSION['msgErro'] = "Informações não inseridas!";
}

