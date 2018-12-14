<?php

require '../Models/database.php';

$message = '';

//Verifica que no hayan quedado inputs vacíos durante el ingreso de los datos
if (!empty($_POST['institu']) && !empty($_POST['fechAc']) && !empty($_POST['asistenAc']) 
&& !empty($_POST['despeAc'])&& !empty($_POST['actEx'])&& !empty($_POST['insUNO'])&& !empty($_POST['insDOS'])
&& !empty($_POST['volun'])&& !empty($_POST['AcUNO'])&& !empty($_POST['AcDOS'])) {
      $sql = "INSERT INTO Actividades (idInstitucion, fechaActividad, asistentesActividad, despensaActividad, actividadExtra, institutoUno, institutoDos, voluntarioActividad, actividadUno, actividadDos) VALUES 
      (:idins, :fechA, :asisAc, :despAc, :actE, :insU, :insD, :volunAc, :actU, :actD)";
      $stmt = $conn->prepare($sql);
      //Inicializa cada una de las variables con su respectivo valor, por el método POST
      $stmt->bindParam(':idins', $_POST['institu']);
      $stmt->bindParam(':fechA', $_POST['fechAc']);
      $stmt->bindParam(':asisAc', $_POST['asistenAc']);
      $stmt->bindParam(':desAc', $_POST['despeAc']);
      $stmt->bindParam(':actE', $_POST['actEx']);
      $stmt->bindParam(':insU', $_POST['insUNO']);
      $stmt->bindParam(':insD', $_POST['insDOS']);
      $stmt->bindParam(':volunAc', $_POST['volun']);
      $stmt->bindParam(':actU', $_POST['AcUNO']);
      $stmt->bindParam(':actD', $_POST['AcDOS']);

      if ($stmt->execute()) {
        $message = 'La inserción se completó satisfactoriamente';
        header('Location: ../Views/Menu.php');
      } else {
        $message = 'Ocurrió un error al insertar la actividad. ¡Por favor vuelva a insertar los datos!';
        header('Location: Insertar_Actividad.php');
        exit;
      }
} else {
    //En caso de haber inputs vacíos muestra el mensaje de error
  $message = 'No deje espacios en blanco';
}
 ?>
 