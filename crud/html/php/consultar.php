<?php 

	require_once "conexion.php";
	$conexion=conexion();
	
	$e=$_POST['email'];
	$ps=$_POST['clave'];

	$sql="select count(*) from administrador where email_admin ='$e' and clave_admin ='$ps'";
	$result=mysqli_query($conexion,$sql);
	while($ver=mysqli_fetch_row($result)){ 
		echo $url = $ver[0];


	};

 ?>