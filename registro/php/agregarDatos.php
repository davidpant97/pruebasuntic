<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$ps=$_POST['clave'];

	$sql="INSERT into administrador (nombre_admin,apellido_admin,email_admin,clave_admin)
								values ('$n','$a','$e','$ps')";
	echo $result=mysqli_query($conexion,$sql);

 ?>