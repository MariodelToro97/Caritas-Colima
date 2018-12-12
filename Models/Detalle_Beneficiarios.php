<?php

require '../Models/database.php';

$message = '';

//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
if (!empty($_POST['idBen']) && !empty($_POST['idAc'])) {
      $sql = "INSERT INTO DetalleBeneficiarios (idBeneficiarios, idActividad) VALUES  (:idB, :idA)";
      $stmt = $conn->prepare($sql);
      //Inicializa cada una de las variables con su respectivo valor, por el método POST
      $stmt->bindParam(':idB', $_POST['idBen']);
      $stmt->bindParam(':idA', $_POST['idAc']);

      if ($stmt->execute()) {
        $message = 'La inserción se completó satisfactoriamente';
        header('Location: ../Views/Menu.php');
      } else {
        $message = 'Ocurrió un error. ¡Por favor vuelva a insertar los datos!';
        header('Location: DetalleBeneficiaros.php');
        exit;
      }
} else {
    //En caso de haber inputs vacíos muestra el mensaje de error
  $message = 'No deje espacios en blanco';
}
 ?>
 