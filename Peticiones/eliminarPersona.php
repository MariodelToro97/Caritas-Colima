<?php
session_start();
require '../Models/database.php';

$id = $_POST['idcaso'];

if (!empty($id)) {
  $delete = $conexion -> query("DELETE FROM personas WHERE idcaso = " .$id);
  /*$sql = "DELETE FROM personas WHERE idcaso = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);

  if ($stmt->execute()) {*/
  if($delete){
    echo "La persona ha sido borrada correctamente";
  } else {
    echo "La persona no se pudo eliminar";
  }
} else {
  echo "Ha ocurrido un error, intente de nuevo";
}
?>
