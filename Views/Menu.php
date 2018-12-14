<?php require '../Models/checarCredenciales.php'; ?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú Principal</title>
	<?php require '../Partials/hojaEstilos.php'; ?>

</head>

<body>

	<?php require '../Partials/header.php'; ?>
	//require '../Partials/tablaInstitutos.php';
	<div style="padding-top: 42px;">
		<?php
			require '../Partials/modalGrupo.php';
			require '../Partials/modalCerrar.php';
			require '../Partials/modalActividades.php';
			require '../Partials/carrusel.php';
		?>
	</div>
	<?php require '../Partials/hojaScript.php'; ?>
</body>
</html>
