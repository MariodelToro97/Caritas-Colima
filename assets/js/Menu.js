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
