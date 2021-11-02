<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_POST['nome'] ?? false;
$image = $_FILES['arquivoDoUsuario']['tmp_name'] ?? false;


if ($image && $nome) {
  require_once('banco/conecta.php');


  $tipo = mime_content_type($_FILES['arquivoDoUsuario']['tmp_name']);

  switch ($tipo) {
    case 'image/jpeg':
      $ext = '.jpg';
      break;

    case 'image/png':
      $ext = '.png';
      break;

    case 'image/gif':
      $ext = '.gif';
      break;

    default:
      echo "Tipo de arquivo não aceito!";
      die();
  }

  $nameRandom = rand(1, 99999999);
  
  move_uploaded_file(
    $image,
    __DIR__ . "/arquivos/" . $nameRandom . 'user.file' . $ext
  );

  $path = __DIR__ . "/arquivos/" . $nameRandom . 'user.file' . $ext;

  $stmt = $db->prepare('INSERT INTO  colegas (nome,  image) VALUES (:nome, :image)');

  if ($stmt->execute([':nome' => $nome, ':image' => $path])) {
    echo "$nome e $path gravado com sucesso!";
  } else {
    echo "Erro ao tentar gravar $nome e $path!"; 
    die();
  }
}

// header("location:./listarColega.php");
