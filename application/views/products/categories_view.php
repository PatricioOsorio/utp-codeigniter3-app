<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
</head>

<body>
  <table border="1">
    <thead>
      <tr>
        <th>Id</th>
        <th>Categoria</th>
        <th>Status</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($categories != false) {
        $counter = 0;
        foreach ($categories->result() as $categorie) {
      ?>
          <tr>
            <td><?= $categorie->id_categoria ?></td>
            <td><?= $categorie->nombre ?></td>
            <td><?= $categorie->activo == 1 ? 'Activo' : 'Inactivo' ?></td>
            <td>
              <a href="<?= base_url('index.php/update_category/' . $categorie->id_categoria)  ?>">Actualizar</a>
              <a href="<?= base_url('index.php/delete_category/' . $categorie->id_categoria)  ?>">Eliminar</a>
            </td>
          </tr>
      <?php
        }
      }
      ?>

    </tbody>
  </table>
</body>

</html>