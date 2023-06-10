<?php 
	require_once "../php/conexion.php";
 ?>

<div class="row">
	<div class="col-sm-4"></div>
	
	<?php
	$conexion=conexion();
		$sql="SELECT * FROM usuarios ";
				$result=mysqli_query($conexion,$sql);
	 ?>

	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Buscar Usuario</option>
			<?php
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[0];?>
					<?php echo $ver[1];?>
					<?php echo $ver[2];?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function(){
			$('#buscador_estado').select2();

			$('#buscador_estado').change(function(){
				$.ajax({
					type:"post",
					data:'estado_pl=' + $('#buscador_estado').val(),
					url:'./php/session2.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
						alertify.success("Cargo Tabla");

					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'./php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
					}
				});
			});
		});
	</script>