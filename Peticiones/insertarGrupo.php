<?php
  session_start();
  require '../Models/database.php';

  $nombreGrupo = $_POST['nombreGrupo'];

  if (!empty($_POST['nombreGrupo'])) {
    $checar = $conexion -> query("SELECT nombreInstitucion FROM instituciones WHERE UPPER(nombreInstitucion) LIKE UPPER('.$nombreGrupo.')");
    /*$records = $conn->prepare('SELECT idInstituciones, nombreInstitucion FROM instituciones WHERE UPPER(nombreInstitucion) COLLATE utf8_general_ci LIKE UPPER(_utf8"%":name"%") COLLATE utf8_general_ci');
    $records-> bindParam(':name', $nombreGrupo);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);*/    
    if (!mysqli_fetch_array($checar)) {
      /*$sql = "INSERT INTO instituciones (nombreInstitucion) VALUES (:name)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':name', $nombreGrupo);

      if ($stmt->execute()) {*/
      $insertar = $conexion -> query("INSERT INTO instituciones (idInstituciones, nombreInstitucion) VALUES('','$nombreGrupo')");

      if ($insertar) {
        echo "Grupo guardado exitosamente";
      } else {
        echo "Ya existe una institución con ese nombre en la base de datos";
      }
    } else {
      echo "Ya existe una institución con ese nombre en la base de datos";
    }
  } else {
    echo "No deje espacios vacios";
  }
 ?>
