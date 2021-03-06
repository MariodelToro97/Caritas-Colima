<?php require '../Models/checarCredenciales.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Actividades</title>
  <?php require '../Partials/hojaEstilos.php'; ?>
</head>
<body>

  <div style="padding-top: 80px;" class="container">    
    <form method="post" class="form" action="../Peticiones/Reporte_Actividades.php">
        <div class="form-group">
          <center>
            <h1 class= "mx-5 my-0 float-center">Actividades</h1>
          </center>          
        </div>
        <div class= "form-group float-right">
          <button id="btnGenerarActividad" type="submit" name="GenerarReporte" class="btn btn-success float-right mx-5">Generar Reporte</button>
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

  <div style="padding-top: 20px;">
    <?php
    require '../Partials/tablaActividades.php';
    require '../Partials/modalGrupo.php';
    require '../Partials/modalActividades.php';
    require '../Partials/modalCerrar.php';
    require '../Partials/modalEliminarInstituto.php';
    require '../Partials/modalPersonas.php';
    ?>
  </div>

  <!--Creación de botón flotante-->
  <button id="btnAgregarGrupo" title="Agregar una nueva actividad a la base de datos" class=" boton cambio btn btn-danger rounded-circle border border-white" data-toggle="modal" data-target="#agregarActividad" style="display:scroll; position:fixed;; bottom:5%; right: 5%;"><i class="fas fa-plus-circle fa-2x"></i></button>
  <!--Fin del botón flotante-->

  <?php require '../Partials/hojaScript.php'; ?>
</body>
</html>
