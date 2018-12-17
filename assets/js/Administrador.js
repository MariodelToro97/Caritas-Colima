function editarEliminarUsuario(boton) {
	var nombre = boton.value;

	document.getElementById("btnEliminarInstituto").outerHTML = '<button type="submit" value = "' + nombre + '" class="btn btn-danger" name = "USUARIO" id="btnEliminarInstituto">Si</button>';
	document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar usuario <span class = "font-italic font-weight-bold" style = "font-size: 21px;">' + nombre + '</span></h5>';
	document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar el Usuario <span style = "font-size: 20px;" class = "text-danger font-italic font-weight-bold">' + nombre + '</span> ?</h6>';
};

function resetAdministradorModal() {
	$('#tablaUsuarios').load(" #tablaUsuarios");
	document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar Instituto</h5>';
	document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar el Instituto?</h6>';
	document.getElementById("btnEliminarInstituto").innerHTML = '<input type="submit" class="btn btn-danger" id="btnEliminarInstituto" value = "">';
};

function editarUpdateUser(boton) {
	var rol = boton.name;
	var id = boton.value;

	$('#editUser').val(id);
	$('#rolUsuarioUpdate').val(rol);

	setTimeout(function() {
		$('#primerContraUser').focus();
	}, 500);

};

$('#updateUser').submit(function() {
	var name = $('#editUser').val();
	var contra = $('#primerContraUser').val();
	var confContra = $('#confirmContraUser').val();
	var rol = $('#rolUsuarioUpdate').val();

	$.ajax({
		type: 'POST',
		url: '../Peticiones/editarUsuario.php',
		data: {
			nombre: name,
			password: contra,
			passwordConf: confContra,
			rol: rol
		},
		// Mostramos un mensaje con la respuesta de PHP
		success: function(data) {
			alertify.success(data);
			if (data == 'Usuario actualizado correctamente') {
				$('#tablaUsuarios').load(' #tablaUsuarios');
				$('#updateUser').modal('hide');
			}
		}
	})
	return false;
});