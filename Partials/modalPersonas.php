<!--Inicio del modal de actividades-->
<div class="modal fade" id="agregarpersona" tabindex="-1" role="dialog" aria-labelledby="agregarActividadLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregarActividadLabel">Agregar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formActividad">
        <div class="modal-body">
          <div class="form-group">
            <label ><span class="text-danger font-weight-bold"></span> Datos del beneficiario</label>
            <div class="row">
              <div class="col-md-6">
              <!--<
                label for="numreg"><span class="text-danger font-weight-bold">*</span>Número de registro</label>
                <input id="numreg" class="form-control" name="numreg" value="" type="number" require >
                -->
                <div class="col-md-9">
            <label for="FechR">Fecha de realización de reporte: <span class="text-danger font-weight-bold">*</span></label>
              <input type="date" name="FechR" class="form-control" id="FechR" required = "">
              </div>
                  <label for="apellidopa">Apellido paterno <span class="text-danger font-weight-bold">*</span></label>
                <input id="apellidopa" class="form-control" name="apellidopa" value="" type="text" require>
                  <label for="apellidoma">Apellido materno <span class="text-danger font-weight-bold">*</span></label>
                <input id="apellidoma" class="form-control" name="apellidoma" value="" type="text" require>
                    <label for="Nombreper" >Nombre (s) <span class="text-danger font-weight-bold">*</span></label>
                <input id="Nombreper" require class="form-control" name="Nombreper" value="" type="text" require>
                    <label for="EC" >Estado Civil <span class="text-danger font-weight-bold">*</span></label>
                <input id="EC" require class="form-control" name="EC" value="" type="text" require>
                    <label for="PRUC" >CURP<span class="text-danger font-weight-bold">*</span></label>
                <input id="PRUC" require class="form-control" name="PRUC" value="" type="text" require>
              </div>

              <div class="col-md-6">
              <div class="col-md-7">
              <label for="numreg">Número de registro <span class="text-danger font-weight-bold">*</span></label>
                <input id="numreg" class="form-control" name="numreg" value="" type="number" require >
            </div>
              <label for="xose">Sexo <span class="text-danger font-weight-bold">*</span></label>
              <select class="custom-select" name="xose" id="xose" require>
              <option value="" selected >Elija una opción</option>
              <option value="1">Femenino</option>
              <option value="2">Maculino</option>
              </select>
                <label for="mientonaci">Fecha de nacimiento: <span class="text-danger font-weight-bold">*</span></label>
                  <input type="date" name="mientonaci" class="form-control" id="mientonaci" required = "">
                <label for="dade">edad <span class="text-danger font-weight-bold">*</span></label>
                  <input type="number" name="dade" id="dade" class="form-control">
                <label for="Garlunaci">Lugar de nacimiento: <span class="text-danger font-weight-bold">*</span></label>
                  <input type="text" name="Garlunaci" class="form-control" id="Garlunaci" required = "">
                <label for="laridadesco" >Escolaridad <span class="text-danger font-weight-bold">*</span></label>
                  <input id="laridadesco" require class="form-control" name="laridadesco" value="" type="text" require>
              </div>
              <div class="col-md-10">
              <label for="callep" >Calle <span class="text-danger font-weight-bold">*</span></label>
                  <input id="callep" class="form-control" name="callep" value="" type="text" require>
              </div>
              <div class="col-md-7">
              <label for="coloniaper" >Colonia<span class="text-danger font-weight-bold">*</span></label>
                  <input id="coloniaper" require class="form-control" name="coloniaper" value="" type="text">
                  <label for="municip" >Municipio<span class="text-danger font-weight-bold">*</span></label>
                  <input id="municip" require class="form-control" name="municip" value="" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="mt-4" for="numerocalle">Número de la calle<span class="text-danger font-weight-bold">*</span></label>
                <input type="number" min="0" name="numerocalle" class="form-control" id= "numerocalle" placeholder="0" required = "">
                <label class="mt-2" for="CP">Código postal <span class="text-danger font-weight-bold">*</span></label>
                <input type="text" name="CP" class="form-control" id= "CP" placeholder="0" require>
              </div>
              <div class="form-group col-md-3">
              <label for="Tel">Número telefonico<span class="text-danger font-weight-bold">*</span></label>
                <input type="tel" name="Tel" id="Tel" class="form-control"  require>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="deleteApoyame" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input id="guardarActividad" type="submit" class="btn btn-success" value="Guardar">
        </div>
      </form>
    </div>
  </div>
</div>
<!--Fin del modal de actividades-->
