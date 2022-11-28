<?php
  $nombre_bd = "biblioteca";
  $usuario = "root";
  $contraseña = "";

  try {
    
    $bd = new PDO(
      'mysql:host=localhost;
      dbname='.$nombre_bd,
      $usuario,
      $contraseña      
    );

  } catch (Exception $e) {
    //Manejo de excepciones(errores)
    echo "No funciono la conexion porque: ".$e->getMessage();
  }
?>