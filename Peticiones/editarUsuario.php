<?php
session_start();
require '../Models/database.php';

$usuario = $_POST['nombre'];
$contra = $_POST['password'];
$conf = $_POST['passwordConf'];
$rol = $_POST['rol'];

if ($contra == $conf) {
  /*$sql = "UPDATE usuarios SET Contrasena = :password, idRol = :rol WHERE idUsuarios = :name";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['nombre']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':rol', $_POST['rol']);

  if ($stmt->execute()) {*/
  $crypt = password_hash($contra, PASSWORD_BCRYPT);

  $actualizar = $conexion -> query("UPDATE usuarios SET Contrasena = '$crypt', idRol = '$rol' WHERE idUsuarios = '$usuario'");

  if($actualizar) {
    echo "Usuario actualizado correctamente";
  } else {
    echo "Ocurrió un error en la actualizción del usuario";
  }
} else {
  echo "Las contraseñas no coinciden";
}
?>
