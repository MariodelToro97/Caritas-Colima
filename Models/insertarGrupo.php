<?php
  session_start();
  require 'database.php';

  $message = '';

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
        $message = 'La inserción se completó satisfactoriamente';
        echo  "<script>
                 alert('".$message."');
                 window.location= '../Views/Menu.php';
               </script>";



        header('Refresh: 10; Location: ../Views/Menu.php');
      } else {
        $message = 'Algo salió mal con la inserción';
        echo  "<script>
                 alert('".$message."');
                 window.location= '../Views/Menu.php';
               </script>";
      }

    } else {
      $message = 'Esa institución ya está dada de alta en la base de datos';
      echo  "<script>
               alert('".$message."');
               window.location= '../Views/Menu.php';
             </script>";
    }
  } else {
    $message = 'No dejé espacios vacíos';
    echo  "<script>
             alert('".$message."');
             window.location= '../Views/Menu.php';
           </script>";
  }

 ?>
