<?php 
	require_once "../php/conexion.php";
	
	$conexion2=conexion();

		$sql2="SELECT pk_estado, estado_pol FROM estado_pl";
			$result2=mysqli_query($conexion2,$sql2);


 ?>
<br><br>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<label>Buscador Estado</label>
		<select id="buscador_estado" class="form-control input-sm">
			<option value="0">Estado Poliza</option>
			<?php
				while($ver2=mysqli_fetch_row($result2)): 
			 ?>
				<option value="<?php echo $ver2[0] ?>">
					<?php echo $ver2[1];?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
	<?php
	$conexion=conexion();
		$sql="SELECT cedula_medico, nombre_med, apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1";
				$result=mysqli_query($conexion,$sql);
	 ?>

	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Buscar Medico</option>
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