<?php
session_start();
require '../Models/database.php';

$id = $_POST['idGrupo'];

if (!empty($id)) {
    $sql = "DELETE FROM instituciones WHERE idInstituciones = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
      echo "La institución se borro de forma correcta";
    } else {
      echo "Ocurrió un problema al momento de eliminar la institución";
    }
} else {
  echo "Ha ocurrido algún error en la selección del instituto";
}
?>
