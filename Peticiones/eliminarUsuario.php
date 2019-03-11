<?php
session_start();
require '../Models/database.php';

$id = $_POST['idGrupo'];

if (!empty($id)) {
  $delete = $conexion -> query("DELETE FROM usuarios WHERE idUsuarios = '$id'");
    /*$sql = "DELETE FROM usuarios WHERE idUsuarios = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {*/
    if($delete){
      echo "El usuario se borró de forma correcta";
    } else {
      echo "Ha ocurrido un error en la eliminación del usuario";
    }
} else {
  echo "Ha ocurrido algún error en la selección del instituto";
}
?>
