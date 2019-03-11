<?php
	session_start();
  require '../Models/conexion.php';
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
		<title>Ingresar usuario</title>  
  <link href="../assets/css/signin.css" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="../assets/css/default.min.css"/>
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="../assets/css/semantic.min.css"/>
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>  
  <link rel="stylesheet" href="../assets/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<div class="login">
  <body class="text-center">
    <form class="form-signin" id="formIngreso">
      <img class="mb-4 mt-3" src="../Pictures/LogoC.png" alt="" width="72" height="72">

      <h1 id="titleIngresoUsuario" class="h3 mb-4 font-weight-normal">Ingresar nuevo Usuario</h1>
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

    <button class="btn" type="submit" style="border: none; outline: none; height: 40px; color: #fff; font-size: 16px; background: rgb(163, 16, 16); cursor: pointer; border-radius: 20px; font-weight: bold;"><a href="../Views/usuarios.php" style="text-decoration: none;  color: #fff;">Cancelar</a></button>

    <!-- JavaScript -->
    <script src="../assets/js/alertify.min.js"></script>
    <!--AJAX-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/Sign.js" charset="utf-8"></script>
  </body>
</div>
</html>
