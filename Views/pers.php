<?php require '../Models/checarCredenciales.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Personas</title>
  <?php require '../Partials/hojaEstilos.php'; ?>
</head>
<body>

  <div style="padding-top: 80px;" class="container">
    <form method="post" class="form" action="../Peticiones/Reporte_Personas.php">
      <div class="form-group">
          <center>
            <h1 class= "mx-5 my-0 float-center">Personas</h1>
          </center>          
        </div>
        <div class= "form-group float-right">
          <button id="btnGenerarActividad" type="submit" name="GenerarReporte" class="btn btn-success float-right">Generar Reporte</button>
        </div>
      </form>
  </div>

  <?php
  if ($_SESSION['rol'] == 1) {
    require '../Partials/headerAdmin.php';
  } else {
    require '../Partials/header.php';
  }
  ?>

  <div style="padding-top: 50px;">
    <?php
    require '../Partials/tablapersonas.php';
    require '../Partials/modalPersonas.php';
    require '../Partials/modalGrupo.php';
    require '../Partials/modalActividades.php';
    require '../Partials/modalCerrar.php';
    require '../Partials/modalEliminarPersona.php';
    ?>
  </div>

  <!--Creación de botón flotante-->
  <button id="agregarpersona" title="Agregar una persona a la base de datos" class="boton cambio btn btn-danger rounded-circle border border-white" data-toggle="modal" data-target="#agregarpersona" style="display:scroll; position:fixed;; bottom:5%; right: 5%;"><i class="fas fa-plus-circle fa-2x"></i></button>
  <!--Fin del botón flotante-->

  <?php require '../Partials/hojaScript.php'; ?>
</body>
</html>
