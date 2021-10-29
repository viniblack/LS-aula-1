<?php

// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);
$dia = $_POST['data'];

$_POST["diciplina"] = $_POST["diciplina"] ?? 'Não informado';
$_POST["professor"] = $_POST["professor"] ?? 'Não informado';
$_POST["data"] = $_POST["data"] ?? 'Não informado';
$_POST["descricao"] = $_POST["descricao"] ?? 'Não informado';
$_POST["SERVER_ADDR"] = $_POST["SERVER_ADDR"] ?? 'Não informado';

if (!$_POST["diciplina"] || empty($_POST["data"])) {
  die("Favor digitar seu nome");
}


echo "A sua materia favorita é {$_POST["diciplina"]}. <br> 
Quem da essa aula é {$_POST["professor"]}. <br> 
A próxima aula é {$_POST["data"]}. <br> 
As coisas que você mais gosta da aula são {$_POST["descricao"]}, <br>
Seu ip é {$_SERVER["SERVER_ADDR"]}.
";



if (empty($nome) or !strstr($nome, '')) {
  echo "Favor digitar seu nome";
}

$dia = $_POST['data'];

$dia = substr($dia, 8, 2) . '/' . substr($dia, 5, 2) . '/' . substr($dia, 0, 4);

// Abre arquivo para gravar mais coisas nele
$arquivo = fopen('bancoDeDados.csv', 'a');

// Escreve no arquivo
fwrite($arquivo, "{$_POST['diciplina']},{$_POST['professor']},{$dia},{$_POST['descricao']},{$_SERVER['SERVER_ADDR']}\r\n");

// Fecha o arquivo
fclose($arquivo);

echo "<br><br>{$_POST['diciplina']} gravada com sucesso!";

phpinfo();
