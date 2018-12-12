<?php
	session_start();

	if (!isset($_SESSION['user_id'])) {
		header('Location: ../Index.php');
		exit;
	}

 ?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú Principal</title>
	<link rel="stylesheet" href="../assets/css/index_style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

	<?php require '../Partials/header.php' ?>

	<div style="padding-top: 80px;">
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Grupo</th>
      <th scope="col">Asistentes</th>
      <th scope="col">Despensas Entregadas</th>
      <th scope="col">Apoyo Extra</th>
      <th scope="col">Institución 1</th>
      <th scope="col">Institución 2</th>
      <th scope="col">Voluntarios Practicantes</th>
      <th scope="col">Actividad 1</th>
      <th scope="col">Actividad 2</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Grupo</th>
			<th scope="col">Acciones</th>
			
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
		</div>

	<!-- Modal de agregar Grupo-->
	<div class="modal fade" id="agregarGrupo" tabindex="-1" role="dialog" aria-labelledby="agregarGrupoLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="agregarGrupoLabel">Agregar Grupo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        	</button>
				</div>
				<div class="modal-body">
					<form method="post">
						<div class="form-group">
							<label for="nombreGrupo">Nombre del Grupo</label>
							<input type="text" id="nombreGrupo" class="form-control" placeholder="Nombre del Grupo">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					<button id="guardarGrupo" type="submit" class="btn btn-success">Guardar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Fin del modal de agregar Grupo-->

	<!--Creación de botón flotante-->
	<button id="btnAgregarGrupo"class="cambio btn btn-danger rounded-circle" data-toggle="modal" data-target="#agregarGrupo" style="display:scroll; position:fixed;; bottom:5%; right: 5%;"><i class="fas fa-plus-circle fa-2x"></i></button>
	<!--Fin del botón flotante-->

	<!--Inicio del modal de confirmación de cierre de sesión-->
	<div class="modal fade" id="cerrarSesion" tabindex="-1" role="dialog" aria-labelledby="cerrarSesionConfirmacion" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cerrarSesionConfirmacion">Cerrar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>¿Desea cerrar sesión?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger"><a class="text-white" style="text-decoration:none;" href="../Models/logout.php">Si</a></button>
      </div>
    </div>
  </div>
</div>
	<!--Fin del modal de confirmación de cierre de sesión-->

</body>
<script type="text/javascript" src="../js/colorScroll.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
