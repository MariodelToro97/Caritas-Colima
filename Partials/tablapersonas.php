<div id="tablaActividades" class="table-responsive">
<!--Inicio de tabla de Actividades-->
<table id ="EditarTablaModalpersonas" class="table table-sm table-striped table-bordered">
  <thead style="background: rgba(240, 47, 47, 0.84);" class="text-white">
    <tr class="text-center" style="font-size: 13px;">
      <!--<th scope="col">ID</th>-->
      <th scope="col">Número de caso</th>
      <th scope="col">Fecha</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Nombre</th>
      <th scope="col">Calle</th>
      <th scope="col">Número</th>
      <th scope="col">Colonia</th>
      <th scope="col">Municipio</th>
      <th scope="col">Código Postal</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Lugar de nacimiento</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">CURP</th>
      <th scope="col">Escolaridad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <?php
  $sql="SELECT * FROM personas";
  /*
  //$sql = "SELECT * FROM actividades";
  if ($_SESSION['rol'] == 1) {
    $sql = "SELECT idActividades, idRol, idInstitucion,  ins.nombreInstitucion as nombreInstitucion, DATE_FORMAT(fechaActividad,'%d/%m/%Y') AS fecha, fechaActividad, asistentesActividad, despensasActividad, actividadExtra, institucionUno, institucionDos, voluntarioActividad, actividadUno, actividadDos
            FROM instituciones as ins INNER JOIN actividades as ac
                  on ac.idInstitucion = ins.idInstituciones
            ORDER BY fechaActividad";
  } else {
    $numero = $_SESSION['rol'];

    $sql = "SELECT idActividades, idRol, idInstitucion,  ins.nombreInstitucion as nombreInstitucion, DATE_FORMAT(fechaActividad,'%d/%m/%Y') AS fecha, fechaActividad, asistentesActividad, despensasActividad, actividadExtra, institucionUno, institucionDos, voluntarioActividad, actividadUno, actividadDos
            FROM instituciones as ins INNER JOIN actividades as ac
                  on ac.idInstitucion = ins.idInstituciones
            WHERE idRol = $numero
            ORDER BY fechaActividad";
  }
  */

  $result = mysqli_query($conexion, $sql);

  $contador = 0;

  while($mostrar=mysqli_fetch_array($result)){
    $contador++;
    ?>
    <tr class="text-center" style="font-size: 13px; background: rgba(255, 0, 0, 0.44);">
    <td><?php echo utf8_encode ($mostrar['idcaso']) ?></td>
    <td><?php echo ($mostrar['fecha']) ?></td>
      <td><?php echo utf8_encode ($mostrar['apellidop']) ?></td>
      <td><?php echo utf8_encode ($mostrar['apellidom']) ?></td>
      <td><?php echo utf8_encode ($mostrar['Nombre']) ?></td>
      <td><?php echo utf8_encode($mostrar['Calle'] )?></td>
      <td><?php echo ($mostrar['numero']) ?></td>
      <td><?php echo utf8_encode ($mostrar['colonia']) ?></td>
      <td><?php echo utf8_encode($mostrar['municipio']) ?></td>
      <td><?php echo ($mostrar['CP']) ?></td>
      <td><?php echo ($mostrar['Telefono']) ?></td>
      <td><?php echo ($mostrar['Edad']) ?></td>
      <td><?php echo ($mostrar['sexo']) ?></td>
      <td><?php echo ($mostrar['FechaNac']) ?></td>
      <td><?php echo utf8_encode($mostrar['LugarNac']) ?></td>
      <td><?php echo utf8_encode($mostrar['EstadoCiv']) ?></td>
      <td><?php echo ($mostrar['CURP']) ?></td>
      <td><?php echo utf8_encode($mostrar['Escolaridad']) ?></td>
        
      <td>
        <button id="" class="btn btn-info btn-sm" value="<?php echo $mostrar['idcaso'] ?>" name="<?php echo $contador ?>" type="button" onclick="acomodarEditarpersonas(this)" data-toggle="modal" data-target="#agregarpersona">Editar Campo</button>
        <button class="btn btn-danger btn-sm" value="<?php echo $mostrar['idActividades'] ?>" type="button" name="<?php echo utf8_encode($mostrar['actividadUno']) ?>" data-toggle="modal" data-target="#deletePersona" onclick="editarDelete(this)">Eliminar Persona</button>
      </td>

    </tr>
    <?php
  }
  ?>

</table>
<!--Fin de la tabla de Actividades-->
</div>
