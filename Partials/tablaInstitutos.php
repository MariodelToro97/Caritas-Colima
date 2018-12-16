<div class="container table-responsive" id="tablaInstituciones">
  <!--Inicio de la tabla de Instituciones-->
  <table class="table table-striped table-bordered">
    <thead style="background: rgba(240, 47, 47, 0.84);" class="text-white">
      <tr class="text-center">
        <!--<th scope="col">ID</th>-->
        <th scope="col">Grupo</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <?php
    $sql = "SELECT * FROM instituciones ORDER BY nombreInstitucion";
    $result = mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){

      ?>
      <tr class="text-center font-weight-bold font-italic" style="background: rgba(255, 0, 0, 0.44);">
        <!--<td><?php //echo $mostrar['idInstituciones'] ?></td>-->
        <td><?php echo $mostrar['nombreInstitucion'] ?></td>
        <td>
          <button class="btn btn-success" value="<?php echo $mostrar['idInstituciones']  ?>" name="<?php echo $mostrar['nombreInstitucion'] ?>" data-toggle="modal" data-target="#agregarActividad" onclick="ponerGrupo(this)" type="button" onload="document.forms['formActividad']['selectinstitucion'].value = <?php echo $mostrar['idInstituciones']  ?>">Agregar Actividad</button>
          <button value ="<?php echo $mostrar['idInstituciones'] ?>" name="<?php echo $mostrar['nombreInstitucion'] ?>" class="btn btn-info" type="button" onclick="editarModalEditar(this);">Editar Grupo</button>
          <button value ="<?php echo $mostrar['idInstituciones'] ?>" name="<?php echo $mostrar['nombreInstitucion'] ?>" class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteInstituto" onclick="editarModalEliminar(this);">Eliminar Instituto</button>
        </td>

      </tr>
      <?php
    }
    ?>
  </table>
  <!--Fin de la tabla de Instituciones-->
</div>
