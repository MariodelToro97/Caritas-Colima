<div id="tablaActividades" class="table-responsive">
<!--Inicio de tabla de Actividades-->
<table id ="EditarTablaModalActividad" class="table table-sm table-striped table-bordered">
  <thead style="background: rgba(240, 47, 47, 0.84);" class="text-white">
    <tr class="text-center" style="font-size: 13px;">
      <!--<th scope="col">ID</th>-->
      <th scope="col">Grupo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Asistentes</th>
      <th scope="col">Despensas</th>
      <th scope="col">Apoyo Extra</th>
      <th scope="col">Institución 1</th>
      <th scope="col">Institución 2</th>
      <th scope="col">Voluntarios</th>
      <th scope="col">Actividad 1</th>
      <th scope="col">Actividad 2</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <?php
  //$sql = "SELECT * FROM actividades";
  if ($_SESSION['rol'] == 1) {
    $sql = "SELECT idActividades, idInstitucion,  ins.nombreInstitucion as nombreInstitucion, DATE_FORMAT(fechaActividad,'%d/%m/%Y') AS fecha, fechaActividad, asistentesActividad, despensasActividad, actividadExtra, institucionUno, institucionDos, voluntarioActividad, actividadUno, actividadDos
            FROM instituciones as ins INNER JOIN actividades as ac
                  on ac.idInstitucion = ins.idInstituciones
            ORDER BY fechaActividad";
  } else {
    $numero = $_SESSION['rol'];

    $sql = "SELECT idActividades, idInstitucion,  ins.nombreInstitucion as nombreInstitucion, DATE_FORMAT(fechaActividad,'%d/%m/%Y') AS fecha, fechaActividad, asistentesActividad, despensasActividad, actividadExtra, institucionUno, institucionDos, voluntarioActividad, actividadUno, actividadDos
            FROM instituciones as ins INNER JOIN actividades as ac
                  on ac.idInstitucion = ins.idInstituciones
            WHERE idRol = $numero
            ORDER BY fechaActividad";
  }

  $result = mysqli_query($conexion, $sql);

  $contador = 0;

  while($mostrar=mysqli_fetch_array($result)){
    $contador++;

    if ($mostrar['institucionDos'] == 0) {
      $mostrar['institucionDos'] == '';
    }

    ?>
    <tr class="text-center" style="font-size: 13px; background: rgba(255, 0, 0, 0.44);">
      <td><?php echo $mostrar['nombreInstitucion'] ?></td>
      <td><?php echo $mostrar['fecha'] ?></td>
      <td><?php echo $mostrar['asistentesActividad'] ?></td>
      <td><?php echo $mostrar['despensasActividad'] ?></td>
      <td><?php echo utf8_encode($mostrar['actividadExtra']) ?></td>
      <td><?php echo $mostrar['institucionUno'] ?></td>
      <td><?php echo $mostrar['institucionDos'] ?></td>
      <td><?php echo utf8_encode($mostrar['voluntarioActividad']) ?></td>
      <td><?php echo utf8_encode($mostrar['actividadUno']) ?></td>
      <td><?php echo utf8_encode($mostrar['actividadDos']) ?></td>
      <td hidden><?php echo $mostrar['idInstitucion'] ?></td>
      <td hidden><?php echo $mostrar['fechaActividad'] ?></td>
      <td>
        <button class="btn btn-info btn-sm" value="<?php echo $mostrar['idActividades'] ?>" name="<?php echo $contador ?>" type="button" onclick="acomodarEditarActividades(this)" data-toggle="modal" data-target="#agregarActividad">Editar Campo</button>
        <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idActividades'] ?>" type="button" name="<?php echo utf8_encode($mostrar['actividadUno']) ?>" data-toggle="modal" data-target="#deleteInstituto" onclick="editarDelete(this)">Eliminar Actividad</button>
      </td>

    </tr>
    <?php
  }
  ?>

</table>
<!--Fin de la tabla de Actividades-->
</div>
