<?php include 'templates/header.php'; ?>

<?php
  include 'models/conexion.php';
  $sentencia = $bd->query("SELECT * from libros");
  $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($postres);
?>
<div class="container mt-3">
  <div class="row">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titulo</th>
          <th scope="col">Autor</th>
          <th scope="col">Editorial</th>
          <th scope="col">Categoria</th>
          <th scope="col" colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody class=" table-group-divider">
        <?php foreach($libros as $dato){ ?>
        <tr>
          <th scope="row"><?php echo $dato->id ?></th>
          <td><?php echo $dato->titulo ?></td>
          <td><?php echo $dato->autor ?></td>
          <td><?php echo $dato->editorial ?></td>
          <td><?php echo $dato->categoria ?></td>
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
        <div class="card-header">Ingrese un nuevo libro</div>
        <form action="controllers/registro.php" method="POST">
          <div class="mb-2 mx-2">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" placeholder="Ingrese titulo" name="inputTitulo" required>
          </div>
          <div class="mb-2 mx-2">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control" placeholder="Ingrese autor" name="inputAutor" required>
          </div>
          <div class="mb-2 mx-2">
            <label class="form-label">Editorial</label>
            <input type="text" class="form-control" placeholder="Ingrese una editorial" name="inputEditorial" required>
          </div>
          <div class="mb-2 mx-2">
            <label class="form-label">Categoria</label>
            <input type="text" class="form-control" placeholder="Ingrese un categoria" name="inputCategoria" required>
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