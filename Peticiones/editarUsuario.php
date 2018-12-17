<?php
session_start();
require '../Models/database.php';

if ($_POST['password'] == $_POST['passwordConf']) {
  $sql = "UPDATE usuarios SET Contrasena = :password, idRol = :rol WHERE idUsuarios = :name";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['nombre']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':rol', $_POST['rol']);

  if ($stmt->execute()) {
    echo "Usuario actualizado correctamente";
  } else {
    echo "Ocurrió un error en la actuaizción del usuario";
  }
} else {
  echo "Las contraseñas no coinciden";
}
?>
