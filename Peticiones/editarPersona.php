<?php
require '../Models/database.php';
session_start();
//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
$idCaso = $_POST['idC'];
$fechCaso = $_POST['fecha'];
$apellidoPaterno = $_POST['apellidoP'];
$apellidoMaterno = $_POST['apellidoM'];
$nombrePersona = $_POST['nombreP'];
$callePersona = $_POST['calleP'];
$numeroCalle = $_POST['numeroC'];
$coloniaPersona = $_POST['coloniaP'];
$municipioPersona = $_POST['municipioP'];
$codigoPostal = $_POST['CP'];
$telefonoPersona = $_POST['telPersona'];
$edadPersona = $_POST['edadP'];
$sexoPersona = $_POST['sexoP'];
$fechaNacimiento = $_POST['fechaNac'];
$lugarNacimiento = $_POST['lugarNac'];
$estadoCivil = $_POST['estadoCivP'];
$CURP = $_POST['PURC'];
$escolaridadPersona = $_POST['escolaridadP'];

$sql = "UPDATE personas SET fecha= :fechR, apellidop = :apellidoP, apellidom = :apellidoM, Nombre = :nombre,
Calle = :calle, numero = :noCalle, colonia = :colonia, municipio = :municipio, CP = :CP, Telefono = :telefono, 
Edad = :edad, sexo = :sexo, FechaNac = :fechaNac, LugarNac = :lugarNac, EstadoCiv = :estCivil, CURP = :CURP,
Escolaridad = :escolaridad WHERE idcaso = :idCaso";
cosole.log("Hola espacio 3");

$stmt = $conn->prepare($sql);
//Inicializa cada una de las variables con su respectivo valor, por el método POST
$stmt->bindParam(':idCaso', $idCaso);
$stmt->bindParam(':fechR', $fechCaso);
$stmt->bindParam(':apellidoP', $apellidoPaterno);
$stmt->bindParam(':apellidoM', $apellidoMaterno);
$stmt->bindParam(':nombre', $nombrePersona);
$stmt->bindParam(':calle', $callePersona);
$stmt->bindParam(':noCalle', $numeroCalle);
$stmt->bindParam(':colonia', $coloniaPersona);
$stmt->bindParam(':municipio', $municipioPersona);
$stmt->bindParam(':CP', $codigoPostal);
$stmt->bindParam(':telefono', $telefonoPersona);
$stmt->bindParam(':edad', $edadPersona);
$stmt->bindParam(':sexo', $sexoPersona);
$stmt->bindParam(':fechaNac', $fechaNacimiento);
$stmt->bindParam(':lugarNac', $lugarNacimiento);
$stmt->bindParam(':estCivil', $estadoCivil);
$stmt->bindParam(':CURP', $CURP);
$stmt->bindParam(':escolaridad', $escolaridadPersona);


if ($stmt->execute()) {
  echo 'Los datos se actualizaron satisfactoriamente';
} else {
  echo 'No se pudieron actualizar los datos';
  exit;
}
?>
