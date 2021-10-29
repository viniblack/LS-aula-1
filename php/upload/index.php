<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_FILES) {
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
  move_uploaded_file(
    $_FILES['arquivoDoUsuario']['tmp_name'],
    __DIR__ . "/recebidos/" . rand(1, 99999999) . 'user.file' . $ext
  );
  echo "Arquivo {$_FILES['arquivoDoUsuario']['name']} recebido com sucesso!";
}


include "./formUpload.php";
