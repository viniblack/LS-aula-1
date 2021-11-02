<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST" action="update.php" enctype="multipart/form-data">
    <label for="nome">Nome do Colega</label><br>
    <input type="text" id="nome" name="nome" required> <br> <br>
    <label for="">Esolha seu arquivo</label><br>
    <input type="file" name="arquivoDoUsuario" id="arquivo">
    <br><br>
    <input type="submit" value="Enviar Arquivo">
  </form>
</body>

</html>