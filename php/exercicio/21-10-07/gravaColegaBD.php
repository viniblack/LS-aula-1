<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';

$nome = $_POST['nome'] ?? false;

if ($nome) {

    $db_dsn = 'mysql:localhost;port=3306;dbname=ling_serv';
    $db_user = 'root';
    $db_pass = '123!@#qweQWE';

    $db = new PDO($db_dsn, $db_user, $db_pass);

    $stmt = $db->prepare('INSERT INTO colegas (nome) VALUES (:nome)');

    if ($stmt->execute([':nome' => $nome])) {
        echo "$nome gravado com sucesso!";
    } else {
        echo "Erro ao tentar gravar $nome!";
    }
} else {

    echo 'O campo nome é obrigatório';
}

echo '<pre>';
var_dump($stmt->errorInfo());
