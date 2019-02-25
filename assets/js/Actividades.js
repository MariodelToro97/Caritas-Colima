function contador(obj) {
	var maxLength = 1000;
	var strLength = obj.value.length;
	var charRemain = (maxLength - strLength);

	if (charRemain == 0) {
		document.getElementById("contadorApoyo").innerHTML = '<span id="contadorApoyo" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
	} else {
		document.getElementById("contadorApoyo").innerHTML = '<span id="contadorApoyo" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">' + charRemain + ' caracteres restantes</span>';
	}
};

function contadorDos(obj) {
	var maxLength = 250;
	var strLength = obj.value.length;
	var charRemain = (maxLength - strLength);

	if (charRemain == 0) {
		document.getElementById("contadorvoluntarios").innerHTML = '<span id="contadorvoluntarios" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
	} else {
		document.getElementById("contadorvoluntarios").innerHTML = '<span id="contadorvoluntarios" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">' + charRemain + ' caracteres restantes</span>';
	}
};

function contadorTres(obj) {
	var maxLength = 1000;
	var strLength = obj.value.length;
	var charRemain = (maxLength - strLength);

	if (charRemain == 0) {
		document.getElementById("contadorActividadUno").innerHTML = '<span id="contadorActividadUno" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
	} else {
		document.getElementById("contadorActividadUno").innerHTML = '<span id="contadorActividadUno" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">' + charRemain + ' caracteres restantes</span>';
	}
};

function contadorCuatro(obj) {
	var maxLength = 1000;
	var strLength = obj.value.length;
	var charRemain = (maxLength - strLength);

	if (charRemain == 0) {
		document.getElementById("contadorActividadDos").innerHTML = '<span id="contadorActividadDos" style="font-size: 12px; float: right;" class="text-danger mt-3 font-weight-bold">Haz llegado al límite de escritura</span>';
	} else {
		document.getElementById("contadorActividadDos").innerHTML = '<span id="contadorActividadDos" style="font-size: 12px; float: right;" class="text-success mt-3 font-weight-bold">' + charRemain + ' caracteres restantes</span>';
	}
};

$('#formActividad').submit(function() {
	var boton = $('#guardarActividad').val();

	if (boton == 'Actualizar') {
		var id = $('#deleteApoyame').val();
		var institucion = $('#selectinstitucion').val();
		var fecha = $('#fechaActividad').val();
		var numeroAsistentes = $('#numeroAsistentes').val();
		var numeroDespensas = $('#numeroDespensas').val();
		var institucionUno = $('#Institucion1').val();
		var actividadUno = $('#actividadUno').val();
		var apoyoExtra = $('#apoyoExtraCa').val();
		var institucionDos = $('#Institucion2').val();
		var voluntariosPrac = $('#voluntariosCaritas').val();
		var actividadDos = $('#actividadDos').val();
		var rol = $('#rolActividad').val();

		$.ajax({
			type: 'POST',
			url: '../Peticiones/editarActividad.php',
			data: {
				institucion: institucion,
				fecha: fecha,
				numeroAsistentes: numeroAsistentes,
				numeroDespensas: numeroDespensas,
				institucionUno: institucionUno,
				actividadUno: actividadUno,
				idActividadInput: id,
				apoyoExtra: apoyoExtra,
				institucionDos: institucionDos,
				voluntariosPrac: voluntariosPrac,
				actividadDos: actividadDos,
				rol: rol
			},
			success: function(data) {
				alertify.success(data);
				if (data == 'Los datos se actualizaron satisfactoriamente') {
					$('#tablaActividades').load(" #tablaActividades");
					$('#agregarActividad').modal('hide');
					vaciarModal();
					resetIngresoActividad();
				}
			},
			error: function(r) {
				alertify.error(r);
			}
		});
		return false;
	} else {
		$.ajax({
			type: 'POST',
			url: '../Peticiones/insertarActividad.php',
			data: $('#formActividad').serialize(),
			success: function(data) {
				alertify.success(data);
				if (data == 'La inserción se completó satisfactoriamente') {
					$('#tablaActividades').load(" #tablaActividades");
					$('#agregarActividad').modal('hide');
					vaciarModal();
				}
			},
			error: function(r) {
				alertify.error(r);
			}
		});
		return false;
	}
});

$('#btnAgregarGrupo').click(function() {
	vaciarModal();
	resetIngresoActividad();
	setTimeout(function() {
		$('#selectinstitucion').focus();
	}, 500);
});

