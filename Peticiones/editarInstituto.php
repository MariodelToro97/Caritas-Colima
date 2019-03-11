<?php
session_start();
require '../Models/database.php';

$nombre = $_POST['nombre'];
$id = $_POST['idGrupo'];

if (!empty($nombre)) {
  $checar = $conexion -> query("SELECT nombreInstitucion FROM instituciones WHERE UPPER(nombreInstitucion) LIKE UPPER('.$nombre.')");
  /*$records = $conn->prepare('SELECT idInstituciones FROM instituciones WHERE UPPER(_utf8_general_ci nombreInstitucion) COLLATE utf8_general_ci LIKE UPPER(_utf8_general_ci"%":name"%") COLLATE utf8_general_ci');
  $records-> bindParam(':name', $_POST['nombre']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);*/

  //if (!$results) {
  if (!mysqli_fetch_array($checar)) {
    $actualizar = $conexion -> query("UPDATE instituciones SET nombreInstitucion = '$nombre' WHERE idInstituciones = $id");
    /*$sql = "UPDATE instituciones SET nombreInstitucion = :name WHERE idInstituciones = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['nombre']);
    $stmt->bindParam(':id', $_POST['idGrupo']);*/

    if ($actualizar) {
      echo "Grupo actualizado exitosamente";
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
