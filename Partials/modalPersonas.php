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
      <form id="formpersona">
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
                  <label for="apellidopaterno">Apellido paterno <span class="text-danger font-weight-bold">*</span></label>
                <input id="apellidopaterno" class="form-control" name="apellidopaterno" value="" type="text" required="">
                  <label for="apellidomaterno">Apellido materno <span class="text-danger font-weight-bold">*</span></label>
                <input id="apellidomaterno" class="form-control" name="apellidomaterno" value="" type="text" required="">
                    <label for="nombrepersona" >Nombre (s) <span class="text-danger font-weight-bold">*</span></label>
                <input id="nombrepersona" require class="form-control" name="nombrepersona" value="" type="text" required="">
                    <label for="EC" >Estado Civil <span class="text-danger font-weight-bold">*</span></label>
                <input id="EC" require class="form-control" name="EC" value="" type="text" required="">
                    <label for="CURP" >CURP<span class="text-danger font-weight-bold">*</span></label>
                <input id="CURP" require class="form-control" name="CURP" value="" type="text" required="">
              </div>

              <div class="col-md-6">
              <label for="SEXO">Sexo <span class="text-danger font-weight-bold">*</span></label>
              <select class="custom-select" name="SEXO" id="SEXO" required="">
              <option value="0" selected >Elija una opción</option>
              <option value="1">Femenino</option>
              <option value="2">Maculino</option>
              </select>
                <label for="fechnacimiento">Fecha de nacimiento: <span class="text-danger font-weight-bold">*</span></label>
                  <input type="date" name="fechnacimiento" class="form-control" id="fechnacimiento" required = "">
                <label for="EDAD">edad <span class="text-danger font-weight-bold">*</span></label>
                  <input type="number" name="EDAD" id="EDAD" class="form-control">
                <label for="lugarnacimiento">Lugar de nacimiento: <span class="text-danger font-weight-bold">*</span></label>
                  <input type="text" name="lugarnacimiento" class="form-control" id="lugarnacimiento" required = "">
                <label for="escolaridad" >Escolaridad <span class="text-danger font-weight-bold">*</span></label>
                  <input id="escolaridad" require class="form-control" name="escolaridad" value="" type="text" required="">
              </div>
              <div class="col-md-10">
              <label for="calle" >Calle <span class="text-danger font-weight-bold">*</span></label>
                  <input id="calle" class="form-control" name="calle" value="" type="text" required="">
              </div>
              <div class="col-md-7">
              <label for="colonia" >Colonia<span class="text-danger font-weight-bold">*</span></label>
                  <input id="colonia" required="" class="form-control" name="colonia" value="" type="text">
              <label for="municip" >Municipio<span class="text-danger font-weight-bold">*</span></label>
                  <input id="municip" required="" class="form-control" name="municip" value="" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="mt-4" for="numerocalle">Número de la calle<span class="text-danger font-weight-bold">*</span></label>
                <input type="number" min="0" name="numerocalle" class="form-control" id= "numerocalle" placeholder="0" required = "">
                <label class="mt-2" for="CP">Código postal <span class="text-danger font-weight-bold">*</span></label>
                <input type="text" name="CP" class="form-control" id= "CP" placeholder="0" required="">
              </div>
              <div class="form-group col-md-3">
              <label for="Tel">Número telefonico<span class="text-danger font-weight-bold">*</span></label>
                <input type="tel" name="Tel" id="Tel" class="form-control"  required="">
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="deleteApoyame" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input id="guardarpersona" type="submit" class="btn btn-success" value="Guardar">
        </div>
      </form>
    </div>
  </div>
</div>
<!--Fin del modal de actividades-->
