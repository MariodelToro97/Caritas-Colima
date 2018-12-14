<?php
  session_start();
  require '../Models/database.php';

  if (!empty($_POST['nombreGrupo'])) {
    $records = $conn->prepare('SELECT idInstituciones, nombreInstitucion FROM instituciones WHERE nombreInstitucion = :name');
    $records-> bindParam(':name', $_POST['nombreGrupo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (!$results) {
      $sql = "INSERT INTO instituciones (nombreInstitucion) VALUES (:name)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':name', $_POST['nombreGrupo']);

      if ($stmt->execute()) {
        echo "Grupo guardado exitosamente";
      } else {
        echo "Ocurrió un error en la inserción del dato";
      }
    } else {
      echo "Ya existe una institución idéntica en la base de datos";
    }
  } else {
    echo "No deje espacios vacios";
  }
 ?>