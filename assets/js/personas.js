  $('#formpersona').submit(function() {
      $.ajax({
    type: 'POST',
    url: '../Peticiones/insertarPersonas.php',
    data: $('#formpersona').serialize(),
    success: function(data) {
      alertify.success(data);
      if (data == 'Se ha registrado satisfactoriamente') {
        $('#tablapersonas').load(" #tablapersonas");
        $('#agregarpersona').modal('hide');
        vaciarModal();
      }
    },
    error: function(r) {
      alertify.error(r);
    }
  });
  return false;
  });


  function vaciarModal() {
  document.getElementById('xose').getElementsByTagName('option')[0].selected = 'selected';
  $('#apellidopa').val('');
  $('#apellidoma').val('');
  $('#Nombreper').val('');
  $('#EC').val('');
  $('#PRUC').val('');
  $('#mientonaci').val('');
  $('#dade').val('');
  $('#Garlunaci').val('');
  $('#callep').val('');
  $('#coloniaper').val('');
  $('#municip').val('');
  $('#numerocalle').val('');
  $('#CP').val('');
  $('#TEL').val('');

  }

  function borrarPersona(boton) {
    var actividad = boton.name;
    var id = boton.value;
  
    document.getElementById("btnEliminarInstituto").outerHTML = '<button type="submit" value = "' + id + '" name = "Actividad" class="btn btn-danger" id="btnEliminarInstituto">Si</button>';
    document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar Actividad <span <h6 class = "font-italic font-weight-bold" style = "font-size: 21px;">' + actividad + '</span></h5>';
    document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar la siguiente actividad? <h6 class = "font-italic font-weight-bold text-danger" style = "font-size: 21px;">' + actividad + '</h6></h6>';
  };

  function acomodarEditarpersonas(boton) {
  alert("Estoy en acomodar editar personas");
  var idPersona = boton.value;
  var fila = boton.name;
  var datos = [];


  for (var i = 0; i < 13; i++) {
  datos[i] = $("#EditarTablaModalpersonas").children().children()[fila].children[i].innerHTML;
  console.log("Si entro al for");
  }

  /*
  setTimeout(function() {
  $('#selectinstitucion').focus();
  $('#selectinstitucion').val(datos[10]);
  $('#numeroAsistentes').val(datos[2]);
  $('#numeroDespensas').val(datos[3]);
  $('#Institucion1').val(datos[5]);
  $('#fechaActividad').val(datos[11]);
  $('#actividadUno').val(datos[8]);
  $('#apoyoExtraCa').val(datos[4]);
  $('#Institucion2').val(datos[6]);
  $('#voluntariosCaritas').val(datos[7]);
  $('#actividadDos').val(datos[9]);
  $('#rolActividad').val(datos[12]);
  }, 500);
  */


  document.getElementById('btncancelarpersona').outerHTML = '<button id="deleteperson" type="button" class="btn btn-danger" onClick="resetIngresoPersona(this)" data-dismiss="modal" value = "'+idPersona+'">Cancelar</button>';
  document.getElementById("agregarpersonaLabel").innerHTML = '<h5 class="modal-title" id="editarpersonaLabel">Editar Persona</h5>';
  document.getElementById("guardarpersona").outerHTML = '<button id="guardarP" type="submit" class="btn btn-success" value="Actualizar" name = "Actualizar">Actualizar</button>';
  }

  function resetIngresoPersona() {
  document.getElementById("agregarpersonaLabel").innerHTML = '<h5 class="modal-title" id="agregarActividadLabel">Agregar Actividad</h5>';
  document.getElementById("guardarP").innerHTML = '<input id="guardarActividad" type="submit" class="btn btn-success" value="Guardar" name = "OTRO">';
  document.getElementById("deleteperson").outerHTML='<button id="btncancelarpersona" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar 2</button>';
  }




