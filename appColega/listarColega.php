<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

echo '<form method="post" action="apagaColega.php">                       
         <table border="1">
         <tr>
              <th>ID</th><th>Colega</th><th>Ações</th>
         </tr>';     

$stmt = $bd ->query('SELECT id, nome FROM colegas');

while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo " <tr>
    <td>{$registro['id']}</td>
    <td>{$registro['nome']}</td>
    <td><button name='id_para_apagar' value={$registro['id']}'>Editar</button>&nbsp;
    <button name='id_para_editar' value={$registro['id']}'>Apagar</button></td>
    </tr>";


}

echo '</table>
      </form>';
   


