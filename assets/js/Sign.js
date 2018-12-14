$('#formIndex').submit(function(){
  $.ajax({
    type: 'POST',
    url: 'Peticiones/login.php',
    data: $(this).serialize(),
    // Mostramos un mensaje con la respuesta de PHP
    success: function(data) {
      alertify.success(data);
      if (data == 'Acceso Correcto') {
          location.href = 'Views/Menu.php';
      }
    }
  });
  return false;
});

$('#formIngreso').submit(function(){
  $.ajax({
    type: 'POST',
    url: '../Peticiones/nuevoUsuario.php',
    data: $(this).serialize(),
    success: function(data){
      alertify.success(data);
      if (data == 'La inserción se completó satisfactoriamente') {
        location.href = '../Index.php';
      } else {
        if (data == 'Las contraseñas no coinciden') {
          $('#primerContra').focus();
          $('#primerContra').val('');
          $('#confirmContra').val('');
        } else {
          if (data == 'Ese usuario ya se encuentra en la base de datos') {
            $('#newUser').focus();
            $('#newUser').val('');
            $('#primerContra').val('');
            $('#confirmContra').val('');
          }
        }
      }
    }
  });
  return false;
});
