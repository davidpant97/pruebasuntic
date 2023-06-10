<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$ape = $_POST['apellido'];
	


	$sql="UPDATE usuarios SET nombre_usuario = '$n', apellido_usuario = '$ape' WHERE id_usuario ='$id'";

	echo $result=mysqli_query($conexion,$sql);

