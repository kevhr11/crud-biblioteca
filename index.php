<?php include 'templates/header.php'; ?>

<?php
  include 'models/conexion.php';
  $sentencia = $bd->query("SELECT * from libros");
  $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($libros);
?>
<main class="flex-grow-1">
  <div class="container mt-5">
    <div class="row">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">
              <a href="controllers/registro.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar">
                <i class="bi-plus-square-fill" style="font-size: 2rem;"></i>
              </a>
            </th>
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
            <th scope="row"></th>
            <th scope="row"><?php echo $dato->id ?></th>
            <td><?php echo $dato->titulo ?></td>
            <td><?php echo $dato->autor ?></td>
            <td><?php echo $dato->editorial ?></td>
            <td><?php echo $dato->categoria ?></td>
            <td>
              <a href="controllers/editar.php?id=<?php echo $dato->id ?>" class="btn btn-warning"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                <i class="bi bi-pencil-fill"></i></a>
            </td>
            <td>
              <a href="controllers/eliminar.php?id=<?php echo $dato->id ?>" class="btn btn-danger"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                <i class="bi bi-trash3-fill"></i></a>
            </td>
          </tr>

          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</main>
<?php include "templates/footer.php"; ?>