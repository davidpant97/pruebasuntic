<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>

	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>


<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm-6" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="id_usuario" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre_usuario" class="form-control input-sm">
          <label>Apellido</label>
          <input type="text" name="" id="apellido_usuario" class="form-control input-sm">
          
          <label> Ver Soporte de PDF</label>
          <button type="button" id="modal_actualiza" class="btn btn-success glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#foto_CC" onclick="CC($('#id_usuario').val());return false;">
          </button>    
        </div>
        
     
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
       </div>
    </div>
  </div>

</div>


<div class="container"> 
    <div class="modal fade" id="foto_CC">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
    
          <!-- cabecera del diálogo -->
          <div class="modal-header">
            <h4 class="modal-title">Soportes Usuario</h4>
            <button type="button" class="close" id="cerrar_modal" data-dismiss="modal">X</button>
          </div>
          
          <!-- cuerpo del diálogo -->
          <div   class="modal-body">
            <input hidden="" type="text" name="" id="cedula_id">
              
                <p class="col-12" id="preview"></p>
        
                <input hidden="" type="text" id="direccion_img" name="">
                <input hidden="" type="text" id="tipo_img" name="">
              <div class="col-sm-12 row">
            <label>Editar Soporte</label>
        <form id="uploadimage" method="POST" enctype="multipart/form-data">
          <input type="file" class="col-sm-6 btn btn-warning glyphicon glyphicon-pencil" name="imagen" id="imagen">
              <div class="col-sm-2"></div>
            <button type="button" id="actualizarcc" class="col-sm-4 btn btn-success glyphicon glyphicon-refresh"> Cambiar</button>
            <br>
          <hr>
        </form>
        
      </div>

    
                   </div>
    <br>
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
    
        </div>
      </div>
    </div> 

  </div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#actualizarcc').click(function(){
            var CC = $("#cedula_id").val();
            var archivo = $("#imagen").val();
            if(CC.length==0){
              alertify.error("Error en el id del cliente");
            }

            else if(archivo.length==0){
              alertify.error("Adjunte su archivo :o");
            }
          
             else if($("#imagen")[0].files[0].type != "application/pdf"){
                alertify.error("El Archivo no es PDF");
              }
            
            else {
              
              var formData= new FormData();
            var foto = $("#imagen")[0].files[0];
            formData.append('d',foto);
            formData.append('c',CC);
            $.ajax({
                url:'php/actualizasoportes.php',
                type:'post',
                data:formData,
                contentType:false,
                processData:false,
                success: function(respuesta){
                    if(respuesta !=0){
                      alertify.success("Actualizado con exito :)");

                      $( document ).ready(function() {
                        $("#cerrar_modal").click();
                      });

  setTimeout(function(){
    $( document ).ready(function() {
    $("#modal_actualiza").click();
  });
}, 2000);
 
                    }
                }
            });
            return false;

           
        }
        });
    });
    
    
    </script>