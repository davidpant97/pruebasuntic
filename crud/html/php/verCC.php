<?php 
	
require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['identificacion'];

	$sql="SELECT documento_usuario,id_usuario FROM usuarios WHERE id_usuario ='$id'";
	$result=mysqli_query($conexion,$sql);
	while($ver=mysqli_fetch_row($result)){ 
			echo $url = $ver[0]."||".
					$ver[1];

	};
			 ?>
			
