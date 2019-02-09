<?php
require '../Models/database.php';
session_start();

//Traer los datos que se han mandado por metodo post desde la vista de personas
$Nombre = $_POST['Nombreper'];
$apellidop = $_POST['apellidopa'];
$apellidom = $_POST['apellidoma'];
$Calle = $_POST['callep'];
$numerocall = $_POST['numerocalle'];
$colonia = $_POST['coloniaper'];
$municipio = $_POST['municip']:
$codigoP = $_POST['CP'];
$telefono = $_POST['Tel'];
$edad = $_POST['dade'];
$sexo = $_POST['xose'];
$fechanac = $_POST['mientonaci'];
$lugarNac = $_POST['Garlunaci'];
$estadoCivil = $_POST['EC'];
$CURP = $_POST['PRUC'];
$escolaridad = $_POST['laridadesco'];
$Fecharegistro = $_POST['FechR'];

$sql = "INSERT INTO personas (fecha, apellidop, apellidom, Nombre, calle, numero, colonia, municipio, CP, Telefono, 
                                Edad, sexo, FechaNac, LugarNac, EstadoCiv,
                                 CURP, Escolaridad) VALUES
                                  (:fech, :Apep, :Apem, :nom, :cal, :num, :colo, :muni,
                                  :codpos, :tele,  :sex, :fechan, :lugarn, :estaciv, :cup, :esco)";
$stmt = $conn->prepare($sql);
//Inicializa cada una de las variables con su respectivo valor, por el método POST
$stmt->bindParam(':fech', $Fecharegistro);
$stmt->bindParam(':Apep', $apellidop);
$stmt->bindParam(':Apem', $apellidom);
$stmt->bindParam(':nom', $Nombre );
$stmt->bindParam(':cal', $Calle);
$stmt->bindParam(':num', $numerocall);
$stmt->bindParam(':colo', $colonia);
$stmt->bindParam(':muni', $municipio);
$stmt->bindParam(':codpos', $codigoP);
$stmt->bindParam(':tele', $telefono);
$stmt->bindParam(':sex', $sexo);
$stmt->bindParam(':fechan', $fechanac);
$stmt->bindParam(':lugarn', $lugarNac);
$stmt->bindParam(':estaciv', $estadoCivil);
$stmt->bindParam(':cup', $CURP);
$stmt->bindParam(':esco', $escolaridad);

if ($stmt->execute()) {
  echo 'La inserción se completó satisfactoriamente';
} else {
  echo 'No se pudieron insertar los datos';
  exit;
}