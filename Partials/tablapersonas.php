<div id="tablapersonas" class="table-responsive">
  <!--Inicio de tabla de Actividades-->
  <table id ="EditarTablaModalPersonas" class="table table-sm table-striped table-bordered">
    <thead style="background: rgba(240, 47, 47, 0.84);" class="text-white">
      <tr class="text-center" style="font-size: 13px;">
        <!--<th scope="col">ID</th>-->
        <!--<th scope="col">Número de caso</th>-->
        <th scope="col">Fecha</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Nombre</th>
        <th scope="col">Calle</th>
        <th scope="col">Número</th>
        <th scope="col">Colonia</th>
        <th scope="col">Municipio</th>
        <th scope="col">CP</th>
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

    $result = mysqli_query($conexion, $sql);

    $contador = 0;

    while($mostrar=mysqli_fetch_array($result)){
      $contador++;
      ?>
      <tr class="text-center" style="font-size: 13px; background: rgba(255, 0, 0, 0.44);">
        <td hidden><?php echo utf8_encode ($mostrar['idcaso']) ?></td>

        <?php
        if ($mostrar['fecha'] == '0000-00-00') {
          $mostrar['fecha'] = '----';
        }
        ?>

        <td><?php echo ($mostrar['fecha']) ?></td>
        <td><?php echo utf8_encode ($mostrar['apellidop']) ?></td>
        <td><?php echo utf8_encode ($mostrar['apellidom']) ?></td>
        <td><?php echo utf8_encode ($mostrar['Nombre']) ?></td>

        <?php
        if ($mostrar['Calle'] == '') {
          $mostrar['Calle'] = '----';
        }
        ?>

        <td><?php echo utf8_encode($mostrar['Calle'] )?></td>

        <?php
        if ($mostrar['numero'] == 0) {
          $mostrar['numero'] = '----';
        }
         ?>

        <td><?php echo ($mostrar['numero']) ?></td>

        <?php
        if ($mostrar['colonia'] == '') {
          $mostrar['colonia'] = '----';
        }
        ?>

        <td><?php echo utf8_encode ($mostrar['colonia']) ?></td>

        <?php
        if ($mostrar['municipio'] == '') {
          $mostrar['municipio'] = '----';
        }
        ?>

        <td><?php echo utf8_encode($mostrar['municipio']) ?></td>

        <?php
        if ($mostrar['CP'] == 0) {
          $mostrar['CP'] = '--';
        }
         ?>

        <td><?php echo ($mostrar['CP']) ?></td>

        <?php
        if ($mostrar['Telefono'] == 0) {
          $mostrar['Telefono'] = '----';
        }
         ?>

        <td><?php echo ($mostrar['Telefono']) ?></td>

        <?php
        if ($mostrar['Edad'] == 0) {
          $mostrar['Edad'] = '----';
        }
         ?>

        <td><?php echo ($mostrar['Edad']) ?></td>

        <?php
        switch ($mostrar['sexo']) {
          case 1:
            $mostrar['sexo'] = 'F';
            break;

          case 2:
            $mostrar['sexo'] = 'M';
            break;
        }
         ?>

        <td><?php echo ($mostrar['sexo']) ?></td>

        <?php
        if ($mostrar['FechaNac'] == '0000-00-00') {
          $mostrar['FechaNac'] = '----';
        }
        ?>

        <td><?php echo ($mostrar['FechaNac']) ?></td>

        <?php
        if ($mostrar['LugarNac'] == '') {
          $mostrar['LugarNac'] = '----';
        }
        ?>

        <td><?php echo utf8_encode($mostrar['LugarNac']) ?></td>

        <?php
        switch ($mostrar['EstadoCiv']) {
          case 1:
            $mostrar['EstadoCiv'] = 'Soltero/a';
            break;

          case 2:
            $mostrar['EstadoCiv'] = 'Comprometido/a';
            break;

          case 3:
          $mostrar['EstadoCiv'] = 'Casado/a';
          break;

          case 4:
          $mostrar['EstadoCiv'] = 'Unión libre';
          break;

          case 5:
          $mostrar['EstadoCiv'] = 'Separado/a';
          break;

          case 6:
          $mostrar['EstadoCiv'] = 'Divorciado/a';
          break;

          case 7:
          $mostrar['EstadoCiv'] = 'Viudo/a';
          break;
        }
        ?>

        <td><?php echo utf8_encode($mostrar['EstadoCiv']) ?></td>
        <td><?php echo ($mostrar['CURP']) ?></td>

        <?php
        switch ($mostrar['Escolaridad']) {
          case 1:
            $mostrar['Escolaridad'] = 'Ninguna';
            break;

          case 2:
            $mostrar['Escolaridad'] = 'Preescolar';
            break;

          case 3:
            $mostrar['Escolaridad'] = 'Primaria';
            break;

          case 4:
            $mostrar['Escolaridad'] = 'Secundaria';
            break;

          case 5:
            $mostrar['Escolaridad'] = 'Preparatoria';
            break;

          case 6:
            $mostrar['Escolaridad'] = 'Carrera Técnica';
            break;

          case 7:
            $mostrar['Escolaridad'] = 'Licenciatura';
            break;

          case 8:
            $mostrar['Escolaridad'] = 'Maestría';
            break;

          case 9:
            $mostrar['Escolaridad'] = 'Doctorado';
            break;
        }
        ?>

        <td><?php echo utf8_encode($mostrar['Escolaridad']) ?></td>

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
