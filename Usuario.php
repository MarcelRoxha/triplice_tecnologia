<?php


class Usuario {

    public function login($email, $senha) {

        try {
            global $pdo;

            $sql = "SELECT * FROM `usuarios` WHERE email= :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch();

                if ($dados['userType'] == "admin") {
                    echo "Bem vindo mestre " . $dados['nome'];
                    $_SESSION['username'] = $dados['nome'];
                    unset($_POST['email']);
                    unset($_POST['senha']);
                } elseif ($dados['userType'] == "user") {
                    echo "Bem vindo otario!";
                    $_SESSION['username'] = $dados['nome'];
                    unset($_POST['email']);
                    unset($_POST['senha']);
                } else {

                    header("Location : index.html");
                    exit();
                }
            }
        } catch (Exception $ex) {
            header("location : index.html");
            exit();
        }
    }

}
