function agregardatos(nombre,apellido,email,clave){

	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&clave=" + clave;
			
	$.ajax({
		
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
			
				alertify.success("Registrado con exito :)");
				setTimeout("redireccionarPagina()", 2500);
			}else{
				alertify.error("Fallo el servidor :(" );
			}
		}
	});

}
function redireccionarPagina() {
	window.location = "../login.php";
  }
 