<!--Inicio del modal de actividades-->
<div class="modal fade" id="agregarActividad" tabindex="-1" role="dialog" aria-labelledby="agregarActividadLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
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
            <div class="row">
              <div class="col-md-6">
                <label for="selectinstitucion">Institución:</label>
                <select class="custom-select" name="institucion" id="selectinstitucion" required = "">
                  <option selected>Seleccione una opción</option>

                  <?php
                  $sql = "SELECT * from instituciones";
                  $result = mysqli_query($conexion, $sql);

                  while($mostrar=mysqli_fetch_array($result)){
                  ?>
                  <option><?php echo $mostrar['nombreInstitucion'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="fechaActividad">Fecha de realización:</label>
                <input type="date" name="fecha" class="form-control" id="fechaActividad" required = "">
                <label class="mt-2" for="numeroDespensas">Número de Despensas:</label>
                <input type="number" name="numeroDespensas" class="form-control" id= "numeroDespensas" placeholder="0" required = "">
              </div>
              <div class="col-md-3">
                <label class="mt-4" for="numeroAsistentes">Número de Asistentes:</label>
                <input type="number" name="numeroAsistentes" class="form-control" id= "numeroAsistentes" placeholder="0" required = "">
              </div>
            </div>
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
