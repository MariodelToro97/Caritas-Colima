$('#formpersona').submit(function () {
  var boton = $('#guardarpersona').val();

  if (boton == 'Actualizar') {
    var idCaso = $('#btncancelarpersona').val();
    var fecha = $('#FechR').val();
    var apellidoPaterno = $('#apellidopaterno').val();
    var apellidoMaterno = $('#apellidomaterno').val();
    var nombre = $('#nombrepersona').val();
    var Calle = $('#calle').val();
    var numero = $('#numerocalle').val();
    var colonia = $('#colonia').val();
    var municipio = $('#municip').val();
    var codigoPostal = $('#CP').val();
    var telefono = $('#Tel').val();
    var edad = $('#EDAD').val();
    var sexo = $('#SEXO').val();
    var fechaNacimiento = $('#fechnacimiento').val();
    var lugarNacimiento = $('#lugarnacimiento').val();
    var estadoCivil = $('#EC').val();
    var curp = $('#CURP').val();
    var escolaridad = $('#escolaridad').val();

    $.ajax({
      type: 'POST',
      url: '../Peticiones/editarPersona.php',
      data: {
        idC: idCaso,
        fecha: fecha,
        apellidoP: apellidoPaterno,
        apellidoM: apellidoMaterno,
        nombreP: nombre,
        calleP: Calle,
        numeroC: numero,
        coloniaP: colonia,
        municipioP: municipio,
        CP: codigoPostal,
        telPersona: telefono,
        edadP: edad,
        sexoP: sexo,
        fechaNac: fechaNacimiento,
        lugarNac: lugarNacimiento,
        estadoCivP: estadoCivil,
        PURC: curp,
        escolaridadP: escolaridad
      },
      success: function (data) {         
        if (data == 'Los datos se actualizaron satisfactoriamente') {
          alertify.success(data);
          $('#tablapersonas').load(" #tablapersonas");
          $('#agregarpersona').modal('hide');
          vaciarModal();
          resetIngresoPersona();
        } else {
          alertify.error("No se pudieron actualizar los datos");
        }
      },
      error: function (r) {
        alertify.error(r);
      }
    });
    return false;
  } else {
    $.ajax({
      type: 'POST',
      url: '../Peticiones/insertarPersonas.php',
      data: $('#formpersona').serialize(),
      success: function (data) {        
        if (data == 'La inserción se completó satisfactoriamente') {
          alertify.success(data);
          $('#tablapersonas').load(" #tablapersonas");
          $('#agregarpersona').modal('hide');
          vaciarModal();
        } else {
          alertify.success("No se pudieron insertar los datos");
        }
      },
      error: function (r) {
        alertify.error(r);
      }
    });
    return false;
  }
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
  var persona = boton.name;
  var id = boton.value;

  document.getElementById("btnEliminarPersona").outerHTML = '<button type="submit" value = "' + id + '" name = "Actividad" class="btn btn-danger" id="btnEliminarPersona">Si</button>';
  document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar la siguiente persona? <h6 class = "font-italic font-weight-bold text-danger" style = "font-size: 21px;">' + persona + '</h6></h6>';
};

$('#formDeleteper').submit(function () {
  var idGrupo = $('#btnEliminarPersona').val();  
  $.ajax({
    type: 'POST',
    url: '../Peticiones/eliminarPersona.php',
    data: {
      idcaso: idGrupo,
    },
    success: function(data){
      if (data == 'La persona ha sido borrada correctamente') {
        alertify.success(data);
        $('#tablapersonas').load(" #tablapersonas");
        $('#borraPersonaM').modal('hide');
        reloadCombo();
      } else {
        //alertify.error("La persona no se pudo eliminar");
        alertify.error(data);
      }
    },
    error: function(data){
      alertify.error(data);
    }
  });
  return false;
});

function cargarDatosModal(boton) {
  var idPersona = boton.value;
  var fila = boton.name;
  var datos = [];

  for (var i = 0; i <= 19; i++) {
    datos[i] = $("#EditarTablaModalPersonas").children().children()[fila].children[i].innerHTML;
  }
  //0= id caso, 1=fecha, 2=apellidoPaterno 3= apellido materno 4=Nombre
  //5=Nombre completo  (no tomar en cuenta), 6=Calle, 7=Número de calle 
  //8=domicilio completo (No tomar en cuenta), 9= Colonia 10= Municipio
  //11=Código postal, 12=Teléfono, 13=Edad, 14= Sexo, 15=Fecha de nacimiento
  //16=Lugar de nacimiento, 17=Estado civil, 18=CURP, 19=Escolaridad
  setTimeout(function () {  
    datos[19] = verificarEscolaridad(datos[19]); 
    datos[14] = verificarSexo(datos[14]);
    datos[17] = verificarEstCivil(datos[17]);
    $('#FechR').val(datos[1]);
    $('#SEXO').val(datos[14]);
    $('#fechnacimiento').val(datos[15]);
    $('#apellidopaterno').val(datos[2]);
    $('#apellidomaterno').val(datos[3]);
    $('#nombrepersona').val(datos[4]);
    $('#lugarnacimiento').val(datos[16]);
    $('#CURP').val(datos[18]);
    $('#EC').val(datos[17]);
    $('#Tel').val(datos[12]);
    $('#EDAD').val(datos[13]);
    $('#escolaridad').val(datos[19]);
    $('#calle').val(datos[6]);
    $('#numerocalle').val(datos[7]);
    $('#colonia').val(datos[9]);
    $('#CP').val(datos[11]);
    $('#municip').val(datos[10]);
  }, 500);

  document.getElementById('btncancelarpersona').outerHTML = '<button id="btncancelarpersona" data-dismiss="modal" type="button" class="btn btn-danger" onClick="resetIngresoPersona(this)"  value = "' + idPersona + '">Cancelar</button>';
  document.getElementById("agregarpersonaLabel").innerHTML = '<h5 class="modal-title" id="editarpersonaLabel">Editar Persona</h5>';
  document.getElementById("guardarpersona").outerHTML = '<button id="guardarpersona" type="submit" class="btn btn-success" value="Actualizar" name = "Actualizar">Actualizar</button>';
  document.getElementById("btnx").outerHTML = '<button type="button" Onclick="resetIngresoPersona(this)" class="close" data-dismiss="modal" aria-label="Close" id="btnx"><span aria-hidden="true">&times;</span></button>'
}

function verificarEstCivil(EC2){
  var EC='';  
  if (EC2 == 'Soltero/a') {
    EC = '1';
  } else if (EC2 == 'Comprometido/a') {
    EC = '2';
  } else if (EC2 == 'Casado/a') {
    EC = '3';
  } else if (EC2 == 'Unión libre') {
    EC = '4';
  } else if (EC2 == 'Separado/a') {
    EC = '5';
  } else if (EC2 == 'Divorciado/a') {
    EC = '6';
  } else if (EC2 == 'Viudo/a') {
    EC = '7';
  } 

  return EC;
}

function verificarSexo(SEXO){
  if (SEXO == 'F') {
    SEXO = '1';
  } else if (SEXO = 'M') {
    SEXO = '2';
  } 

  return SEXO;
}

function verificarEscolaridad(esco){
  if (esco == 'Ninguna') {
    esco = '1';
  } else if (esco == 'Preescolar') {
    esco = '2';
  } else if (esco == 'Primaria') {
    esco = '3';
  } else if (esco == 'Secundaria') {
    esco = '4';
  } else if (esco == 'Preparatoria') {
    esco = '5';
  } else if (esco == 'Carrera Técnica') {
    esco = '6';
  } else if (esco== 'Licenciatura') {
    esco = '7';
  } else if (esco == 'Maestría') {
    esco = '8';
  } else if (esco == 'Doctorado') {
    esco = '9';
  }

  return esco;
}

function resetIngresoPersona() {
  // console.log("regreso");
  document.getElementById("agregarpersonaLabel").innerHTML = '<h5 class="modal-title" id="agregarpersonaLabel">Agregar Persona</h5>';
  document.getElementById("guardarpersona").innerHTML = '<input id="guardarpersona" type="submit" class="btn btn-success" value="Guardar" name = "OTRO">';
  vaciarModal();
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

function contadorApellidoPat(obj) {
  //convertirMayusculas(obj);
  var maxLength = 30;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorApellidoPat").innerHTML = '<span id="contadorApellidoPat" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorApellidoPat").innerHTML = '<span id="contadorApellidoPat" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorApellidoMat(obj) {
  //convertirMayusculas(obj);
  var maxLength = 30;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorApellidoMat").innerHTML = '<span id="contadorApellidoMat" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorApellidoMat").innerHTML = '<span id="contadorApellidoMat" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorNombre(obj) {
  //convertirMayusculas(obj);
  var maxLength = 30;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorNombre").innerHTML = '<span id="contadorNombre" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorNombre").innerHTML = '<span id="contadorNombre" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorLugarNacimiento(obj) {
  //convertirMayusculas(obj);
  var maxLength = 30;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorLugarNacimiento").innerHTML = '<span id="contadorLugarNacimiento" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorLugarNacimiento").innerHTML = '<span id="contadorLugarNacimiento" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

