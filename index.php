<?php include 'templates/header.php'; ?>

<?php
  include 'models/conexion.php';
  $sentencia = $bd->query("SELECT * from postres");
  $postres = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($postres);
?>
<div class="container mt-3">
  <div class="row">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Porciones</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col" colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody class=" table-group-divider">
        <?php foreach($postres as $dato){ ?>
        <tr>
          <th scope="row"><?php echo $dato->id ?></th>
          <td><?php echo $dato->nombre ?></td>
          <td><?php echo $dato->porciones ?></td>
          <td><?php echo $dato->descripcion?></td>
          <td><?php echo "$".$dato->precio ?></td>
          <td>
            <a href="controllers/editar.php?id=<?php echo $dato->id ?>" class="btn btn-warning">Editar</a>
          </td>
          <td>
            <a href="controllers/eliminar.php?id=<?php echo $dato->id ?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>

        <?php } ?>
      </tbody>
    </table>

    <div class="container mb-5">
      <div class="card">
        <div class="card-header">Ingrese un nuevo postre</div>
        <form action="controllers/registro.php" method="POST">
          <div class="mb-2 mx-2">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese nombre" name="inputNombre" required>
          </div>
          <div class="mb-2 mx-2">
            <label class="form-label">Porciones</label>
            <input type="number" class="form-control" placeholder="Ingrese prociones" name="inputPorciones" required>
          </div>
          <div class="mb-2 mx-2">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" placeholder="Ingrese una descripcion" name="inputDescripcion"
              required>
          </div>
          <div class="mb-2 mx-2">
            <label class="form-label">Precio</label>
            <input type="number" class="form-control" placeholder="Ingrese un precio" name="inputPrecio" required>
          </div>
          <div class="mb-2 mx-2">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<?php include "templates/footer.php"; ?>