
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xs-12">
	
		<table id="tabla-generales" class="col-12 col-sm-12 col-lg-12 col-md-12  responsive-table table table-hover table-condensed table-bordered">
		<caption>
			
		</caption>
			<tr>
				<td>Id_Usuario</td>
				<td>Nombre Usuario</td>
				<td>Apellido Usuario</td>
				<td>Editar</td>
				<td>Eliminar</td>
			
			</tr>

			<?php 

                $sql="SELECT * FROM usuarios ";
                $result=mysqli_query($conexion,$sql);

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2];
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				

				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
				
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>