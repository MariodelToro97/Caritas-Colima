<?php
session_start();
require '../Models/database.php';

$id = $_POST['idGrupo'];

if (!empty($id)) {
  $delete = $conexion -> query("DELETE FROM actividades WHERE idActividades = " .$id);
  /*$sql = "DELETE FROM actividades WHERE idActividades = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);

  if ($stmt->execute()) {*/
  if($delete){
    echo "La actividad se borró de forma correcta";
  } else {
    echo "Esta actividad no se puede eliminar de la base de datos";
  }
} else {
  echo "Ha ocurrido algún error en la selección del instituto";
}
?>
