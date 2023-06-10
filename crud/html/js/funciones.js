function guardarnuevo(nombre,apellido,cc,pdf){

	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&cc=" + cc +
			"&pdf=" + pdf;

	$.ajax({
		type:"POST",
		url:"php/ingresar_usuario.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function agregaform(datos){

	d=datos.split('||');

	$('#id_usuario').val(d[0]);
	$('#nombre_usuario').val(d[1]);
	$('#apellido_usuario').val(d[2]);
	
	
	
}
function agregaform2(datos1){

	d=datos1.split('||');


	$('#cc_med').val(d[0]);

	$('#nombre_s').val(d[1]);

	$('#apellido_s').val(d[2]);

}
function soporte(id){
id=$('#cc_med').val();
	rut = $('#img_rut').val();
	aseguradora = $('#img_pl').val();
	cedula = $('#img_CC').val();
	
	
	cadena= "id=" + id +
			
			"&rut=" + rut + 
			"&aseguradora=" + aseguradora +
			"&cedula=" + cedula ; 
			
			

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				$('#buscador').load('componentes/buscador.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});	
}

$(function(){
				$('#envio').on('click', function (e){
					e.preventDefault(); 
					var paqueteDeDatos = new FormData();
					
					paqueteDeDatos.append('file', $('#imagen')[0].files[0]);
					paqueteDeDatos.append('url_image', $('#uploadimage').prop('value'));
					paqueteDeDatos.append('id' , $('#cedula_id').prop('value'));
					paqueteDeDatos.append('id2' , $('#cedula_id').prop('value'));

					var id_med = $('#cedula_id').val();
					var destino = "php/actualizasoportes.php"; 
					/* Se envia el paquete de datos por ajax. */
					$.ajax({
						url: destino,
						type: 'POST', 
						contentType: false,
						data: paqueteDeDatos, 
						processData: false,
						cache: false, 
						success: function(resultado){
							if (resultado == 'CC') {
				 				CC(id_med);
							}else if (resultado == 'RUT') {
								RUT(id_med);
							}if (resultado == 'POLIZA') {
							POLIZA(id_med);
							}
						alertify.success("Actualizado con exito :)");
						},
						error: function (){
							alertify.error("Fallo el servidor :(");
						}
					});
				});
			});

function actualizaDatos(){

	cedula_id = $("#id_usuario").val();
	nombre_usuario=$('#nombre_usuario').val();
	apellido_usuario=$('#apellido_usuario').val();

	cadena= "id=" + cedula_id +
			"&nombre=" + nombre_usuario +
			"&apellido=" + apellido_usuario; 
					

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				$('#buscador').load('componentes/buscador.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){

					$('#tabla').load('componentes/tabla.php');
					$('#buscador').load('componentes/buscador.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

function CC(id){

	var tipo = 'CC'; 
	cadena= "identificacion=" + id; 
		
	$.ajax({
		type:"POST",
		url:"php/verCC.php",
		data:cadena,
		success:function(r){

			d=r.split('||');
			var ruta = d[0];
			$("#cedula_id").val(d[1]);
			$("#direccion_img").val(d[0]);
			$("#tipo_img").val(tipo);
	
				document.getElementById("preview").innerHTML="<embed src='"+ruta+"' type='application/pdf'class='col-md-12 col-sm-12 col-lg-12' height='400' style='padding:auto;'></embed>";
			
			if(r != null){
				alertify.success("Cargo documento con exito :)");
				 
			}else{
				alertify.error("Fallo el servidor :(");
			}
			
		}
	});	
}

