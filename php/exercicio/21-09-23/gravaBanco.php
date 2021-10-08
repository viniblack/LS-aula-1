<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


$name = $_POST['name'];
$date = $_POST['year'];

$db_dsn = 'mysql:localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '123!@#qweQWE';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare(
  'INSERT filmes
  (nome, ano)
  VALUES
  (:nome, :ano)'
);


$value[':nome'] = $name;
$value[':ano'] = $date;

if ($stmt->execute($value)) {
  echo "Dados gravados com sucesso!       <br> <a target='_black' href='pegandoBanco.php'>Consultar filmes</a>";
} else {
  echo "Oh no!! Não consegui gravar no banco :-(";
}

// var_dump($stmt->errorInfo());
