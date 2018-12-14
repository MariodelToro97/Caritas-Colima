$('#formIndex').submit(function(){
  $.ajax({
    type: 'POST',
    url: 'Peticiones/login.php',//$(this).attr('action'),
    data: $(this).serialize(),
    // Mostramos un mensaje con la respuesta de PHP
    success: function(data) {
      console.log(data);
      alertify.success(data);
      if (data == 'Completado') {
          location.href = 'Views/Menu.php';
      }
    }
  })
  return false;
});
