<?php
require '../Models/database.php';
session_start();

//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
$apoEx = $_POST['apoyoExtra'];
$instDos = $_POST['institucionDos'];
$volunt = $_POST['voluntariosPrac'];
$actDos = $_POST['actividadDos'];

if (empty($apoEx)) {
  $apoEx = '';
}

if (empty($instDos)) {
  $instDos = '';
}

if (empty($volunt)) {
  $volunt = '';
}

if (empty($actDos)) {
  $actDos = '';
}

$sql = "INSERT INTO Actividades (idInstitucion, fechaActividad, asistentesActividad, despensasActividad, actividadExtra, institucionUno, institucionDos, voluntarioActividad, actividadUno, actividadDos, idRol) VALUES
                                  (:idins,        :fechA,             :asisAc,            :desAc,              :actE,        :insU,        :insD,              :volunAc,           :actU,        :actD,  :rol)";
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

if ($stmt->execute()) {
  echo 'La inserción se completó satisfactoriamente';
} else {
  echo 'Ocurrió un error al insertar la actividad. ¡Por favor vuelva a insertar los datos!';
  exit;
}

?>
