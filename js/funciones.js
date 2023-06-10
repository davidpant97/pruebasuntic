function loguin(email,clave){

	cadena="email=" + email +
			"&clave=" + clave;
			
	$.ajax({
		
		type:"POST",
		url:"php/consultar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				alertify.success("Inicio de sesion Exitoso :)");
				setTimeout("redireccionarPagina()", 2500);
			}else{
				alertify.error("Fallo el servidor :(", cadena );
			}
		}
	});

}
function redireccionarPagina() {
	window.location = "crud/html/index.php";
  }
 