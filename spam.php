<html>
	<body>
		<?php
			if(isset($_POST['boton'])){
					$abierto = fopen ("deposito.txt", "w");
					
					$nombre = $_POST["nombre"];
					$email = $_POST["email"];
					$texto = $nombre." - ".$email;
					
					if (fputs ($abierto,$texto)){

						print ("<p>Gracias por sus datos</p>");

					} else {

						print ("<p>Hubo un error. Intente nuevamente</p>");

					}
					fclose ($abierto);
			}
		?>
	</body>
</html>