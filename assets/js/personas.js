$('#formpersona').submit(function() {
  $.ajax({
    type: 'POST',
    url: '../Peticiones/insertarPersonas.php',
    data: $('#formpersona').serialize(),
    success: function(data) {
      alertify.success(data);
      if (data == 'La inserción se completó satisfactoriamente') {
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

$('#colonia').on('keyup', function() {
  var key = $(this).val();
  var dataString = 'key='+key;

  $.ajax({
    type: "POST",
    url: "Peticiones/colonia.php",
    data: dataString,
    success: function (data){
      //Escribimos las sugerencias que nos manda la consulta
      $('#sugerencia').fadeIn(1000).html(data);
      //Al hacer click en alguna de las sugerencias
      $('.sugerencia-elemento').on('click', function(){
        //Obtenemos la id unica de la sugerencia pulsada
        var id = $(this).attr('id');
        //Editamos el valor del input con data de la sugerencia pulsada
        $('#colonia').val($('#'+id).attr('data'));
        //Hacemos desaparecer el resto de sugerencias
        $('#sugerencia').fadeOut(1000);
        alert('Has seleccionado el '+id+' '+$('#'+id).attr('data'));
        return false;
      });
    }
  });
});
