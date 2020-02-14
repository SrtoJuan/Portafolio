<html>
	<head>
		<title>Curriculim</title>
		<link rel="stylesheet" href="index.css">
		<script src="java.js"></script>
		<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	</head>
	<body>
		<script>
			//Toggle de Datos Personales
			$(document).ready(function(){
				$("#datospersonales2").hide();
			});
			$(document).ready(function(){
				$("#datospersonales").on("click", function(){
					$("#datospersonales2").slideToggle(1000);
				});
			});
			//Toggle de Perfil Profesional
			$(document).ready(function(){
				$("#perfilProfesional2").hide();
			});
			$(document).ready(function(){
				$("#perfilProfesional").on("click", function(){
					$("#perfilProfesional2").slideToggle(1000);
				});
			});
			//Toggle de Formacion Academica
			$(document).ready(function(){
				$("#FormaciónAcadémica2").hide();
			});
			$(document).ready(function(){
				$("#FormaciónAcadémica").on("click", function(){
					$("#FormaciónAcadémica2").slideToggle(1000);
				});
			});
			//Toggle de Experiencia Laboral
			$(document).ready(function(){
				$("#experienciaLaboral2").hide();
			});
			$(document).ready(function(){
				$("#experienciaLaboral").on("click", function(){
					$("#experienciaLaboral2").slideToggle(1000);
				});
			});
			//Toggle de Competencias 
						$(document).ready(function(){
				$("#competencias2").hide();
			});
			$(document).ready(function(){
				$("#competencias").on("click", function(){
					$("#competencias2").slideToggle(1000);
				});
			});
			//Toggle de idiomas 
						$(document).ready(function(){
				$("#idiomas2").hide();
			});
			$(document).ready(function(){
				$("#idiomas").on("click", function(){
					$("#idiomas2").slideToggle(1000);
				});
			});
			//Toggle de datos Interes 
						$(document).ready(function(){
				$("#datosInteres2").hide();
			});
			$(document).ready(function(){
				$("#datosInteres").on("click", function(){
					$("#datosInteres2").slideToggle(1000);
				});
			});
			//Boton abrir todos
			$(document).ready(function(){
				$("#slideDownBoton").on("click", function(){
					$("#datospersonales2").slideDown(1000),
					$("#perfilProfesional2").slideDown(1000),
					$("#FormaciónAcadémica2").slideDown(1000),
					$("#experienciaLaboral2").slideDown(1000),
					$("#competencias2").slideDown(1000),
					$("#idiomas2").slideDown(1000),
					$("#datosInteres2").slideDown(1000);
				});
			});
			//Cerrar todas
			$(document).ready(function(){
				$("#slideUpBoton").on("click", function(){
					$("#datospersonales2").slideUp(1000),
					$("#perfilProfesional2").slideUp(1000),
					$("#FormaciónAcadémica2").slideUp(1000),
					$("#experienciaLaboral2").slideUp(1000),
					$("#competencias2").slideUp(1000),
					$("#idiomas2").slideUp(1000),
					$("#datosInteres2").slideUp(1000);
				});
			});
			//Cambiar signo
			$(document).ready(function(){
				$("#mas").on("click", function(){
					$('#mas').attr('src','menos.jpg');
					//$('#mas').attr('src','mas.jpg');
				});
			});
		</script>
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
			<article id="curriculum">
					<div id="datospersonales">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Datos personales
					</div>
					<div id="datospersonales2">
						<p>Nombre: Juan Ángel Bastante Ahijado </p>                                                
						<p>Fecha de Nacimiento: 03/03/1998</p>
						<p>DNI: 50334567B</p>
						<p>Dirección: C/ Mejorada Nº1</p>
						<p>Teléfono: 628216706</p>
						<p>Email: juan@gmail.com</p>
					</div>
					<div id="perfilProfesional">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Perfil Profesional
					</div>
					<div id="perfilProfesional2">
						<p>Me considero una persona responsable y proactiva. Las cualidades que me definen son facilidad comunicativa, buena adaptación a los cambios y gran capacidad de aprendizaje. Puedo trabajar tanto en grupo como de forma individual.</p>
					</div>
					<div id="FormaciónAcadémica">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Formación académica  
					</div>
					<div id="FormaciónAcadémica2">
						<p>-2017 Estudiando un doble Grado Superior de informática ( ASIR+DAW) en el centro José Ramón Otero.</p>
						<p>-2016 Título de Bachillerato de Ciencias Sociales en el centro Pablo Neruda.</p>
						<p>-2010-2014 Título de Educación Secundaria Obligatoria en el centro Pablo Neruda.</p>
					</div>
					<div id="experienciaLaboral">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Experiencia Laboral
					</div>
					<div id="experienciaLaboral2">
						<p>Ayuda en la empresa familiar</p>
						<p>Practicas realizada en Emergia</p>
					</div>
					<div id="competencias">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Competencias del grado superior
					</div>
					<div id="competencias2">
						<p>- Microsoft office</p>
						<p>- Oppen office</p>
						<p>- Conocimiento de lenguaje de programación: PHP y ASP</p>
						<p>- Conocimiento de diseño se páginas web: HTML, CCS y JS</p>
						<p>- Conocimiento de BBDD</p>
					</div>
					<div id="idiomas">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Idiomas
					</div>
					<div id="idiomas2">
						<p>Castellano:                                    Inglés:</p>
						<p>Lengua materna                             Nivel alto</p>
					</div>
					<div id="datosInteres">
						<img src="mas.jpg" alt="mas" id="mas" name="mas" height=10px
	width=10px> Datos Interes
					</div>
					<div id="datosInteres2">
						<p>·Carnet de conducir tipo B.</p>
						<p>·Me considero una persona competitiva, juego en un equipo de futbol sala.</p>
					</div>
					<button id="slideDownBoton">Abrir todos</button>
					<button id="slideUpBoton">Cerrar todos</button>
			</article>
		</section>
		<footer>
			<p><?php print(FOOTER);?></p>
		</footer>
	</body>
</html>