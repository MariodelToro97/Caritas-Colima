<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: ../Views/login.php');
}

require 'database.php';

$message = '';

if (!empty($_POST['user']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT idUsuarios, Contrasena FROM usuarios WHERE idUsuarios = :user');
  $records-> bindParam(':user', $_POST['user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if ($results && password_verify($_POST['password'], $results['Contrasena'])) {
    $_SESSION['user_id'] = $results['idUsuarios'];
    header('Location: ../Views/Menu.php');
  } else {
    $message = 'Usuario y/o Contraseña incorrectos';
    header('Location: ../Views/login.php');
  }
} else {
  $message = 'No deje espacios en blanco';
  header('Location: ../Views/login.php');
}

?>
