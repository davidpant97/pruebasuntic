

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="123456";
			$bd="suntic";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>