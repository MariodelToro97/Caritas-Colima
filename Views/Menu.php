<?php require '../Models/checarCredenciales.php'; ?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú Principal</title>
	<link rel="stylesheet" href="../assets/css/index_style.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--FontAwesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

	<?php require '../Partials/header.php'; ?>
	//require '../Partials/tablaInstitutos.php';
	<div style="padding-top: 80px;">
		<?php
			require '../Partials/modalGrupo.php';
			require '../Partials/modalCerrar.php';
			require '../Partials/modalActividades.php';
		?>
	</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 100vh">
	  <img class="d-block w-100" src="../Pictures/Ca1.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    	<h5>Cáritas Colima</h5>
    	<p>Suministro de alimentos</p>
  		</div>
    	</div>
    	<div class="carousel-item" style="height: 100vh">
	  <img class="d-block w-100" src="../Pictures/Ca2.jpg" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>Cáritas Colima</h5>
    <p>bla bla bla</p>
  </div>
	</div>
	<div class="carousel-item" style="height: 100vh">
	  <img class="d-block w-100" src="../Pictures/Ca3.jpg" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    	<h5>Cáritas Colima</h5>
    	<p>bla bla bla</p>
  		</div>
			</div>
	<div class="carousel-item" style="height: 100vh">
	  <img class="d-block w-100" src="../Pictures/Ca5.jpg" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    	<h5>Cáritas Colima</h5>
    	<p>bla bla bla</p>
  		</div>
   		 </div>
    	<div class="carousel-item" style="height: 100vh">
	  <img class="d-block w-100" src="../Pictures/Ca4.jpg" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>Cáritas Colima</h5>
    <p>bla bla</p>
  </div>
  	  </div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
 		 </a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
   			 <span class="sr-only">Next</span>
  			</a>
		</div>
	
	<!--Creación de botón flotante-->
	<button id="btnAgregarGrupo"class="cambio btn btn-danger rounded-circle" data-toggle="modal" data-target="#agregarGrupo" style="display:scroll; position:fixed;; bottom:5%; right: 5%;"><i class="fas fa-plus-circle fa-2x"></i></button>
	<!--Fin del botón flotante-->
	<script src="../assets/js/Menu.js" charset="utf-8"></script>
	<!--AJAX-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
