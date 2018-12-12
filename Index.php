<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: Index.php');
}

require 'Models/database.php';

$message = '';

if (!empty($_POST['user']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT idUsuarios, Contrasena FROM usuarios WHERE idUsuarios = :user');
  $records-> bindParam(':user', $_POST['user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if ($results && password_verify($_POST['password'], $results['Contrasena'])) {
    $_SESSION['user_id'] = $results['idUsuarios'];
    header('Location: Views/Menu.php');
  } else {
    $message = $results['Contrasena'];//'Usuario y/o Contraseña incorrectos';
  }
} else {
  $message = 'No deje espacios en blanco';
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Cáritas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../assets/css/signin.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<div class="login">
  <body class="text-center">
    <form class="form-signin" action="Index.php" method="POST">
      <img class="mb-4 mt-5" src="../Pictures/LogoC.png" alt="" width="72" height="72">
      <h1 class="h3 mb-4 font-weight-normal">Bienvenido</h1>
      <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Usuario" autofocus="" required="">
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">

      <div class="checkbox mb-3 mt-4">
        <label>
          <div class="form-check-inline">
            <input type="checkbox" value="remember-me" id="remember">
            <label for="remember" class="ml-2">Recuérdame</label>
          </div>
        </label>
      </div>
      <input class="btn" type="submit" value="Inciar Sesión"><a href="Views/Menu.php"></a>

      <?php if(!empty($message)): ?>
      <p class="text-danger font-weight-bold"> <?= $message ?></p>
      <?php endif; ?>

    </form>
    <button class="btn" type="submit"><a href="signup.php" style="text-decoration: none;">Registrarse</a></button>
  </body>
</div>
</html>
