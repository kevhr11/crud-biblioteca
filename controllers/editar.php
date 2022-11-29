<?php include '../templates/header.php' ?>

<?php
  include '../models/conexion.php';
  
  $codigoLibro = $_GET['id'];

  $consulta = $bd->prepare("SELECT * from libros WHERE id = ?");

  $consulta->execute([$codigoLibro]);

  $libro = $consulta->fetch(PDO::FETCH_OBJ);

  //print_r($libro);
  

?>

<div class="container mt-5 mb-5">
  <div class="card">
    <div class="card-header">Modificar libro</div>
    <form action="update.php" method="POST">
      <div class="mb-2 mx-2">
        <label class="form-label">Titulo</label>
        <input type="text" class="form-control" placeholder="Ingrese titulo" name="inputTitulo"
          value="<?php echo $libro->titulo ?>">
      </div>
      <div class="mb-2 mx-2">
        <label class="form-label">Autor</label>
        <input type="text" class="form-control" placeholder="Ingrese autor" name="inputAutor"
          value="<?php echo $libro->autor ?>">
      </div>
      <div class="mb-2 mx-2">
        <label class="form-label">Editorial</label>
        <input type="text" class="form-control" placeholder="Ingrese una editorial" name="inputEditorial"
          value="<?php echo $libro->editorial ?>">
      </div>
      <div class="mb-2 mx-2">
        <label class="form-label">Categoria</label>
        <input type="text" class="form-control" placeholder="Ingrese un categoria" name="inputCategoria"
          value="<?php echo $libro->categoria ?>">
        <input type="hidden" name="inputId" value="<?php echo $libro->id ?>">
      </div>
      <div class="mb-2 mx-2">
        <input type="submit" class="btn btn-primary" value="Modificar">
      </div>
    </form>
  </div>
</div>

<?php include '../templates/footer.php' ?>