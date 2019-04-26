<html>
	<head>
		<meta charset="utf-8" />
		<title>Portafolio HTML</title>
		<link rel="stylesheet" href="index.css">
		<script src="java.js"></script>
	</head>
	<body>
		<?php
			include('cookie.php');
		?>
		<header id="animacionPrincipio">
			<div>
				<h1 id="fuente">Portafolio HTML</h1>
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
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec lectus a mi dignissim tempor. Curabitur eu sollicitudin mi. Donec felis ex, blandit a eleifend nec, vulputate a sem. Aenean non malesuada arcu, sed scelerisque orci. Aenean in maximus sapien, iaculis placerat justo. Nulla nec odio ut nunc pharetra ultricies. Aenean blandit rhoncus porta. Proin risus massa, congue porta ipsum et, pretium aliquam urna.Aenean tincidunt ante odio, vel imperdiet felis dapibus sed. Nunc sit amet enim nulla. Fusce ac pulvinar nunc. Vestibulum molestie, justo et venenatis consequat, tellus elit gravida lorem, sed fringilla neque eros quis velit. Nam a varius velit, a sollicitudin sapien. Etiam vulputate nibh et turpis pellentesque, vel egestas nisi semper. Etiam dapibus felis nec neque fringilla, sit amet tempor diam sollicitudin. Fusce eu lobortis magna, et feugiat enim. Suspendisse posuere ante sed justo commodo aliquet.</p>
					<img src="" alt="">
			</article>
		</section>
		<aside>
					Rojo<input id="rojo" type="range" onchange="cambiarColor()" name="rojo" step="1" value="50" min="0" max="255"><br>
			Azul<input id="verde" type="range" onchange="cambiarColor()" name="verde" step="1" value="80" min="0" max="255"><br>
			Rosa<input id="azul" type="range" onchange="cambiarColor()" name="azul" step="1" value="40" min="0" max="255"><br>
			Opacidad<input id="opacidad" type="range" onchange="cambiarColor()" name="opacidad" step="0.1" value="0.8" min="0" max="1"><br><br>

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
	
			Cambiar Tamaño:<select onChange="cambiarTamano()" id="cambiartamano">
				 <option value="21px">21px</option>
				 <option value="35px">35px</option>
				 <option value="40px">40px</option>
				 <option value="65px">65px</option>
				 <option value="70px">70px</option>
				 <option value="80px">80px</option>
				 <option value="100px">100px</option>
			</select><br><br>
			
			Cambiar Alineacion: <select onChange="cambiarAlineacion()" id="cambiaralineacion">
				 <option value="center">Centrado</option>
				 <option value="right">Derecha</option>
				 <option value="left">Izquierda</option>
			</select><br><br>
			<button onclick="Estilo1()">Estilo 1</button>
			<button onclick="Estilo2()">Estilo 2</button>
			<button onclick="Estilo3()">Estilo 3</button>
			<button onclick="Estilo4()">Estilo 4</button>
			<button onclick="reload()">Normal</button>
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
		</aside>
		<footer>
			<p><?php print(FOOTER);?></p>
		</footer>
		
</body>
</html>
