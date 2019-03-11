<?php

require '../Models/database.php';

$usuario = $_POST['usuario'];
$contra = $_POST['password'];
$conf = $_POST['confirmPassword'];
$rol = $_POST['rol'];

if (!empty($usuario) && !empty($contra) && !empty($conf)) {
  if ($contra == $conf) {
    $checar = $conexion -> query("SELECT idUsuarios, Contrasena FROM usuarios WHERE UPPER(idUsuarios) = UPPER('.$usuario.')");
    /*$records = $conn->prepare('SELECT idUsuarios, Contrasena FROM usuarios WHERE idUsuarios = :user');
    $records-> bindParam(':user', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);*/

    $usuarioEncontrado = $checar -> num_rows;
    $crypt = password_hash($contra, PASSWORD_BCRYPT);

    if ($usuarioEncontrado == 0) {
      $insertar = $conexion -> query("INSERT INTO usuarios (idUsuarios, Contrasena, idRol) VALUES('$usuario','$crypt', '$rol')");
      /*$sql = "INSERT INTO usuarios (idUsuarios, Contrasena, idRol) VALUES (:user, :password, :rol)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':user', $_POST['usuario']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':rol', $_POST['rol']);*/

      if ($insertar) {
        echo 'La inserción se completó satisfactoriamente';
      } else {
        echo 'Algo salió mal con la inserción';
      }
    } else {
      echo 'Ese usuario ya se encuentra en la base de datos';
    }

  } else {
    echo 'Las contraseñas no coinciden';
  }
} else {
  echo 'No deje espacios en blanco';
}
 ?>
