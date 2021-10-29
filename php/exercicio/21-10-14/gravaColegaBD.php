<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';

$nome = $_POST['nome'] ?? false;

if ($nome) {

    require_once('banco/conecta.php');

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
