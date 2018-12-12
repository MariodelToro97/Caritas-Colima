<div class="container" id="tablaInstituciones">
  <!--Inicio de la tabla de Instituciones-->
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Grupo</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <?php
    $sql = "SELECT * from beneficiarios";
    $result = mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){

      ?>
      <tr>
        <td><?php echo $mostrar['idBeneficiarios'] ?></td>
        <td><?php echo $mostrar['Nombre'] ?></td>
        <td><?php echo $mostrar['tipoUsuario'] ?></td>

      </tr>
      <?php
    }
    ?>
  </table>
  <!--Fin de la tabla de Instituciones-->
</div>
