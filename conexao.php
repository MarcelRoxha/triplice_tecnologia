<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "projeto_triplice";
$port = 3306;
global $pdo;

try{
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
echo "Conexão não efetuada " . $ex;
}


