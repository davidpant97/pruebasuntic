
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	
	$id=$_POST['id'];
	

	
	$sql1="DELETE FROM usuarios WHERE id_usuario='$id'";
	echo $result1=mysqli_query($conexion,$sql1);
	

	
 ?>