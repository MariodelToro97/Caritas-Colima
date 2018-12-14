//NO SIRVE Y NO SE PORQUE
function ingreso(){
  var datos = $('#formGrupo').serialize();
  alert(datos);
  $.ajax({
    type: "POST",
    url: "insertarGrupo.php",
    data: datos,
    //ERROR
      error: function(error){
        Console.log(error);
        return false;
      },
    success:function(r){
      if (r == 1) {
        alert('Agregado con éxito');
      } else {
        alert('Fallo en la inserción');
      }
    }
  });
  return false;
};

function saveActivity(){
  //var datos = $('#formActividad').serialize();
  var grupo = $('#selectinstitucion').val();
  var institucion = $('#Institucion1').val();
  var fecha = $('#fechaActividad').val();
  var asistentes = $('#numeroAsistentes').val();
  var despensa = $('#numeroDespensas').val();
  var actividad = $('#actividadUno').val();

  //alertify.success(fecha);

  if (grupo == '' || institucion == '' || fecha == '' || asistentes == '' || despensa == '' || actividad == '') {
    alertify.error('Dejó campos requeridos en blanco');
    //document.getElementById("validarGrupo").value = grupo;
    //document.getElementById("validarInstitucion").value = institucion;

    //alert(datos);

  }
};

function contador(obj){
  var maxLength = 1000;
  var strLength = obj.value.length;
  var charRemain = (maxLength - strLength);

    if(charRemain == 0){
        document.getElementById("contadorApoyo").innerHTML = '<span id="contadorApoyo" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
    }else{
        document.getElementById("contadorApoyo").innerHTML = '<span id="contadorApoyo" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">'+charRemain+' caracteres restantes</span>';
    }
};

function contadorDos(obj){
    var maxLength = 100;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if(charRemain == 0){
        document.getElementById("contadorvoluntarios").innerHTML = '<span id="contadorvoluntarios" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
    }else{
        document.getElementById("contadorvoluntarios").innerHTML = '<span id="contadorvoluntarios" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">'+charRemain+' caracteres restantes</span>';
    }
};

function contadorTres(obj){
    var maxLength = 1000;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if(charRemain == 0){
        document.getElementById("contadorActividadUno").innerHTML = '<span id="contadorActividadUno" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
    }else{
        document.getElementById("contadorActividadUno").innerHTML = '<span id="contadorActividadUno" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">'+charRemain+' caracteres restantes</span>';
    }
};

function contadorCuatro(obj){
    var maxLength = 1000;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if(charRemain == 0){
        document.getElementById("contadorActividadDos").innerHTML = '<span id="contadorActividadDos" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
    }else{
        document.getElementById("contadorActividadDos").innerHTML = '<span id="contadorActividadDos" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">'+charRemain+' caracteres restantes</span>';
    }
};
