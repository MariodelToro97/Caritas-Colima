<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: ../Index.php');
  exit;
} else {
  if ($_SESSION['rol'] != 1) {
    header('Location: Menu.php');
    exit;
  }
}

	$conexion = mysqli_connect('localhost', 'root', '', 'caritascolima', 3306);
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Administrar Usuarios</title>
     <?php require '../Partials/hojaEstilos.php'; ?>
   </head>
   <body>

     <?php require '../Partials/headerAdmin.php'; ?>

     <div style="padding-top: 90px;">
       <?php
       require '../Partials/modalGrupo.php';
       require '../Partials/modalCerrar.php';
       require '../Partials/modalActividades.php';
       require '../Partials/tablaUsuarios.php';
       ?>
     </div>

     <?php require '../Partials/hojaScript.php'; ?>
   </body>
 </html>
