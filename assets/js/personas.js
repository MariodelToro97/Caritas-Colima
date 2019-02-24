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
