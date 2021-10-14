<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['id'])) {
    echo "Faça o login";
    exit();
}

$db_dsn = 'mysql:localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '123!@#qweQWE';


$db = new PDO($db_dsn, $db_user, $db_pass);

echo '<form method="post" action="apagaColega.php">                       
         <table border="1">
         <tr>
              <th>ID</th><th>Colega</th><th>Ações</th>
         </tr>';

$stmt = $db->query('SELECT idcolegas, nome FROM colegas');

while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo " <tr>
    <td>{$registro['idcolegas']}</td>
    <td>{$registro['nome']}</td>
    <td><button name='id_para_apagar' value={$registro['idcolegas']}'>Editar</button>&nbsp;
    <button name='id_para_editar' value={$registro['idcolegas']}'>Apagar</button></td>
    </tr>";
}

echo '</table>
      </form>';
