<?
  session_start();  
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="css/modal.css" />
  <link href="css/animate.min.css" rel="stylesheet"/>
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
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
       
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Inicio de SUNTIC </span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Inicio</span>
              </a>
            </li>
            </li>
            <li class="sidebar-item">
              <button type="button" class="sidebar-link" data-toggle="modal" data-target="#modalNuevo" aria-expanded="false">
                <span>
                
                  
                </span>
                <span class="hide-menu" >Ingresar Usuario</span>
              </button>
              
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Cerrar Sesion</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="php/salir.php" aria-expanded="false">
                <span>
                  <i class="xbox-x"></i>
                </span>
                <span class="hide-menu">Cerrar Sesion</span>
              </a>
            </li>
            
          </ul>
        
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light"> 
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            
          </ul>
         
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <from  method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellido" class="form-control input-sm">
        	<label>CC</label>
        	<input type="text" name="" id="cc" class="form-control input-sm">
        	<label for="img_usu" accept="application/pdf" >Soporte en PDF</label>
        	<input  type="file" class="form-control" accept="application/pdf" id="document" name="img_document" size="30">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo" name="btnEnviar">
        Guardar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
    
                
                <div class="content col-12 col-sm-12 col-lg-12 col-md-12 col-xs-12">
            <div class="container-fluid col-12 col-sm-12 col-lg-12 col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="card-title fw-semibold mb-4 text-center">Usuarios</h4>
                                <h5 class="card-title fw-semibold mb-5 text-center">Tabla de Usuarios</h5>
                            </div>
                            <div class="content table-responsive table-full-width ">
                                 <iframe class="col-12 col-sm-12 col-lg-12 col-md-12 col-xs-12" id= "tabla" style="height: 700px;" src="tabla_usuario.php"></iframe>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
 
  <script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          var nombres = $("#nombre").val();
            var apellidos = $("#apellido").val();
            var CC = $("#cc").val();
            var archivo = $("#document").val();
            if(nombres.length==0 || apellidos.length==0 || CC.length==0){
              alertify.error("Campos Vacios :o");
            }

            else if(archivo.length==0){
              alertify.error("Adjunte su archivo :o");
            }
          
             else if($("#document")[0].files[0].type != "application/pdf"){
                alertify.error("El Archivo no es PDF");
              }
            
            else {
              
              var formData= new FormData();
            var foto = $("#document")[0].files[0];
            formData.append('d',foto);
            formData.append('n',nombres);
            formData.append('a',apellidos);
            formData.append('c',CC);
            $.ajax({
                url:'php/subirimagen.php',
                type:'post',
                data:formData,
                contentType:false,
                processData:false,
                success: function(respuesta){
                    if(respuesta !=0){
                      setTimeout(function(){
    
      location.reload();

}, 2000);
                    
				
                      alertify.success("agregado con exito :)");
                    }
                }
            });
            return false;

           
        }
        });
    });
    
    </script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  
  <script type='text/javascript' src='js/funciones.js'></script>
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
</body>

</html>