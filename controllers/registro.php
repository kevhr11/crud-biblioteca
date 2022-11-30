<?php include '../templates/header.php' ?>
<main class="flex-grow-1">
  <div class="mt-3 pl-3">
    <a href="../index.php" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Index">
      <i class="bi-house-door-fill"></i>
    </a>
  </div>

  <div class="container mt-3">
    <div class="card border-light">
      <div class="card-header">Ingrese un nuevo libro</div>
      <form action="insert.php" method="POST">
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
        <div class="mb-3 mx-2">
          <label class="form-label">Categoria</label>
          <input type="text" class="form-control" placeholder="Ingrese un categoria" name="inputCategoria" required>
        </div>
        <div class="mx-2">
          <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
      </form>
    </div>
  </div>
</main>
<?php include '../templates/footer.php' ?>