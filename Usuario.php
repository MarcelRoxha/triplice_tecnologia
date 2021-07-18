<?php

class Usuario {

    public function login($email, $senha) {
        global $pdo;

        $sql = "SELECT * FROM `usuarios` WHERE email= :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();

            echo "Bem vindo mestre " . $dados['nome'];
        }
    }

}
