<!-- Modal de agregar Grupo-->
<div class="modal fade" id="agregarGrupo" tabindex="-1" role="dialog" aria-labelledby="agregarGrupoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarGrupoLabel">Agregar Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="../Models/insertarGrupo.php" method="post" id="formGrupo">
          <div class="modal-body">
          <div class="form-group">
            <label for="nomGrupo">Nombre del Grupo</label>
            <input type="text" id="nomGrupo" name="nombreGrupo" class="form-control" placeholder="Nombre del Grupo" required="" autofocus>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button id="guardarGrupo" type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!--Fin del modal de agregar Grupo-->
