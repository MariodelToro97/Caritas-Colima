<!--Inicio del modal de editar Usuario-->
<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="tituloEditarUsuarioLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="tituloEditarUsuarioLabel">Editar Usuario</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form id="formUpdateUser">
      <div class="modal-body">
        <label for="editUser">Usuario:</label>
        <input id="editUser" type="text" name="usuario" disabled placeholder="Usuario" autofocus="" class="form-control rounded" required = "" autocomplete="off">
        <label class="mt-2" for="primerContraUser">Contraseña</label>
        <input id="primerContraUser" type="password" name="password" class="form-control rounded" placeholder="Contraseña" required = "" autocomplete="off">
        <label class="mt-2" for="confirmContraUser">Confirmar Contraseña</label>
        <input id="confirmContraUser" type="password" name="confirmPassword" class="form-control rounded " placeholder="Confirmar Contraseña" required = "" autocomplete="off">
        <label class="mt-2" for="rolUsuarioUpdate">Rol que desempeña</label>
        <select class="custom-select " name="rol" id="rolUsuarioUpdate" required="" class="form-control rounded">
          <?php
          $sql = "SELECT * from roles";
          $result = mysqli_query($conexion, $sql);

          while($mostrar=mysqli_fetch_array($result)){
            if ($_SESSION['rol'] == $mostrar['idRoles']) {
          ?>
          <option selected value="<?php echo $mostrar['idRoles'] ?>"><?php echo utf8_encode($mostrar['nombreRol']) ?></option>
          <?php
        } else { ?>
          <option value="<?php echo $mostrar['idRoles'] ?>"><?php echo utf8_encode($mostrar['nombreRol']) ?></option>
        <?php }
          }
          ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <input type="submit" class="btn btn-danger" id="btnUpdateUser" value = "Si">
      </div>
    </form>
  </div>
</div>
</div>
<!--Fin del modal de editar Usuario-->
