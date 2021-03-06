$('#formGrupo').submit(function(){
  var idGrupo = $('#btnSaveGroup').val();
  var nombre = $('#nomGrupo').val();

  if (idGrupo == 'Guardar') {
    $.ajax({
      type: 'POST',
      url: '../Peticiones/insertarGrupo.php',
      data: $(this).serialize(),
      // Mostramos un mensaje con la respuesta de PHP
      success: function(data) {        
        $('#nomGrupo').val('');        
        if (data == 'Grupo guardado exitosamente') {
          alertify.success(data);
          reloadCombo();
        } else {
          if (data == 'Ya existe una institución con ese nombre en la base de datos') {
            alertify.warning(data);
            $('#nomGrupo').focus();
            reset();
          } else {
            alertify.error("Ocurrió un error en la inserción del dato");
          }
        }
      }
    });
    return false;
  } else {
    $.ajax({
      type: 'POST',
      url: '../Peticiones/editarInstituto.php',
      data: {
        idGrupo : idGrupo,
        nombre : nombre
      },
      // Mostramos un mensaje con la respuesta de PHP
      success: function(data) {          
        $('#nomGrupo').val('');
        if (data == 'Grupo actualizado exitosamente') {
          alertify.success(data);
          reloadCombo();
          reset();
        } else {
          if (data == 'Ya existe una institución con ese nombre en la base de datos') {
            alertify.success(data);
            $('#nomGrupo').focus();
            document.getElementById("contadorGrupo").innerHTML = '<span id="contadorGrupo" style="font-size: 12px; float: right;" class="text-success mt-1 font-weight-bold">150 caracteres restantes</span>';
          } else {
            alertify.error("Ocurrió un error en la actualización del dato");
          }
        }
      }
    });
    return false;
  }
});

$('#formReporteInsticucion').submit(function(){
  $.ajax({
    type: 'POST',
    //url: '../Peticiones/Reporte_Instituciones.php',
    success: function(data){
      alertify.success(data);
      window.open('../Peticiones/Reporte_Instituciones.php');
    /*  if (data == 'Reporte generado satisfactoriamente') {
        alertify.success(data)
      } else {
        alertify.error(data)
      }*/
    }
  });
  return false;
});

function reloadCombo(){
  $('#agregarGrupo').modal('hide');
  $('#tablaInstituciones').load(" #tablaInstituciones");
  $('div.Refill').load(" div.Refill");
  $('div.efill').load(" div.efill");
  $('div.fill').load(" div.fill");
}

function reset(){
  document.getElementById("contadorGrupo").innerHTML = '<span id="contadorGrupo" style="font-size: 12px; float: right;" class="text-success mt-1 font-weight-bold">150 caracteres restantes</span>';
  document.getElementById("labelNomGrupohidden").style.display = 'none';
  document.getElementById("nomGrupohidden").setAttribute ("type", "hidden");
  document.getElementById("agregarGrupoLabel").innerHTML = '<h5 class="modal-title" id="agregarGrupoLabel">Agregar Grupo</h5>';
  document.getElementById("labelNomGrupo").innerHTML = '<span id="labelNomGrupo" for="nomGrupo" class="my-2" style="float: left;">Nombre del Grupo:</span>';
  document.getElementById("btnSaveGroup").outerHTML = '<input id="btnSaveGroup" type="submit" value="Guardar" class="btn btn-success">';
}

$('#formDeleteIns').submit(function(){
  var idGrupo = $('#btnEliminarInstituto').val();
  var name = $('#btnEliminarInstituto').attr('name');

  if (name == '') {
    $.ajax({
      type: 'POST',
      url: '../Peticiones/eliminarInstituto.php',
      data: {
        idGrupo: idGrupo,
      },
      success: function(data){        
        if (data == 'La institución se borró de forma correcta') {
          alertify.success(data);
          $('#deleteInstituto').modal('hide');
          reloadCombo();
        } else {
          alertify.error("Está institución tiene actividades realizadas, por ende, no se puede eliminar de la base de datos");
        }
      }
    });
     return false;

  } else {
    if (name == 'USUARIO') {
      $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarUsuario.php',
        data: {
          idGrupo: idGrupo,
        },
        success: function(data){           
          if (data == 'El usuario se borró de forma correcta') {
            alertify.success(data);
            $('#deleteInstituto').modal('hide');
            resetAdministradorModal();
          } else {
            alertify.error("Ha ocurrido un error en la eliminación del usuario");
          }
        }
      });
       return false;
    } else {
      $.ajax({
        type: 'POST',
        url: '../Peticiones/eliminarActividad.php',
        data: {
          idGrupo: idGrupo,
        },
        success: function(data){          
          if (data == 'La actividad se borró de forma correcta') {
            alertify.success(data);
            $('#deleteInstituto').modal('hide');
            resetDelete();
          } else {
            alertify.error("Esta actividad no se puede eliminar de la base de datos");
          }
        }
      });
       return false;
    }
  }
});

function editarModalEditar(boton){
  var idGrupo = boton.value;
  var nombre = boton.name;

  document.getElementById("contadorGrupo").innerHTML = '<span id="contadorGrupo" style="font-size: 12px; float: right;" class="text-success mt-1 font-weight-bold">150 caracteres restantes</span>';
  document.getElementById("labelNomGrupohidden").style.display = 'block';
  document.getElementById("nomGrupohidden").setAttribute ("type", "");
  document.getElementById("nomGrupohidden").value = nombre;
  document.getElementById("agregarGrupoLabel").innerHTML = '<h5 class="modal-title" id="agregarGrupoLabel">Editar Grupo</h5>';
  document.getElementById("labelNomGrupo").innerHTML = '<span id="labelNomGrupo" for="nomGrupo" class="my-2" style="float: left;">¿Cuál es el nuevo nombre del Grupo?</span>';
  document.getElementById("btnSaveGroup").outerHTML = '<button type="submit" value = "'+idGrupo+'" class="btn btn-success" id="btnSaveGroup">Actualizar</button>';

  $('#agregarGrupo').modal('show');

  $('#nomGrupo').val('');
  setTimeout(function (){
    $('#nomGrupo').focus();
  }, 500);
};

function editarModalEliminar(boton){
  var idGrupo = boton.value;
  var nombre = boton.name;

  document.getElementById("btnEliminarInstituto").outerHTML = '<button type="submit" value = "'+idGrupo+'" class="btn btn-danger" name = "" id="btnEliminarInstituto">Si</button>';
  document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar Instituto <span class = "font-italic font-weight-bold" style = "font-size: 21px;">'+nombre+'</span></h5>';
  document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar el instituto <span style = "font-size: 20px;" class = "text-danger font-italic font-weight-bold">'+nombre+'</span> ?</h6>';
};

$('#btnAgregarGrupo').click(function(){
  $('#nomGrupo').val('');
  reset();
  setTimeout(function (){
    $('#nomGrupo').focus();
  }, 500);
});

$('#addGrupos').click(function(){
  reset();
  $('#nomGrupo').val('');
  setTimeout(function (){
    $('#nomGrupo').focus();
  }, 500);
});

function contadorGrupo(obj){
  //convertirMayusculas(obj);
    var maxLength = 150;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if(charRemain == 0){
        document.getElementById("contadorGrupo").innerHTML = '<span id="contadorGrupo" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
    }else{
        document.getElementById("contadorGrupo").innerHTML = '<span id="contadorGrupo" style="font-size: 12px; float: right;" class="text-success font-weight-bold">'+charRemain+' caracteres restantes</span>';
    }
};
