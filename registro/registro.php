<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Suntic</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <link href='css/estilo.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/funcion1.js'></script>
    <script type='text/javascript' src='js/funciones.js'></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Registro Admin</h3>
                </div>
                <div class="panel-body p-3">
                    <form  method="POST">
                    <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text"  id="nombre" placeholder="Nombre" required> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" id="apellido" placeholder="Apellido" required> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="	far fa-envelope-open p-2"></span> <input type="text" id="email" placeholder="Email" required> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input  type="password" id="clave" placeholder="Ingrese clave" required> <button type="button" onclick="mostrar()" class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span></button> </div>
                        </div>
                        
                        <div type="button" id="registrar" class="btn btn-primary btn-block mt-3">Registrarse</div>
                        <div class="text-center pt-4 text-muted">¿Tienes Cuenta? <a href="../login.php">Inicia Sesion</a> </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
  <script type="text/javascript">
 $(document).ready(function(){
	$('#registrar').click(function(){
	  nombre=$('#nombre').val();
	  apellido=$('#apellido').val();
	  email=$('#email').val();
	  clave=$('#clave').val();
		agregardatos(nombre,apellido,email,clave);
        
	});

});
</script>   
</div>
</body>
</html>