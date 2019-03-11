<?php
require '../Models/database.php';
session_start();

//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
$apoEx = $_POST['apoyoExtra'];
$instDos = $_POST['institucionDos'];
$volunt = $_POST['voluntariosPrac'];
$actDos = $_POST['actividadDos'];

if ($_SESSION['rol'] == 1) {
  $rol = $_POST['rol'];
} else {
  $rol = $_SESSION['rol'];
}

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

$idInstitucion = $_POST['institucion'];
$fecha = $_POST['fecha'];
$Asistentes = $_POST['numeroAsistentes'];
$despensas = $_POST['numeroDespensas'];
$institucionUno = $_POST['institucionUno'];
$idActividad = $_POST['idActividadInput'];
$actUno = $_POST['actividadUno'];

/*$sql = "UPDATE actividades SET idInstitucion = :idins, fechaActividad = :fechA, asistentesActividad = :asisAc, despensasActividad = :desAc, actividadExtra = :actE, institucionUno = :insU, institucionDos = :insD, voluntarioActividad = :volunAc, actividadUno = :actU, actividadDos = :actD, idRol = :rol
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

if ($_SESSION['rol'] == 1) {
  $stmt->bindParam(':rol', $_POST['rol']);
} else {
    $stmt->bindParam(':rol', $_SESSION['rol']);
}

$stmt->bindParam(':id', $_POST['idActividadInput']);

if ($stmt->execute()) {*/

$actualizar = $conexion -> query("UPDATE actividades SET idInstitucion = '$idInstitucion', fechaActividad = '$fecha', asistentesActividad = '$Asistentes', despensasActividad = '$despensas', actividadExtra = '$apoEx', institucionUno = '$institucionUno', institucionDos = '$instDos', voluntarioActividad = '$volunt', actividadUno = '$actUno', actividadDos = '$actDos', idRol = '$rol' WHERE idActividades = $idActividad");

if ($actualizar) {
  echo 'Los datos se actualizaron satisfactoriamente';
} else {
  echo 'No se pudieron actualizar los datos';
  exit;
}
?>
