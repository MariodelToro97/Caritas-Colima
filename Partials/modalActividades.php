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
      <form id="formActividad">
        <div class="modal-body">
          <div class="form-group">
            <label><span class="text-danger font-weight-bold">*</span> Actividad Requerida</label>
            <div class="row">
              <div class="col-md-6">
                <label for="selectinstitucion">Institución o Grupo: <span class="text-danger font-weight-bold">*</span></label>
                <div class="Refill">
                  <select class="custom-select" name="institucion" id="selectinstitucion" required="">
                    <option value="" selected>Seleccione una opción</option>

                    <?php
                    $sql = "SELECT * from instituciones ORDER BY nombreInstitucion";
                    $result = mysqli_query($conexion, $sql);

                    while($mostrar=mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $mostrar['idInstituciones'] ?>"><?php echo $mostrar['nombreInstitucion'] ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label for="fechaActividad">Fecha de realización: <span class="text-danger font-weight-bold">*</span></label>
                <input type="date" name="fecha" class="form-control" id="fechaActividad" required = "">
              </div>
              <div class="col-md-10">
                <div>
                  <span class="my-2" style="float: left;">Apoyo Extra:</span>
                  <span id="contadorApoyo" style="font-size: 12px; float: right;" class="text-success mt-2 font-weight-bold">1000 caracteres restantes</span>
                </div>
                <textarea onkeyup="contador(this);" class="form-control mt-0" maxlength="1000" name="apoyoExtra" rows="8" cols="80" placeholder="¿Cuál fue el apoyo extra que se les dió?"></textarea>
              </div>
              <div class="form-group col-md-2">
                <label class="mt-4" for="numeroAsistentes">Número de Asistentes: <span class="text-danger font-weight-bold">*</span></label>
                <input type="number" min="0" name="numeroAsistentes" class="form-control" id= "numeroAsistentes" placeholder="0" required = "">
                <label class="mt-2" for="numeroDespensas">Número de Despensas: <span class="text-danger font-weight-bold">*</span></label>
                <input type="number" min="0" name="numeroDespensas" class="form-control" id= "numeroDespensas" placeholder="0" required = "">
              </div>
              <div class="col-md-6 mt-2">
                <label for="Institucion1">Institución 1: <span class="text-danger font-weight-bold">*</span></label>
                <div class="efill">
                  <select class="custom-select" name="institucionUno" id="Institucion1" required = "">
                    <option value="" selected>Seleccione una opción</option>

                    <?php
                    $sql = "SELECT * from instituciones ORDER BY nombreInstitucion";
                    $result = mysqli_query($conexion, $sql);

                    while($mostrar=mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $mostrar['idInstituciones'] ?>"><?php echo $mostrar['nombreInstitucion'] ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mt-2">
                <label for="Institucion2">Institución 2:</label>
                <div class="fill">
                  <select class="custom-select" name="institucionDos" id="Institucion2">
                    <option selected>Seleccione una opción</option>

                    <?php
                    $sql = "SELECT * from instituciones ORDER BY nombreInstitucion";
                    $result = mysqli_query($conexion, $sql);

                    while($mostrar=mysqli_fetch_array($result)){
                      ?>
                      <option value="<?php echo $mostrar['idInstituciones'] ?>"><?php echo $mostrar['nombreInstitucion'] ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div>
                  <span class="my-2" style="float: left;">Voluntarios Practicantes:</span>
                  <span id="contadorvoluntarios" style="font-size: 12px; float: right;" class="text-success mt-2 font-weight-bold">100 caracteres restantes</span>
                </div>
                <textarea onkeyup="contadorDos(this);" class="form-control mt-0" maxlength="100" name="voluntariosPrac" rows="2" cols="80" placeholder="¿Quiénes apoyaron como voluntarios?"></textarea>
              </div>
              <div class="col-md-6">
                <div>
                  <span class="my-2" style="float: left;">Actividad 1: <span class="text-danger font-weight-bold">*</span></span>
                  <span id="contadorActividadUno" style="font-size: 12px; float: right;" class="text-success mt-2 font-weight-bold">1000 caracteres restantes</span>
                </div>
                <textarea id="actividadUno" onkeyup="contadorTres(this);" class="form-control mt-0" maxlength="1000" name="actividadUno" rows="8" cols="80" placeholder="¿Cuál fue la principal actividad realizada?" required = ""></textarea>
              </div>
              <div class="col-md-6">
                <div>
                  <span class="my-2" style="float: left;">Actividad 2:</span>
                  <span id="contadorActividadDos" style="font-size: 12px; float: right;" class="text-success mt-2 font-weight-bold">1000 caracteres restantes</span>
                </div>
                <textarea onkeyup="contadorCuatro(this);" class="form-control mt-0" maxlength="1000" name="actividadDos" rows="8" cols="80" placeholder="¿Cuál fue la actividad secundaria que se realizó?"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input id="guardarActividad" type="submit" class="btn btn-success" value="Guardar">
        </div>
      </form>
    </div>
  </div>
</div>
<!--Fin del modal de actividades-->
