<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$db_dsn = 'mysql:localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '123!@#qweQWE';

$db = new PDO($db_dsn, $db_user, $db_pass);

$sql = 'SELECT 
          nome, ano
        FROM
          filmes;
';

echo "<table border='1' style='width:25%'>
  <tr> 
    <th>Nome</th><th>Filme</th>
  </tr> 
";
foreach ($db->query($sql) as $row) {
  echo "<tr>";

  echo "<td style='text-align:center' >";
  echo $row['nome'];
  echo "</td>";

  echo "<td style='text-align:center'>";
  echo $row['ano'];
  echo "</td>";

  echo "</tr>";
}

echo "</table>";
