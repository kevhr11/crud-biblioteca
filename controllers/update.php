<?php 
  include '../models/conexion.php';

  $codigoLibro = $_POST['inputId'];
  $titulo = $_POST['inputTitulo'];
  $autor = $_POST['inputAutor'];
  $editorial = $_POST['inputEditorial'];
  $categoria = $_POST['inputCategoria'];

  //echo $codigoLibro, $titulo, $autor, $editorial, $categoria;

  $consulta = $bd->prepare("UPDATE libros SET titulo = ?, autor = ?, editorial = ?, categoria = ? WHERE id = ?");
  $resultado = $consulta->execute([$titulo, $autor, $editorial, $categoria, $codigoLibro]);
  
  if ($resultado) {
    header("Location: ../index.php");
  }else {
    echo "Fallo la consulta";
  }
?>