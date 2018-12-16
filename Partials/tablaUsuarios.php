<div class="container table-responsive" id="tablaUsuarios">
  <!--Inicio de la tabla de Instituciones-->
  <table class="table table-striped table-bordered">
    <thead style="background: rgba(240, 47, 47, 0.84);" class="text-white">
      <tr class="text-center">
        <!--<th scope="col">ID</th>-->
        <th scope="col">Usuario</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <?php
    $sql = "SELECT idUsuarios FROM usuarios ORDER BY idUsuarios";
    $result = mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){

      ?>
      <tr class="text-center font-weight-bold font-italic" style="background: rgba(255, 0, 0, 0.44);">
        <!--<td><?php //echo $mostrar['idInstituciones'] ?></td>-->
        <td><?php echo $mostrar['idUsuarios'] ?></td>
        <td>
          <button value ="<?php echo $mostrar['idUsuarios'] ?>" class="btn btn-info" type="button" onclick="">Editar Usuario</button>
          <button value ="<?php echo $mostrar['idUsuarios'] ?>" class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteInstituto" onclick="">Eliminar Usuario</button>
        </td>

      </tr>
      <?php
    }
    ?>
  </table>
  <!--Fin de la tabla de Instituciones-->
</div>
