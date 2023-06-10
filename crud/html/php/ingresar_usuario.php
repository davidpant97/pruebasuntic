<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['cc'];
	$ps=$_POST['pdf'];
	

	$sql="INSERT into usuarios (nombre_usuario,apellido_usuario,id_usuario,documento_usuario)
								values ('$n','$a','$e','$ps')";
	echo $result=mysqli_query($conexion,$sql);

 ?>