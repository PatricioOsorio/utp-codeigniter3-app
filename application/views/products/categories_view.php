<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Numero</th>
        <th>Categoria</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($categories != false) {
        $counter = 0;
        foreach ($categories->result() as $categorie) {
      ?>
          <script>
            console.log(<?php $categorie ?>)
          </script>
          <tr>
            <td><?= ++$counter ?></td>
            <td><?= $categorie->nombre ?></td>
            <td><?= $categorie->activo ?></td>
          </tr>
      <?php
        }
      }
      ?>

    </tbody>
  </table>
</body>

</html>