
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
				<td>Cédula</td>
				<td>Nombre Médico</td>
				<td>Apellido Médico</td>
				<td><span>Especialidad</span></td>
				<td>RUT</td>
				<td><span>Asuguradora</span></td>
				<td>Fecha Inicio</td>
				<td><span>Fecha Vencimiento</span></td>
				<td><span>Estado</span></td>
				<td>Editar</td>
				<td>Eliminar</td>
				<td>Actualizar Soportes</td>
			</tr>

			<?php 

				
				if(isset($_SESSION['md_poliza'])){

					if($_SESSION['md_poliza'] == 1){

						$poliza = $_SESSION['md_poliza'];
						
						$sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1 AND epl.pk_estado ='$poliza'";
					}elseif ($_SESSION['md_poliza'] == 2) {
				
						
						$sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1 AND epl.pk_estado ='2'";
					
				}elseif($_SESSION['md_poliza'] == 3){
				    $sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1 AND CURDATE()>=date_add(pl.fecha_fin, INTERVAL -15 DAY) AND pl.fecha_fin > CURDATE()";
				}else{
					$sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1";
				}
			}else{
					$sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1";
				}
				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1 AND cedula_medico ='$idp'" ;
					}else{
						$sql="SELECT cedula_medico,nombre_med,apellido_med, espe.nombre_ep, rut_medico, pl.nombre_pl, pl.fecha_ini, pl.fecha_fin, epl.estado_pol FROM medico INNER JOIN poliza pl ON pl.fk_medico = pk_md INNER JOIN estado_pl epl ON pl.fk_estado = epl.pk_estado INNER JOIN especialidad espe ON fk_ep = espe.pk_ep WHERE fk_ep = 1";
					}
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||".
						   $ver[8];
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>

				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-success glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#modalsoporte" onclick="agregaform2('<?php echo $datos ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>