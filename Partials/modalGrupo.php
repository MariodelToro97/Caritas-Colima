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
        <form id="formGrupo">
          <div class="modal-body">
          <div class="form-group">
            <label  id="labelNomGrupohidden" type="hidden" for="nomGrupoHidden">Nombre actual del grupo</label>
            <input type="text" id="nomGrupohidden" type="hidden" name="nombreGrupoHidden" class="form-control" disabled>

            <div>
              <span id="labelNomGrupo" for="nomGrupo" style="float: left;">Nombre del Grupo:</span>
              <span id="contadorGrupo" style="font-size: 12px; float: right;" class="text-success mt-1 font-weight-bold">150 caracteres restantes</span>
            </div>
            <input type="text" id="nomGrupo" name="nombreGrupo" class="form-control" onkeyup="contadorGrupo(this)" maxlength="150" placeholder="Nombre del Grupo" required="" autocomplete="off">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <input id="btnSaveGroup" type="submit" value="Guardar" class="btn btn-success">
          </div>
        </form>
    </div>
  </div>
</div>
<!--Fin del modal de agregar Grupo-->
