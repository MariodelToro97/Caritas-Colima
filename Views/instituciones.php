<?php require '../Models/checarCredenciales.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grupos</title>
    <?php require '../Partials/hojaEstilos.php'; ?>
  </head>
  <body>

    <?php require '../Partials/header.php'; ?>

  	<div style="padding-top: 80px;">
      <?php
      require '../Partials/tablaInstitutos.php';
      require '../Partials/modalGrupo.php';
      require '../Partials/modalActividades.php';
      require '../Partials/modalCerrar.php';
      require '../Partials/modalEliminarInstituto.php';
       ?>
  	</div>

    <!--Creación de botón flotante-->
  	<button id="btnAgregarGrupo" title="Agregar nuevo Grupo/Institución a la Base de datos" class="border border-white cambio btn btn-danger rounded-circle" data-toggle="modal" data-target="#agregarGrupo" style="display:scroll; position:fixed;; bottom:5%; right: 5%;"><i class="fas fa-plus-circle fa-2x"></i></button>
  	<!--Fin del botón flotante-->

    	<?php require '../Partials/hojaScript.php'; ?>
  </body>
</html>
