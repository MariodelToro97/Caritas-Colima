<?php
require ('../Models/database.php');
session_start();

$sql = "SELECT * FROM actividades";
$stmt = $conn->prepare($sql);

if(isset($_POST['GenerarReporte']))
{
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Actividades.csv"');
	$archivo = fopen('php://output', 'w');
	fputcsv($archivo, array('No Actividad','No Institucion','Fecha Actividad','Asistentes','Despensas','Actividad Extra','Institucion 1','Institucion 2','Voluntario Actividad','Actividad 1','Actividad 2','No Rol'));

	if ($stmt->execute()) {
  		while($filaR = $stmt->fetch(PDO::FETCH_ASSOC)){
  			fputcsv($archivo, array($filaR['idActividades'],
  									$filaR['idInstitucion'],
  									$filaR['fechaActividad'],
  									$filaR['asistentesActividad'],
  									$filaR['despensasActividad'],
  									$filaR['actividadExtra'],
  									$filaR['institucionUno'],
  									$filaR['institucionDos'],
  									$filaR['voluntarioActividad'],
  									$filaR['actividadUno'],
  									$filaR['actividadDos'],
  									$filaR['idRol'])); 
  		}
	}
}
?>