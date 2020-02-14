<html>
	<body>
		<?php
			include("conexion.php");
			include("funciones.php");
			
			if ( isset($_POST["nombre"],$_POST["equipo"],$_POST["posicion"],$_POST["pais"]){
				if ( $con = conectarBase($host,$usuario,$clave,$base) ){

					@mysqli_query($con, "SET NAMES 'utf8'");
					
					$nombre = $_POST["nombre"];
					$equipo = $_POST["equipo"];
					$posicion = $_POST["posicion"];
					$pais = $_POST["pais"];


					$consulta = "UPDATE jugador SET nombre='$nombre', equipo='$equipo', posicion='$posicion', pais='$pais' WHERE id='$nombre'";

					if( mysqli_query($con, $consulta) ){
						echo "<p>Registro actualizado.</p>";
					}else{
						echo "<p>No se pudo actualizar</p>";
					}	
				}else{
					echo "<p>Servicio interrumpido</p>";
				}
			}else{
				echo '<p>No se ha indicado cuál registro desea modificar.</p>';
			}
		?>
	</body>
</html>