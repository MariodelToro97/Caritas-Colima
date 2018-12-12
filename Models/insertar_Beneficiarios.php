<?php

require '../Models/database.php';

$message = '';

//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
if (!empty($_POST['nom']) && !empty($_POST['tipo'])) {
      $sql = "INSERT INTO Beneficiarios (Nombre, tipoUsuario) VALUES (:name, :type)";
      $stmt = $conn->prepare($sql);
      //Inicializa cada una de las variables con su respectivo valor, por el método POST
      $stmt->bindParam(':name', $_POST['nom']);
      $stmt->bindParam(':type', $_POST['tipo']);

      if ($stmt->execute()) {
        $message = 'Se ha guardado correctamente';
        header('Location: ../Views/Beneficiarios.php'); //VERIFICAR QUE PEDO
      } else {
        $message = 'Ocurrió un error vuelva a intentar';
        header('Location: insertar_Beneficiarios.php');
        exit;
      }
} else {
    //En caso de haber inputs vacíos muestra el mensaje de error
  $message = 'No deje espacios en blanco';
}
 ?>
 