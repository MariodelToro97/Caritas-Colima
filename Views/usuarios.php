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

  require '../Models/conexion.php';
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Administrar Usuarios</title>
     <?php require '../Partials/hojaEstilos.php'; ?>
   </head>
   <body>

    
      <center>
        <h1 class= "mx-5 my-0 float-center" style="padding-top: 80px;">Usuarios</h1>
      </center>          
    

     <?php require '../Partials/headerAdmin.php'; ?>

     <div style="padding-top: 10px;">
       <?php
       require '../Partials/modalGrupo.php';
       require '../Partials/modalCerrar.php';
       require '../Partials/modalActividades.php';
       require '../Partials/tablaUsuarios.php';
       require '../Partials/modalEliminarInstituto.php';
       require '../Partials/modalEditarUsuario.php';
       require '../Partials/modalPersonas.php';
       ?>
     </div>

     <!--Creación de botón flotante-->
    <a id="btnAgregarUsuario" title="Agregar nuevo Usuario al sistema" name="<?php $_SESSION['Editar'] = 0; ?>" class="border border-white cambio btn btn-danger rounded-circle" style="display:scroll; position:fixed;; bottom:5%; right: 5%;" href="signup.php"><i class="fas fa-plus-circle fa-2x"></i></a>
    <!--Fin del botón flotante-->

     <?php require '../Partials/hojaScript.php'; ?>
   </body>
 </html>
