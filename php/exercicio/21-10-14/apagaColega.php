<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('banco/conecta.php');

session_start();

require_once('sessao/controle.php');


$stmt = $db->prepare('DELETE FROM colegas WHERE id = :id');

$stmt->execute([':id' => $_POST['apagar']]);
