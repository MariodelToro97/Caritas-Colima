<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ingresar usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../assets/css/signin.css" rel="stylesheet">
</head>
<div class="login">
  <body class="text-center">
    <form action="../Models/signup.php" method="post" class="form-signin">
      <img class="mb-4 mt-5" src="../Pictures/LogoC.png" alt="" width="72" height="72">
      <h1 class="h3 mb-4 font-weight-normal">Ingresar nuevo Usuario</h1>
      <input type="text" name="usuario" placeholder="Usuario" autofocus="" class="form-control rounded" required = "">
      <input type="password" name="password" class="form-control mt-2 mb-2 rounded" placeholder="Contraseña" required = "">
      <input type="password" name="confirmPassword" class="form-control rounded" placeholder="Confirmar Contraseña" required = "">
      <input class="btn" type="submit" value="Registrar"><a href="Menu.php"></a>

      <?php if(!empty($message)): ?>
      <p class="text-danger font-weight-bold"> <?= $message ?></p>
      <?php endif; ?>

    </form>
    <button class="btn" type="submit"><a href="../Index.php" style="text-decoration: none;">Cancelar</a></button>
  </body>
</div>
</html>
