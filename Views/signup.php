<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'caritascolima', 3306);
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ingresar usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../assets/css/signin.css" rel="stylesheet">
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
    <form class="form-signin" id="formIngreso">
      <img class="mb-4 mt-3" src="../Pictures/LogoC.png" alt="" width="72" height="72">
      <h1 class="h3 mb-4 font-weight-normal">Ingresar nuevo Usuario</h1>
      <input id="newUser" type="text" name="usuario" placeholder="Usuario" autofocus="" class="form-control rounded" required = "" autocomplete="off">
      <input id="primerContra" type="password" name="password" class="form-control mt-2 mb-2 rounded" placeholder="Contraseña" required = "" autocomplete="off">
      <input id="confirmContra" type="password" name="confirmPassword" class="form-control rounded" placeholder="Confirmar Contraseña" required = "" autocomplete="off">
      <select class="custom-select" name="rol" id="rolUsuario" required="" class="form-control rounded">
        <option value="" selected>Rol que desempeña</option>

        <?php
        $sql = "SELECT * from roles";
        $result = mysqli_query($conexion, $sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <option value="<?php echo $mostrar['idRoles'] ?>"><?php echo utf8_encode($mostrar['nombreRol']) ?></option>
        <?php
        }
        ?>
      </select>
      <input class="btn mt-3" type="submit" value="Registrar">
    </form>

    <button class="btn" type="submit"><a href="../Index.php" style="text-decoration: none;">Cancelar</a></button>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/Sign.js" charset="utf-8"></script>
  </body>
</div>
</html>
