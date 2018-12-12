<!--Inicio del modal de actividades-->
<div class="modal fade" id="agregarActividad" tabindex="-1" role="dialog" aria-labelledby="agregarActividadLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarActividadLabel">Agregar Actividad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../Models/insertarActividad.php" method="post" id="formActividad">
        <div class="modal-body">
          <div class="form-group">
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button id="guardarActividad" type="submit" class="btn btn-success">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--Fin del modal de actividades-->
