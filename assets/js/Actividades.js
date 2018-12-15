function saveActivity(){
  //var datos = $('#formActividad').serialize();
  var grupo = $('#selectinstitucion').val();
  var institucion = $('#Institucion1').val();
  var fecha = $('#fechaActividad').val();
  var asistentes = $('#numeroAsistentes').val();
  var despensa = $('#numeroDespensas').val();
  var actividad = $('#actividadUno').val();

  if (grupo == '' || institucion == '' || fecha == '' || asistentes == '' || despensa == '' || actividad == '') {
    alertify.error('Dejó campos requeridos en blanco');
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

$('#selectinstitucion').click(function(){
  $.ajax({
    type: 'POST',
    url: '../Peticiones/selectGrupo.php',
    data: {
      prueba: 1
    },
    // Mostramos un mensaje con la respuesta de PHP
    success: function(data) {
      alert(json_decode(data));
    }
  });
  return false;
});
