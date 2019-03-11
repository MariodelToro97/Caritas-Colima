<?php
require ('../Models/database.php');
session_start();

$consultaR = $conexion -> query("SELECT * FROM personas");

if(isset($_POST['GenerarReporte'])) {
    header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Personas.csv"');
	$archivo = fopen('php://output', 'w');
    fputcsv($archivo, array('Numero Caso', 'Fecha generacion', 'Apellido Paterno', 'Apellido Materno', 'Nombre', 'Calle', 'Numero', 'Colonia', 'Municipio', 'CP', 'Telefono', 'Edad', 'Sexo', 'Fecha de Nacimiento', 'Lugar de Nacimiento', 'Estado Civil', 'CURP', 'Escolaridad'));
    
    while($filaConsulta = $consultaR -> fetch_assoc()){
  			fputcsv($archivo, array(utf8_decode($filaConsulta['idcaso']),
  									utf8_decode($filaConsulta['fecha']),
  									utf8_decode($filaConsulta['apellidop']),
  									utf8_decode($filaConsulta['apellidom']),
  									utf8_decode($filaConsulta['Nombre']),
  									utf8_decode($filaConsulta['Calle']),
  									utf8_decode($filaConsulta['numero']),
  									utf8_decode($filaConsulta['colonia']),
  									utf8_decode($filaConsulta['municipio']),
  									utf8_decode($filaConsulta['CP']),
  									utf8_decode($filaConsulta['Telefono']),
                                    utf8_decode($filaConsulta['Edad']),
                                    utf8_decode($filaConsulta['sexo']),
                                    utf8_decode($filaConsulta['FechaNac']),
                                    utf8_decode($filaConsulta['LugarNac']),
                                    utf8_decode($filaConsulta['EstadoCiv']),
                                    utf8_decode($filaConsulta['CURP']),
                                    utf8_decode($filaConsulta['Escolaridad']))); 
  		}
}
?>