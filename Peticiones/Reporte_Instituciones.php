<?php
require ('../Models/database.php');
session_start();

$sql = "SELECT nombreInstitucion FROM instituciones";
$stmt = $conn->prepare($sql);

if(isset($_POST['GenerarReporte']))
{
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Instituciones.csv"');
	$archivo = fopen('php://output', 'w');
	fputcsv($archivo, array('Nombre Institucion'));

	if ($stmt->execute()) {
  		while($filaR = $stmt->fetch(PDO::FETCH_ASSOC)){
  			fputcsv($archivo, array($filaR['nombreInstitucion']));
  		}
	}
}
?>
