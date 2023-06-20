<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="insertNewCategorie" method="post">
    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria">

    <label for="status">status</label>
    <input type="number" name="status" id="status" min="0" max="1">

    <button type="submit">Enviar</button>
  </form>
</body>

</html>