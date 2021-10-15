<form method="post" action="apagaColega.php">
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Colega</th>
      <th>Ações</th>
    </tr>
    
    <?php
    foreach ($registros as $registro) {
      echo "
        <tr>
          <td>{$registro['idcolegas']}</td>
          <td>{$registro['nome']}</td>
          <td><button name='id_para_apagar' value={$registro['idcolegas']}'>Editar</button>&nbsp;
          <button name='id_para_editar' value={$registro['idcolegas']}'>Apagar</button></td>
        </tr>
      ";
    }
    ?>
  </table>
</form>