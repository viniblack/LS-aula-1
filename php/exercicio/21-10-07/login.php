<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$email = $_POST['email'];
$passWord = $_POST['password'];

$db_dsn = 'mysql:localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '123!@#qweQWE';

$db = new PDO($db_dsn, $db_user, $db_pass);


// COMO EU FIZ


// $sql = 'SELECT 
//           nome, email, senha
//         FROM
//           usuario;
//         ';

// // escreve na tela o resultado da consulta
// foreach ($db->query($sql) as $row) {

//   if (password_verify($passWord, $row['senha']) && password_verify($email, $row['email'])) {

//     echo "Olá " . $row['nome'];
//     echo "<br>";
//     echo "<br>";
//     echo "Seu email: " . $row['email'];
//     echo "<br>";
//     echo "Senha secreta: " . $row['senha'];
//   } else {
//     echo "senha incorreta ou email errado";
//   }

//   // echo $row['nome'];
//   // echo $row['email'];
//   // echo  $row['senha'];
// }


// COMO O PROFESSOR FEZ

$stmt = $db->prepare('SELECT id, nome, email, senha FROM usuario WHERE email = :email');

$stmt->execute([':email' => $_POST['email']]);

$registro = $stmt->fetch(PDO::FETCH_ASSOC);


if ($registro) {
  if (password_verify($passWord, $registro['senha'])) {
    
    $_SESSION['nome'] = $registro['nome'];
    $_SESSION['id'] = $registro['id'];
    
    echo "Olá " . $registro['nome'];
    echo "<br>";
    echo "<br>";
    echo "Seu email: " . $registro['email'];
    echo "<br>";
    echo "Senha secreta: " . $registro['senha'];
  } else {
    session_destroy();
    echo "Credenciais inválidas";
    echo "<a href='login.html'> Login </a>";

  }
}else{
  session_destroy();
  echo "Faça o login antes";
  echo "<a href='login.html'> Login </a>";
}
