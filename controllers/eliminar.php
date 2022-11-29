<?php 
include '../models/conexion.php';

$codigoLibro = $_GET['id'];

$consulta = $bd->prepare("DELETE from libros WHERE id = ?");
$resultado = $consulta->execute([$codigoLibro]);

if ($resultado) {
    header("Location: ../index.php");
  }else {
    echo "Fallo la consulta";
  }
?>