$('#addActivity').click(function() {
	vaciarModal();
	resetIngresoActividad();
	setTimeout(function() {
		$('#selectinstitucion').focus();
	}, 500);
});
addActivity

function ponerGrupo(boton) {
	var numero = boton.value;

	$("#selectinstitucion option[value = " + numero + "]").attr("selected", true);

	setTimeout(function() {
		$('#fechaActividad').focus();
	}, 500);
}

function vaciarModal() {
	document.getElementById('selectinstitucion').getElementsByTagName('option')[0].selected = 'selected';
	document.getElementById('Institucion1').getElementsByTagName('option')[0].selected = 'selected';
	document.getElementById('Institucion2').getElementsByTagName('option')[0].selected = 'selected';
	$('#fechaActividad').val('');
	$('#apoyoExtraCa').val('');
	$('#numeroAsistentes').val('');
	$('#numeroDespensas').val('');
	$('#voluntariosCaritas').val('');
	$('#actividadUno').val('');
	$('#actividadDos').val('');
}

function editarDelete(boton) {
	var actividad = boton.name;
	var id = boton.value;

	document.getElementById("btnEliminarInstituto").outerHTML = '<button type="submit" value = "' + id + '" name = "Actividad" class="btn btn-danger" id="btnEliminarInstituto">Si</button>';
	document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar Actividad <span <h6 class = "font-italic font-weight-bold" style = "font-size: 21px;">' + actividad + '</span></h5>';
	document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar la siguiente actividad? <h6 class = "font-italic font-weight-bold text-danger" style = "font-size: 21px;">' + actividad + '</h6></h6>';
};

function resetDelete() {
	$('#tablaActividades').load(" #tablaActividades");
	$('div.Refill').load(" div.Refill");
	$('div.efill').load(" div.efill");
	$('div.fill').load(" div.fill");
	document.getElementById("eliminarInstitucionGrupo").innerHTML = '<h5 class="modal-title" id="eliminarInstitucionGrupo">Eliminar Instituto</h5>';
	document.getElementById("cuerpoModalEliminar").innerHTML = '<h6 id="cuerpoModalEliminar">¿Está segur@ de eliminar el Instituto?</h6>';
	document.getElementById("btnEliminarInstituto").innerHTML = '<input type="submit" class="btn btn-danger" id="btnEliminarInstituto" value = "">';
}

function acomodarEditarActividades(boton) {
	var idActividad = boton.value;
	var fila = boton.name;
	var datos = [];

	for (var i = 0; i < 13; i++) {
		datos[i] = $("#EditarTablaModalActividad").children().children()[fila].children[i].innerHTML;
	}

	setTimeout(function() {
		$('#selectinstitucion').focus();

		$('#selectinstitucion').val(datos[10]);
		$('#numeroAsistentes').val(datos[2]);
		$('#numeroDespensas').val(datos[3]);
		$('#Institucion1').val(datos[5]);
		$('#fechaActividad').val(datos[11]);
		$('#actividadUno').val(datos[8]);
		$('#apoyoExtraCa').val(datos[4]);
		$('#Institucion2').val(datos[6]);
		$('#voluntariosCaritas').val(datos[7]);
		$('#actividadDos').val(datos[9]);
		$('#rolActividad').val(datos[12]);
	}, 500);

	document.getElementById('deleteApoyame').outerHTML = '<button id="deleteApoyame" type="button" class="btn btn-danger" onClick="resetIngresoActividad(this)" data-dismiss="modal" value = "' + idActividad + '">Cancelar</button>';
	document.getElementById('idActividadInput').innerHTML = '<input id="idActividadInput" value="" type="hidden" name="' + idActividad + '">';
	document.getElementById("agregarActividadLabel").innerHTML = '<h5 class="modal-title" id="agregarActividadLabel">Editar Actividad</h5>';
	document.getElementById("guardarActividad").outerHTML = '<button id="guardarActividad" type="submit" class="btn btn-success" value="Actualizar" name = "Actualizar">Actualizar</button>';
}

function resetIngresoActividad() {
	
	document.getElementById("agregarActividadLabel").innerHTML = '<h5 class="modal-title" id="agregarActividadLabel">Agregar Actividad</h5>';
	document.getElementById("guardarActividad").outerHTML = '<input id="guardarActividad" type="submit" class="btn btn-success" value="Guardar" name = "OTRO">';
}