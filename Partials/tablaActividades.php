<div id="tablaActividades">
<!--Inicio de tabla de Actividades-->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Grupo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Asistentes</th>
      <th scope="col">Despensas Entregadas</th>
      <th scope="col">Apoyo Extra</th>
      <th scope="col">Institución 1</th>
      <th scope="col">Institución 2</th>
      <th scope="col">Voluntarios Practicantes</th>
      <th scope="col">Actividad 1</th>
      <th scope="col">Actividad 2</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <?php
  $sql = "SELECT * from actividades";
  $result = mysqli_query($conexion, $sql);

  while($mostrar=mysqli_fetch_array($result)){

    ?>
    <tr>
      <!-- <td><?php //echo $mostrar['idActividades'] ?></td> -->
      <td><?php echo $mostrar['idInstitucion'] ?></td>
      <td><?php echo $mostrar['fechaActividad'] ?></td>
      <td><?php echo $mostrar['asistentesActividad'] ?></td>
      <td><?php echo $mostrar['despensasActividad'] ?></td>
      <td><?php echo utf8_encode($mostrar['actividadExtra']) ?></td>
      <td><?php echo $mostrar['institucionUno'] ?></td>
      <td><?php echo $mostrar['institucionDos'] ?></td>
      <td><?php echo utf8_encode($mostrar['voluntarioActividad']) ?></td>
      <td><?php echo utf8_encode($mostrar['actividadUno']) ?></td>
      <td><?php echo utf8_encode($mostrar['actividadDos']) ?></td>
      <td>
        <button class="btn btn-info" value="<?php echo $mostrar['idActividades'] ?>" type="button">Editar Campo</button>
        <button class="btn btn-danger" value="<?php echo $mostrar['idActividades'] ?>" type="button" name="eliminarInstituto">Eliminar Actividad</button>
      </td>

    </tr>
    <?php
  }
  ?>

</table>
<!--Fin de la tabla de Actividades-->
</div>
