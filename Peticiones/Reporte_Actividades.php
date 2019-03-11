<?php
require ('../Models/database.php');
session_start();

/*$sql = "SELECT * FROM actividades";
$stmt = $conn->prepare($sql);*/

$consultaR = $conexion -> query("SELECT * FROM actividades");

if(isset($_POST['GenerarReporte']))
{
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Actividades.csv"');
	$archivo = fopen('php://output', 'w');
	fputcsv($archivo, array('Numero Actividad','Numero Institucion','Fecha Actividad','Asistentes','Despensas','Actividad Extra','Institucion 1','Institucion 2','Voluntario Actividad','Actividad 1','Actividad 2','No Rol'));

	//if ($stmt->execute()) {
  		while($filaConsulta = $consultaR -> fetch_assoc()){
  			fputcsv($archivo, array(utf8_decode($filaConsulta['idActividades']),
  									utf8_decode($filaConsulta['idInstitucion']),
  									utf8_decode($filaConsulta['fechaActividad']),
  									utf8_decode($filaConsulta['asistentesActividad']),
  									utf8_decode($filaConsulta['despensasActividad']),
  									utf8_decode($filaConsulta['actividadExtra']),
  									utf8_decode($filaConsulta['institucionUno']),
  									utf8_decode($filaConsulta['institucionDos']),
  									utf8_decode($filaConsulta['voluntarioActividad']),
  									utf8_decode($filaConsulta['actividadUno']),
  									utf8_decode($filaConsulta['actividadDos']),
  									utf8_decode($filaConsulta['idRol']))); 
  		}
	//}
}
?>