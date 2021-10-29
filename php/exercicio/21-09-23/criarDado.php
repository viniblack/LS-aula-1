<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filme e serie que gostamos</title>
</head>
<body>
<form method="POST" action="gravaBanco.php">
    <label for="name">Nome da sua serie/filme</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="year">Ano que foi lançada</label>
    <input type="text" name="year" id="year">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>