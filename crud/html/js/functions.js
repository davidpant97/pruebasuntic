jQuery(document).ready(function(){

jQuery(".msg-basico").click(function() {
	swal("Texto del mensaje");
});

jQuery(".msg-basico-txt").click(function() {
	swal("Texto del título", "Texto del mensaje inferior");
});

jQuery(".msg-exito_especialidades").click(function() {
	swal("¡Bien!", "Se ha registrado La Especialidad", "success");
});
jQuery(".msg-error_especialidades").click(function() {
	swal("¡Error!", "La Especialidad ya Existe", "error");
});
jQuery(".msg-exito_new").click(function() {
	swal("¡Bien!", "Se ha registrado la el nuevo administrador", "success");
});
jQuery(".msg-error_new_1").click(function() {
	swal("¡Error!", "El administrador ya existe o hay un error en la conexión", "error");
});
jQuery(".msg-error_acuerdo").click(function() {
	swal("¡Cuidado!", "Acepta lo terminos y condiciones", "warning");
});
jQuery(".msg-exito_medicos").click(function() {
	swal("¡Bien!", "Se ha Registrado exitosamente el Médico", "success");
});
jQuery(".msg-error_medicos").click(function() {
	swal("¡Error!", "La cedula que ingreso ya esta asociada con un medico", "error");
});

jQuery(".msg-warning").click(function() {
	swal({   
		title: "¿Seguro que deseas continuar?",   
		text: "No podrás deshacer este paso...",   
		type: "warning",   
		showCancelButton: true,
		cancelButtonText: "Mmm... mejor no",   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "¡Adelante!",   
		closeOnConfirm: false }, 

		function(){   
			swal("¡Hecho!", 
				"Acabas de vender tu alma al diablo.", 
				"success"); 
	});

});

jQuery(".msg-cond").click(function() {
	swal({   
		title: "¿Deseas unirte al lado oscuro?",   
		text: "Este paso marcará el resto de tu vida...",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "¡Claro!",   
		cancelButtonText: "No, jamás",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 

		function(isConfirm){   
			if (isConfirm) {     
				swal("¡Hecho!", 
					"Ahora eres uno de los nuestros", 
					"success");   
			} else {     
				swal("¡Gallina!", 
					"Tu te lo pierdes...", 
				"error");   
			} 
		});
});

jQuery(".msg-autoclose").click(function() {
	swal({   
		title: "Se cerrará Sesion",   
		text: "Se cerrará en 3 segundos para guardar los cambios.",   
		timer: 3000,
		showConfirmButton: false
		

	});

});


});
jQuery(".msg-pdf").click(function() {
	swal({   
		title: "¿Deseas Realizar un reporte?",   
		text: "Elige entre Medicos Generales o Medicos Especialistas",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "¡Medicos Especialistas!",   
		cancelButtonText: "¡Medicos Generales!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 

		function(isConfirm){   
			if (isConfirm) {     
				swal("¡Hecho!", 
					"Se Realizo Reporte", 
					"success"); 
					window.location= '././reportes/medicos_especialistas_pdf.php';
			} else {     
				swal("¡Hecho!", 
					"Se Realizo Reporte", 
				"success");   
				
				window.location= '././reportes/medicos_generales_pdf.php';   
			} 
		});
});

jQuery(".msg-excel").click(function() {
	swal({   
		title: "¿Deseas Realizar un reporte?",   
		text: "Elige entre Medicos Generales o Medicos Especialistas",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "¡Medicos Especialistas!",   
		cancelButtonText: "¡Medicos Generales!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 

		function(isConfirm){   
			if (isConfirm) {     
				swal("¡Hecho!", 
					"Se Realizo Reporte", 
					"success"); 
					window.location= '././reportes/medicos_especialistas_excel.php';
			} else {     
				swal("¡Hecho!", 
					"Se Realizo Reporte", 
				"success");   
				
				window.location= '././reportes/medicos_generales_excel.php';   
			} 
		});
});
