<?php
  include '../models/conexion.php';

  $titulo = $_POST['inputTitulo'];
  $autor = $_POST['inputAutor'];
  $editorial = $_POST['inputEditorial'];
  $categoria = $_POST['inputCategoria'];

  $consulta = $bd->prepare("INSERT INTO libros(titulo, autor, editorial, categoria) VALUES(?, ?, ?, ?)");
  $resultado = $consulta->execute([$titulo, $autor, $editorial, $categoria]);

  if ($resultado) {
    header("Location: ../index.php");
  }else {
    echo "Fallo la consulta";
  }
?>