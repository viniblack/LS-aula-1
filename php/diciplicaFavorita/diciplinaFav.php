<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diciplina do &lt3 </title>
</head>

<body>
  <form action="recebeDisciplinaFavBD.php" method="POST">
    <label for="diciplina">Nome da diciplina</label>
    <input type="text" name="diciplina" id="diciplina">
    <br>
    <label for="professor">Nome do professor</label>
    <input type="text" name="professor" id="professor" >
    <br>

    <label for="data">Dia da aula</label>
    <input type="date" name="data" id="data">
    <br>

    <label for="descricao">Descrição</label>
    <br>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="Enviar">

  </form>
</body>

</html>