<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: ../Views/Menu.php');
}

require '../Models/database.php';

$usuario = $_POST['user'];
$password = $_POST['password'];

if (!empty($usuario) && !empty($password)) {
  $checar = $conexion -> query("SELECT * FROM usuarios WHERE idUsuarios = '$usuario'");
  /*$records = $conn->prepare("SELECT idUsuarios, Contrasena, idRol FROM usuarios WHERE idUsuarios = $usuario");
  $records-> bindParam(':user', $_POST['user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);*/

  $usuarioEncontrado = $checar -> num_rows;
  $datos = $checar->FETCH_ASSOC();

  if ($usuarioEncontrado == 1 && password_verify($password, $datos['Contrasena'])) {
  //if ($checar) {
    $_SESSION['user_id'] = $datos['idUsuarios'];
    $_SESSION['rol'] = $datos['idRol'];
    $_SESSION['Contra'] = $datos['Contrasena'];
    echo "Acceso Correcto";
  } else {
    echo 'Usuario y/o Contraseña incorrectos';
  }
} else {
  echo 'No deje espacios en blanco';
}

?>
