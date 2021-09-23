<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$dia = $_POST['data'];

$_POST["diciplina"] = $_POST["diciplina"] ?? 'Não informado';
$_POST["professor"] = $_POST["professor"] ?? 'Não informado';
$_POST["data"] = $_POST["data"] ?? 'Não informado';
$_POST["descricao"] = $_POST["descricao"] ?? 'Não informado';

if (!$_POST["diciplina"] || empty($_POST["data"])) {
  die("Favor digitar seu nome");
}

echo "A sua materia favorita é {$_POST["diciplina"]}. <br> 
Quem da essa aula é {$_POST["professor"]}. <br> 
A próxima aula é {$_POST["data"]}. <br> 
As coisas que você mais gosta da aula são {$_POST["descricao"]}, <br>
Seu ip é {$_SERVER["SERVER_ADDR"]}.
";

$value = $_POST;

// Conectando com o banco de dados

$bd_dsn = 'mysql:host=127.0.0.1;port=3306;bdname=ling_serv';
$bd_user = 'root';
$bd_pass = '123!@#qweQWE';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$stmt = $bd->prepare(
  // Adicionei o nome do BD na frente da tabela e funcionou
  'INSERT ling_serv.disciplina 
    (nome, professor, dia, descricao, end_ip) 
  VALUES
   (:nome, :professor, :dia, :descricao, :end_ip)'
);

$valor[':nome'] = $_POST["diciplina"];
$valor[':professor'] = $_POST["professor"];
$valor[':dia'] = $_POST['data'];
$valor[':descricao'] = $_POST["descricao"];
$valor[':end_ip'] = $_SERVER["SERVER_ADDR"];

if ($stmt->execute($valor)) {
  echo "<br><br>Dados gravados com sucesso!";
} else {
  echo "<br><br>Oh no!! Não consegui gravar no banco :-(";
}