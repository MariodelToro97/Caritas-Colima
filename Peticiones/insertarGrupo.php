<?php
  session_start();
  require '../Models/database.php';

  $nombreGrupo = $_POST['nombreGrupo'];

  if (!empty($_POST['nombreGrupo'])) {
    $records = $conn->prepare('SELECT idInstituciones, nombreInstitucion FROM instituciones WHERE UPPER(nombreInstitucion) COLLATE utf8_general_ci LIKE UPPER(_utf8"%":name"%") COLLATE utf8_general_ci');
    $records-> bindParam(':name', $nombreGrupo);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if (!$results) {
      $sql = "INSERT INTO instituciones (nombreInstitucion) VALUES (:name)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':name', $nombreGrupo);

      if ($stmt->execute()) {
        echo "Grupo guardado exitosamente";
      } else {
        echo "Ocurrió un error en la inserción del dato";
      }
    } else {
      echo "Ya existe una institución con ese nombre en la base de datos";
    }
  } else {
    echo "No deje espacios vacios";
  }
 ?>
