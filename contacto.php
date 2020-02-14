<html id="normal">
	<head>
		<meta charset="utf-8" />
		<title>Portafolio HTML</title>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="jquery.css">
		<script src="java.js"></script>
		<script src="jquery.js"></script>
		<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	</head>
	<body ID="cambio">
		<?php
			include('cookie.php');
		?>
		<header>
			<div>
				<h1 id="fuente" id="juan">Portafolio HTML</h1>
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="ejercicios.php">Ejercicios</a></li>
				<li><a href="curriculum.php">Curriculum</a></li>
			</ul>
		</nav>
		<section>
			<article id="cambiar">
				<div id="formizq">
					<form action="contacto.php" method="get"> 
						<fieldset>
						  <legend>Datos Personales</legend>
							Nombre<br>
							<input type="text" placeholder="Tu nombre" name="nombre" required autofocus><br>
							Apellido<br>
							<input type="text" placeholder="Tu apellido" name="apellido"><br>
							Correo electronico<br>
							<input type="email" placeholder="Correo electrónico" name="email" required><br>
							Telefono<br>
							<!-- <input type="" placeholder="telefono" name="telefono"><br> -->
							<input pattern="[0-9]{9}" name="telefono" id="telefono" placeholder="910910910"><br>
							Genero<br>
							<input type="radio" name="gender" value="male" checked> Hombre<br>
							<input type="radio" name="gender" value="female"> Mujer<br>
							Codigo Postal<br>
							<input pattern="[0-9]{5}" name="codPostal" id="codPostal" placeholder="introduce los cinco digitos del codigo postal"><br>
							<br><input type="submit"  value="Enviar">
						</fieldset>
					</form>
				</div>
				<div id="formder">
					<form action="contacto.php" method="get"> 
						<fieldset>
							<legend>Empresa</legend>
							Nombre Empresa<br>
							<input type="text" placeholder="nombre empresa" name="empresa"><br>
							Pagina Web<br>
							<input type="url" placeholder="Tu web" name="url" required><br>
							Fecha incorporacion<br>
							<input type="date" placeholder="dd/mm/aaaa" name="fecha"><br>
							Puestos<br>
							<input type="text" name="puestos" list="puestos"/>
									<datalist id="puestos">
										<option value="Programador Junior">
										<option value="Programador Señor">
										<option value="Analista Junior">
										<option value="Analista Señor">
										<option value="Jefe">
									</datalist><br>
							Sueldo<br>
							<input id="range" type="range" min="1" max="201000" value="5" step="50">
							<input type="button" onclick="alert(document.getElementById('range').value);" value="Testear"><br>
							<input type="submit"  value="Enviar">
						</fieldset>
							<!--Color<br>
							<input type="color" placeholder="tipo color" name="color"><br>
							Numero<br>
							<input type="number" placeholder="introduce un numero" id="numero"  step="5" min="0" max="100" name="numero"><br>
							Codigo Postal<br>
							<input pattern="[0-9]{5}" name="codPostal" id="codPostal" placeholder="introduce los cinco digitos del codigo postal"><br>
							<br>-->
							
						</fieldset>
					 </form>
				</div>
			</article>
		</section>
		<aside>
			<div class="div1" id="colores">
				· Editor de colores
			</div>
			<div class="div1" id="colores2">
				Rojo<input id="rojo" type="range" onchange="cambiarColor()" onchange="iniciar()"name="rojo" step="1" value="50" min="0" max="255"><br>
				Azul<input id="verde" type="range" onchange="cambiarColor()" name="verde" step="1" value="80" min="0" max="255"><br>
				Rosa<input id="azul" type="range" onchange="cambiarColor()" name="azul" step="1" value="40" min="0" max="255"><br>
				Opacidad<input id="opacidad" type="range" onchange="cambiarColor()" name="opacidad" step="0.1" value="0.8" min="0" max="1"><br><br>
			</div>
			<div class="div2" id="fondoImg">
				· Editor de imagen de fondo
			</div>
			<div class="div2" id="fondoImg2">
				<button onclick="cambiarImg1()">
					<img id="img1" src="https://www.ilovewallpaper.co.uk/images/i-love-wallpaper-zara-shimmer-metallic-wallpaper-charcoal-copper-ilw980112-p4930-13215_image.jpg" width="50px" height="50px">
				</button>
				<button onclick="cambiarImg2()">
					<img id="img2" src="https://timedotcom.files.wordpress.com/2014/05/digital-blasphemy.jpg" width="50px" height="50px">
				</button>
				<button onclick="cambiarImg3()">
					<img id="img3" src="https://i.pinimg.com/originals/16/d6/b2/16d6b2f618fe8485ded6f2201734a89d.jpg" width="50px" height="50px">
				</button>	
				<button onclick="cambiarImg4()">
					<img id="img4" src="http://androidwidgetcenter.com/wp-content/uploads/2013/12/5-Android-HD-Wallpaper-sun-in-the-sea.jpg" width="50px" height="50px">
				</button><br><br>
			</div>
			<div class="div3" id="cambiarTamaño">
				· Editor de tamaño de la letra
			</div>
			<div class="div3" id="cambiarTamaño2">
				Cambiar Tamaño:<select onChange="cambiarTamano()" id="cambiartamano">
					 <option value="21px">21px</option>
					 <option value="35px">35px</option>
					 <option value="40px">40px</option>
					 <option value="65px">65px</option>
					 <option value="70px">70px</option>
					 <option value="80px">80px</option>
					 <option value="100px">100px</option>
				</select><br><br>
			</div>
			<div class="div4" id="cambiarAlineacion">
				· Editor la alineacion del texto
			</div>
			<div class="div4" id="cambiarAlineacion2">
				Cambiar Alineacion: <select onChange="cambiarAlineacion()" id="cambiaralineacion">
					 <option value="center">Centrado</option>
					 <option value="right">Derecha</option>
					 <option value="left">Izquierda</option>
				</select><br><br>
			</div>
			<div class="div5" id="cambiarEstilo">
				· Editor estilo de la pagina
			</div>
			<div class="div5" id="cambiarEstilo2">
				<button onclick="Estilo1()">Estilo 1</button>
				<button onclick="Estilo2()">Estilo 2</button>
				<button onclick="Estilo3()">Estilo 3</button>
				<button onclick="Estilo4()">Estilo 4</button>
				<button onclick="reload()">Normal</button>
			</div>
			<div class="div6" id="cambiarIdioma">
				· Editor estilo de la pagina
			</div>
			<div class="div6" id="cambiarIdioma2">		
				<form action="index.php" method="post">
					<legend>Idioma</legend>
						<select name="idioma">
							<option value="espanol.php">Español</option>
							<option value="english.php">Ingles</option>
						</select>
					<legend>Color</legend>
						<select  name="combo">
							 <option value="green">Verde</option>
							 <option value="blue">Azul</option>
							 <option value="red">Rojo</option>
						</select>
					<input type="submit" name="boton" value="boton">
					</fieldset>
				<form><br>
			</div>
		</aside>
		<footer>
			<style>
			body{
				background-color:<?php print ($color) ?>;
			}
		</style>
			<p><?php print(FOOTER);?></p>
		</footer>
		<script>

		</script>
</body>
</html>