//Función que es llamada en todos los modales implementados para convertir todo lo escrito a mayúsculas.
function convertirMayusculas(may) {
  may.value = may.value.toUpperCase();
  var cadena = may.value;
  alert(cadena.chartAt(may.length - 1));
  if (may.value == 'Á') {
    may.value = 'A';
  }
  /*if (may.value =='Á' || may.value == 'É' || may.value == 'Í' || may.value == 'Ó' || may.value == 'Ú') {
    quitarSimbolos(may); 
  } */
};

function contadorCURP(obj) {
  convertirMayusculas(obj);
  var maxLength = 18;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorCURP").innerHTML = '<span id="contadorCURP" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Límite alcanzado</span>';
  } else {
    document.getElementById("contadorCURP").innerHTML = '<span id="contadorCURP" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorTelefono(obj) {
  var maxLength = 15;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain <= 0) {
    document.getElementById("contadorTelefono").innerHTML = '<span id="contadorTelefono" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Límite alcanzado</span>';
  } else {
    document.getElementById("contadorTelefono").innerHTML = '<span id="contadorTelefono" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' restantes</span>';
  }
};

function contadorCalle(obj) {
  //convertirMayusculas(obj);
  var maxLength = 50;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorCalle").innerHTML = '<span id="contadorCalle" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorCalle").innerHTML = '<span id="contadorCalle" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorColonia(obj) {
  //convertirMayusculas(obj);
  var maxLength = 50;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorColonia").innerHTML = '<span id="contadorColonia" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorColonia").innerHTML = '<span id="contadorColonia" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorMunicipio(obj) {
  //convertirMayusculas(obj);
  var maxLength = 30;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain == 0) {
    document.getElementById("contadorMunicipio").innerHTML = '<span id="contadorMunicipio" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Haz llegado al límite de escritura</span>';
  } else {
    document.getElementById("contadorMunicipio").innerHTML = '<span id="contadorMunicipio" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' caracteres restantes</span>';
  }
};

function contadorCP(obj) {
  var maxLength = 10;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

  if (charRemain <= 0) {
    document.getElementById("contadorCP").innerHTML = '<span id="contadorCP" style="font-size: 12px; float: right;" class="text-danger font-weight-bold">Límite alcanzado</span>';
  } else {
    document.getElementById("contadorCP").innerHTML = '<span id="contadorCP" style="font-size: 12px; float: right;" class="text-success font-weight-bold">' + charRemain + ' restantes</span>';
  }
}
