<html>
	<body>
		<?php 
			include("conexion.php");
			include("funciones.php");
			
			if(isset($_POST["nombre"])){
				$nombre=$_POST['nombre'];
				
				if ( $con = conectarBase($host,$usuario,$clave,$base) ){
		
					$consulta = "SELECT * FROM jugador where nombre='$nombre'";

					if ( $paquete = consultar($con, $consulta) ){
						$resultado = editarRegistro($paquete);
						echo $resultado;
					}else{
						echo "<p>No se encontraron datos</p>";
					}

				}
			}else{
				echo '<p>No se ha indicado cuál registro desea modificar.</p>';
			}
		?>
	</body>
</html>