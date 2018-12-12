<?php

require '../Models/database.php';

$message = '';

if (!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
  if ($_POST['password'] == $_POST['confirmPassword']) {
    $records = $conn->prepare('SELECT idUsuarios, Contrasena FROM usuarios WHERE idUsuarios = :user');
    $records-> bindParam(':user', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (!$results) {
      $sql = "INSERT INTO usuarios (idUsuarios, Contrasena) VALUES (:user, :password)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':user', $_POST['usuario']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);

      if ($stmt->execute()) {
        $message = 'La inserción se completó satisfactoriamente';
        header('Location: login.php');
      } else {
        $message = 'Algo salió mal con la inserción';
        header('Location: ../Views/signup.php');
      }
    } else {
      $message = 'Ese usuario ya se encuentra en la base de datos';
      header('Location: ../Views/signup.php');
    }

  } else {
    $message = 'Las contraseñas no coinciden';
    header('Location: ../Views/signup.php');
  }
} else {
  $message = 'No deje espacios en blanco';
  header('Location: ../Views/signup.php');
}
 ?>
