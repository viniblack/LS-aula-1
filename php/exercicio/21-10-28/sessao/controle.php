<?php

session_start();

if (!isset($_SESSION['id'])) {
  echo "Faça o login1";
  exit();
}
