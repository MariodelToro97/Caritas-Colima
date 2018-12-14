<div class="container table-responsive" id="tablaInstituciones">
  <!--Inicio de la tabla de Instituciones-->
  <table class="table table-dark">
    <thead>
      <tr>
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
      <tr>
        <!--<td><?php //echo $mostrar['idInstituciones'] ?></td>-->
        <td><?php echo $mostrar['nombreInstitucion'] ?></td>
        <td>
          <button value ="<?php echo $mostrar['idInstituciones'] ?>" name="<?php echo $mostrar['nombreInstitucion'] ?>" class="btn btn-info" type="button">Editar Campo</button>
          <button value ="<?php echo $mostrar['idInstituciones'] ?>" name="<?php echo $mostrar['nombreInstitucion'] ?>" class="btn btn-danger" type="button" name="eliminarInstituto" data-toggle="modal" data-target="#deleteInstituto" onclick="editarModalEliminar(this);">Eliminar Instituto</button>
        </td>

      </tr>
      <?php
    }
    ?>
  </table>
  <!--Fin de la tabla de Instituciones-->
</div>
