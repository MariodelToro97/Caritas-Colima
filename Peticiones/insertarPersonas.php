<?php
require '../Models/database.php';
session_start();


//Traer los datos que se han mandado por metodo post desde la vista de personas
$Nombre = $_POST['nombrepersona'];
$apellidop = $_POST['apellidopaterno'];
$apellidom = $_POST['apellidomaterno'];
$Calle = $_POST['calle'];
$numerocall = $_POST['numerocalle'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municip'];
$codigoP = $_POST['CP'];
$telefono = $_POST['Tel'];
$edad = $_POST['EDAD'];
$sexo = $_POST['SEXO'];
$fechanac = $_POST['fechnacimiento'];
$lugarNac = $_POST['lugarnacimiento'];
$estadoCivil = $_POST['EC'];
$CURP = $_POST['CURP'];
$escolaridad = $_POST['escolaridad'];
$Fecharegistro = $_POST['FechR'];




/*$sql = "INSERT INTO personas (fecha, apellidop, apellidom, Nombre, Calle, numero, colonia, municipio, CP, Telefono, Edad, sexo, FechaNac, LugarNac, EstadoCiv, CURP, Escolaridad) VALUES
                            (:fech,    :Apep,   :Apem,      :nom, :cal,   :num,   :colo,    :muni,  :codpos, :tele, :edad,:sex, :fechan, :lugarn,     :estaciv, :cup, :esco)";
$stmt = $conexion->prepare($sql);
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
$stmt->bindParam(':edad', $edad);
$stmt->bindParam(':fechan', $fechanac);
$stmt->bindParam(':lugarn', $lugarNac);
$stmt->bindParam(':estaciv', $estadoCivil);
$stmt->bindParam(':cup', $CURP);
$stmt->bindParam(':esco', $escolaridad);

if ($stmt->execute()) {*/
  $verCURP = $conexion -> query("SELECT CURP FROM personas WHERE CURP = '$CURP'");
  //echo mysqli_num_rows($verCURP);


if (mysqli_num_rows($verCURP)==0){
  $insertar = $conexion -> query("INSERT INTO personas ( fecha, apellidop, apellidom, Nombre, Calle, numero, colonia, municipio, CP, Telefono, Edad, sexo, FechaNac, LugarNac, EstadoCiv, CURP, Escolaridad) VALUES
                                                        ('$Fecharegistro', '$apellidop', '$apellidom', '$Nombre', '$Calle', '$numerocall', '$colonia', '$municipio', '$codigoP', '$telefono', '$edad', '$sexo', '$fechanac', '$lugarNac', '$estadoCivil', '$CURP', '$escolaridad')");

  if($insertar) {
    echo 'La inserción se completó satisfactoriamente';
  } else {
    echo 'No se pudieron insertar los datos';    
  }
}else{
  echo 'Ya existe una CURP igual';
}
 
?>
