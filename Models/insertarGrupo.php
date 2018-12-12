<?php
  session_start();
  require 'database.php';

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
        header('Location: ../Views/Menu.php');
      } else {
               header('Location: ../Views/Menu.php');
      }
    } else {
             header('Location: ../Views/Menu.php');
    }
  } else {
           header('Location: ../Views/Menu.php');
  }
 ?>
