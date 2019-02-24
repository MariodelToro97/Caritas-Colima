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
            <label><span class="text-danger font-weight-bold">*</span> Actividad Requerida</label> <br>
            <div class="row">
              <div class="col-md-5">
                <label for="FechR">Fecha de realización de reporte: </label>
                <input type="date" name="FechR" class="form-control" id="FechR">
              </div>
              <div class="col-md-3">
                <label for="SEXO">Sexo <span class="text-danger font-weight-bold">*</span></label>
                <select class="custom-select" name="SEXO" id="SEXO" required>
                  <option value="" selected >Elija una opción</option>
                  <option value="1">Femenino</option>
                  <option value="2">Maculino</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="fechnacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechnacimiento" class="form-control" id="fechnacimiento">
              </div>

              <div class=" col-md-6">
                <label for="apellidopaterno" class="mt-1">Apellido paterno <span class="text-danger font-weight-bold">*</span></label>
                <input id="apellidopaterno" class="form-control" name="apellidopaterno" value="" type="text" required>
              </div>
              <div class=" col-md-6">
                <label for="apellidomaterno" class="mt-1">Apellido materno <span class="text-danger font-weight-bold">*</span></label>
                <input id="apellidomaterno" class="form-control" name="apellidomaterno" value="" type="text" required>
              </div>

              <div class="col-md-6">
                <label for="nombrepersona" class="mt-1">Nombre (s) <span class="text-danger font-weight-bold">*</span></label>
                <input id="nombrepersona" class="form-control" name="nombrepersona" value="" type="text" required>
              </div>
              <div class="col-md-6">
                <label for="lugarnacimiento" class="mt-1">Lugar de nacimiento</label>
                <input type="text" name="lugarnacimiento" class="form-control" id="lugarnacimiento" autocomplete="on">
              </div>

              <div class="col-md-4">
                <label for="CURP" class="mt-1">CURP <span class="text-danger font-weight-bold">*</span></label>
                <input id="CURP" class="form-control" name="CURP" value="" type="text" required autocomplete="off" pattern="[A-Z]{4}[0-9]{6}[H-M]{1}[A-Z]{5}[A-Z,0-9]{2}" placeholder="AAAA123456HAAAAA1S">
              </div>
              <div class="col-md-3">
                <label for="EC" class="mt-1">Estado Civil <span class="text-danger font-weight-bold">*</span></label>
                <select class="custom-select" name="EC" id="EC" required>
                  <option value="" selected >Elija una opción</option>
                  <option value="1">Soltero/a</option>
                  <option value="2">Comprometido/a</option>
                  <option value="3">Casado/a</option>
                  <option value="4">Unión libre</option>
                  <option value="5">Separado</option>
                  <option value="6">Divorciado/a</option>
                  <option value="7">Viudo/a</option>
                </select>
              </div>
              <div class="col-md-3">
                <label for="Tel" class="mt-1">Teléfono</label>
                <input type="number" name="Tel" id="Tel" class="form-control" min="0" placeholder="1234567890">
              </div>
              <div class="col-md-2">
                <label for="EDAD" class="mt-1">Edad</label>
                <input type="number" name="EDAD" id="EDAD" class="form-control" min="0" placeholder="0">
              </div>

              <div class="col-md-4">
                <label for="escolaridad" class="mt-1">Escolaridad <span class="text-danger font-weight-bold">*</span></label>
                <select class="custom-select" name="escolaridad" id="escolaridad" required>
                  <option value="" selected >Elija una opción</option>
                  <option value="1">Ninguna</option>
                  <option value="2">Preescolar</option>
                  <option value="3">Primaria</option>
                  <option value="4">Secundaria</option>
                  <option value="5">Preparatoria o Bachillerato</option>
                  <option value="6">Carrera Técnica</option>
                  <option value="7">Licenciatura (Profesional)</option>
                  <option value="8">Maestría</option>
                  <option value="9">Doctorado</option>
                </select>
              </div>
              <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 mt-1">
                <label for="calle" >Calle</label>
                <input id="calle" class="form-control" name="calle" value="" type="text">
              </div>
              <div class="col-md-2">
                <label class="mt-1" for="numerocalle">Número</label>
                <input type="number" min="0" name="numerocalle" class="form-control" id= "numerocalle" placeholder="0">
              </div>

              <div class="col-md-5">
                <label for="colonia" class="mt-1">Colonia</label>
                <input id="colonia" class="form-control" name="colonia" value="" type="text">
              </div>
              <div class="col-md-2">
                <label class="mt-1" for="CP">CP</label>
                <input type="number" name="CP" class="form-control" id= "CP" placeholder="0" min="0">
              </div>
              <div class="col-md-5">
                <label for="municip" class="mt-1">Municipio</label>
                <input id="municip" class="form-control" name="municip" value="" type="text">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="deleteApoyame" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input id="guardarpersona" type="submit" class="btn btn-success" value="Guardar">
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<!--Fin del modal de actividades-->
