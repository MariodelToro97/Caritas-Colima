<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: ../Views/Menu.php');
}

require '../Models/database.php';

if (!empty($_POST['user']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT idUsuarios, Contrasena, idRol FROM usuarios WHERE idUsuarios = :user');
  $records-> bindParam(':user', $_POST['user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if ($results && password_verify($_POST['password'], $results['Contrasena'])) {
    $_SESSION['user_id'] = $results['idUsuarios'];
    $_SESSION['rol'] = $results['idRol'];    
    echo "Acceso Correcto";
  } else {
    echo 'Usuario y/o Contraseña incorrectos';
 }
} else {
  echo 'No deje espacios en blanco';
 }

?>
