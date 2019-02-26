$('#formpersona').submit(function () {
  $.ajax({
    type: 'POST',
    url: '../Peticiones/insertarPersonas.php',
    data: $('#formpersona').serialize(),
    success: function (data) {
      alertify.success(data);
      if (data == 'La inserción se completó satisfactoriamente') {
        $('#tablapersonas').load(" #tablapersonas");
        $('#agregarpersona').modal('hide');
        vaciarModal();
      }
    },
    error: function (r) {
      alertify.error(r);
    }
  });
  return false;
});

function vaciarModal() {
  document.getElementById('SEXO').getElementsByTagName('option')[0].selected = 'selected';
  $('#nombrepersona').val('');
  $('#apellidopaterno').val('');
  $('#apellidomaterno').val('');
  $('#calle').val('');
  $('#numerocalle').val('');
  $('#colonia').val('');
  $('#municip').val('');
  $('#CP').val('');
  $('#Tel').val('');
  $('#EDAD').val('');
  $('#fechnacimiento').val('');
  $('#lugarnacimiento').val('');
  $('#EC').val('');
  $('#CURP').val('');
  $('#escolaridad').val('');
  $('#FechR').val('');
};

function borrarPersona(boton) {
  var actividad = boton.name;
  var id = boton.value;

  document.getElementById("btnEliminarInstituto").outerHTML = '<button type="submit" value = "' + id + '" name = "Actividad" class="btn btn-danger" id="btnEliminarInstituto">Si</button>';
  document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar Actividad <span <h6 class = "font-italic font-weight-bold" style = "font-size: 21px;">' + actividad + '</span></h5>';
  document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar la siguiente actividad? <h6 class = "font-italic font-weight-bold text-danger" style = "font-size: 21px;">' + actividad + '</h6></h6>';
};

function cargarDatosModal(boton) {
  console.log("Estoy en cargar Datos Modal");
  var idPersona = boton.value;
  var fila = boton.name;
  var datos = [];


  /*
  for (var i = 0; i < 13; i++) {
    datos[i] = $("#EditarTablaModalpersonas").children().children()[fila].children[i].innerHTML;
    console.log("Si entro al for");
  }

  
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


  document.getElementById('btncancelarpersona').outerHTML = '<button id="btncancelarpersona" data-dismiss="modal" type="button" class="btn btn-danger" onClick="resetIngresoPersona(this)"  value = "' + idPersona + '">Cancelar</button>';

  document.getElementById("agregarpersonaLabel").innerHTML = '<h5 class="modal-title" id="editarpersonaLabel">Editar Persona</h5>';

  document.getElementById("guardarpersona").outerHTML = '<button id="guardarP" type="submit" class="btn btn-success" value="Actualizar" name = "Actualizar">Actualizar</button>';

  document.getElementById("btnx").outerHTML = '<button type="button" Onclick="resetIngresoPersona(this)" class="close" data-dismiss="modal" aria-label="Close" id="btnx"><span aria-hidden="true">&times;</span></button>'
}

function resetIngresoPersona() {
  // console.log("regreso");
  document.getElementById("agregarpersonaLabel").innerHTML = '<h5 class="modal-title" id="agregarpersonaLabel">Agregar Persona</h5>';
  document.getElementById("guardarP").innerHTML = '<input id="guardarpersona" type="submit" class="btn btn-success" value="Guardar" name = "OTRO">';
}

$('#colonia').on('keyup', function () {
  var key = $(this).val();
  var dataString = 'key=' + key;

  $.ajax({
    type: "POST",
    url: "Peticiones/colonia.php",
    data: dataString,
    success: function (data) {
      //Escribimos las sugerencias que nos manda la consulta
      $('#sugerencia').fadeIn(1000).html(data);
      //Al hacer click en alguna de las sugerencias
      $('.sugerencia-elemento').on('click', function () {
        //Obtenemos la id unica de la sugerencia pulsada
        var id = $(this).attr('id');
        //Editamos el valor del input con data de la sugerencia pulsada
        $('#colonia').val($('#' + id).attr('data'));
        //Hacemos desaparecer el resto de sugerencias
        $('#sugerencia').fadeOut(1000);
        alert('Has seleccionado el ' + id + ' ' + $('#' + id).attr('data'));
        return false;
      });
    }
  });
});
