
<?php
require_once "conexion.php";
$conexion=conexion();
$cedula = $_POST{'c'};
$ruta_archivo = "";
if(is_array($_FILES) && count($_FILES)>0){

    if(move_uploaded_file($_FILES["d"]["tmp_name"],"../soportes_pdf/".$_FILES["d"]["name"])){
        $ruta_archivo='./soportes_pdf/'.$_FILES["d"]["name"];
        $sql="UPDATE usuarios SET documento_usuario = '$ruta_archivo' WHERE id_usuario ='$cedula'";
	    $result=mysqli_query($conexion,$sql);
        echo 1;
    }else{
        echo 0;
    }

}else{
    echo 0;
}


?>