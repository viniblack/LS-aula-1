<?php

$_POST["email"] = $_POST["email"] ?? "Não informado";

// isset() verifica se foi setado o paramentro entre parenteses
$_POST["password"] = isset($_POST["password"]) ? $_POST["password"] : "Não informado";


echo "Seu email é {$_POST["email"]} e sua senha é {$_POST["password"]}";

// phpinfo() informa as informações sobre o php
phpinfo();