<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Cáritas</title>
  <link href="assets/css/signin.css" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<div class="login">
  <body class="text-center">
    <form class="form-signin" id="formIndex">
      <img class="mb-4 mt-5" src="Pictures/LogoC.png" alt="" width="72" height="72">
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
      <input class="btn" type="submit" value="Inciar Sesión">

       <?php if(!empty($message)): ?>
      <p id="mensajeHorror" class="text-danger font-weight-bold"><?= $message ?></p>
      <?php endif; ?>

    </form>
    <button class="btn" type="submit"><a href="Views/signup.php" style="text-decoration: none;">Registrarse</a></button>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/Sign.js" charset="utf-8"></script>
  </body>
</div>
</html>
