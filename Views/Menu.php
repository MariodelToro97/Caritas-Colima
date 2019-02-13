<?php require '../Models/checarCredenciales.php'; ?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú Principal</title>
	<?php require '../Partials/hojaEstilos.php'; ?>

</head>

<body>

	<?php
	if ($_SESSION['rol'] == 1) {
		require '../Partials/headerAdmin.php';
	} else {
		require '../Partials/header.php';
	}
	?>

	<div style="padding-top: 42px;">
		<?php
		require '../Partials/modalGrupo.php';
		require '../Partials/modalCerrar.php';
		require '../Partials/modalActividades.php';
		require '../Partials/modalPersonas.php';
		require '../Partials/carrusel.php';
		?>
	</div>
	<?php require '../Partials/hojaScript.php'; ?>
</body>
</html>
