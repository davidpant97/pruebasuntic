<?php
require_once "conexion.php";
$conexion=conexion();
$nombres = $_POST['n'];
$apellido = $_POST['a'];
$cedula = $_POST{'c'};
$ruta_archivo = "";
if(is_array($_FILES) && count($_FILES)>0){

    if(move_uploaded_file($_FILES["d"]["tmp_name"],"../soportes_pdf/".$_FILES["d"]["name"])){
        $ruta_archivo='./soportes_pdf/'.$_FILES["d"]["name"];
        $sql="INSERT into usuarios (nombre_usuario,apellido_usuario,id_usuario,documento_usuario)
								values ('$nombres','$apellido','$cedula','$ruta_archivo')";
	    $result=mysqli_query($conexion,$sql);
        echo 1;
    }else{
        echo 0;
    }

}else{
    echo 0;
}


?>