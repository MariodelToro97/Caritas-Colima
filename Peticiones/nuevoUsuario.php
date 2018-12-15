<?php

require '../Models/database.php';


if (!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
  if ($_POST['password'] == $_POST['confirmPassword']) {
    $records = $conn->prepare('SELECT idUsuarios, Contrasena FROM usuarios WHERE idUsuarios = :user');
    $records-> bindParam(':user', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (!$results) {
      $sql = "INSERT INTO usuarios (idUsuarios, Contrasena, idRol) VALUES (:user, :password, :rol)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':user', $_POST['usuario']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':rol', $_POST['rol']);

      if ($stmt->execute()) {
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
