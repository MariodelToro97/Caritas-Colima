<?php
session_start();
require '../Models/database.php';

$id = $_POST['idGrupo'];

if (!empty($id)) {
  $delete = $conexion -> query("DELETE FROM instituciones WHERE idInstituciones = " .$id);
  /*$sql = "DELETE FROM instituciones WHERE idInstituciones = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);*/

  //if ($stmt->execute()) {
  if($delete){
    echo "La institución se borró de forma correcta";
  } else {
    echo "Está institución tiene actividades realizadas, por ende, no se puede eliminar de la base de datos";
  }
} else {
  echo "Ha ocurrido algún error en la selección del instituto";
}
?>
