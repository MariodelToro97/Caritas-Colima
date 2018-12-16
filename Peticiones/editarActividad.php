<?php
require '../Models/database.php';
session_start();

//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
$apoEx = $_POST['apoyoExtra'];
$instDos = $_POST['institucionDos'];
$volunt = $_POST['voluntariosPrac'];
$actDos = $_POST['actividadDos'];

if (empty($apoEx)) {
  $apoEx = '---';
}

if (empty($instDos)) {
  $instDos = '---';
}

if (empty($volunt)) {
  $volunt = '---';
}

if (empty($actDos)) {
  $actDos = '---';
}



$sql = "UPDATE actividades SET idInstitucion = :idins, fechaActividad = :fechA, asistentesActividad = :asisAc, despensasActividad = :desAc, actividadExtra = :actE, institucionUno = :insU, institucionDos = :insD, voluntarioActividad = :volunAc, actividadUno = :actU, actividadDos = :actD, idRol = :rol
        WHERE idActividades = :id";

$stmt = $conn->prepare($sql);
//Inicializa cada una de las variables con su respectivo valor, por el método POST
$stmt->bindParam(':idins', $_POST['institucion']);
$stmt->bindParam(':fechA', $_POST['fecha']);
$stmt->bindParam(':asisAc', $_POST['numeroAsistentes']);
$stmt->bindParam(':desAc', $_POST['numeroDespensas']);
$stmt->bindParam(':actE', $apoEx);
$stmt->bindParam(':insU', $_POST['institucionUno']);
$stmt->bindParam(':insD', $instDos);
$stmt->bindParam(':volunAc', $volunt);
$stmt->bindParam(':actU', $_POST['actividadUno']);
$stmt->bindParam(':actD', $actDos);
$stmt->bindParam(':rol', $_SESSION['rol']);
$stmt->bindParam(':id', $_POST['idActividadInput']);

if ($stmt->execute()) {
  echo 'Los datos se actualizaron satisfactoriamente';
} else {
  echo 'No se pudieron actualizar los datos';
  exit;
}
?>
