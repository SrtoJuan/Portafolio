<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Portafolio HTML</title>
		<link rel="stylesheet" href="index.css">
		<script src="java.js"></script>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="jquery.js"></script>
	</head>
	<body>
		<header>
			<div>
				<h1 id="juan">Portafolio HTML</h1>
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
				<img src="ppt.png" alt="logo" id="logo">
			<div id="cont">
				<img src="papel.png" alt="papel" id="papel" class="imagen">
				<img src="piedra.png" alt="piedra" id="piedra" class="imagen">
				<img src="tijera.png" alt="tijera" id="tijera" class="imagen">
			</div>
			<img class="imagenVacia" id="" src="" alt="">
			<p id="resultado"></p>
			<div>
				<p id="jugador">Jugador</p>
				<p id="jugadorPuntos">0</p>
				
			</div>
			<div>
				<p id="cpuPuntos">0</p>
				<p id="cpu">CPU</p>
			</div>
			<script>
				$(document).ready(function () {
					$(function () {
						$('.imagen').click(function () {
							var material = $(this).attr("id");
							var random = Math.floor(Math.random() * 3);
							var materialCPU;
							var ganador;
							
							if(random == 0){
								materialCPU = 'papel';
								$(".imagenVacia").attr({
									"id":"papel",
									"src":"papel.png",
									"alt":"papel"
								});
							}else if(random == 1){
								materialCPU = 'piedra';
								$(".imagenVacia").attr({
									"id":"piedra",
									"src":"piedra.png",
									"alt":"piedra"
								});
							}else if(random == 2){
								materialCPU = 'tijera';
								$(".imagenVacia").attr({
									"id":"tijera",
									"src":"tijera.png",
									"alt":"tijera"
								});
							}
							
							if(material == materialCPU){
								ganador = "empate";
							}else if((material=="papel" && materialCPU=="piedra") || (material=="piedra" && materialCPU=="tijera") || (material=="tijera" && materialCPU=="papel")){
								ganador = "jugador";
								//Sumamos los puntos a jugador
								var puntos = ($('#jugadorPuntos').html());
								puntos += 1;
								$('#resultado').html("El jugador elige "+material+", la maquina elige "+materialCPU+".El ganador es "+ganador);
							}else{
								ganador = "ordenador";
								//Sumamos los puntos a cpu
								var puntos = ($('#cpuPuntos').html());
								puntos += 1;
								$('#resultado').html("El jugador elige "+material+", la maquina elige "+materialCPU+".El ganador es "+ganador);
							}
							
							if(ganador=="empate"){
								$('#resultado').html("El jugador elige "+material+", la maquina elige "+materialCPU+".El resultado es "+ganador);
							}
						});
					});
				});
			</script>
			</article>
		</section>
		<aside>
			Rojo<input id="rojo" type="range" onchange="cambiarColor()" name="rojo" step="1" value="50" min="0" max="255"><br>
			Azul<input id="verde" type="range" onchange="cambiarColor()" name="verde" step="1" value="80" min="0" max="255"><br>
			Rosa<input id="azul" type="range" onchange="cambiarColor()" name="azul" step="1" value="40" min="0" max="255"><br>
			Opacidad<input id="opacidad" type="range" onchange="cambiarColor()" name="opacidad" step="0.1" value="0.8" min="0" max="1"><br><br>

			<button onclick="cambiarImg1()">
				<img id="img1" alt ="imagen1" src="https://www.ilovewallpaper.co.uk/images/i-love-wallpaper-zara-shimmer-metallic-wallpaper-charcoal-copper-ilw980112-p4930-13215_image.jpg" width="50" height="50">
			</button>
			<button onclick="cambiarImg2()">
				<img id="img2" alt ="imagen2" src="https://timedotcom.files.wordpress.com/2014/05/digital-blasphemy.jpg" width="50" height="50">
			</button>
			<button onclick="cambiarImg3()">
				<img id="img3" alt ="imagen3" src="https://i.pinimg.com/originals/16/d6/b2/16d6b2f618fe8485ded6f2201734a89d.jpg" width="50" height="50">
			</button>	
			<button onclick="cambiarImg4()">
				<img id="img4" alt ="imagen4" src="http://androidwidgetcenter.com/wp-content/uploads/2013/12/5-Android-HD-Wallpaper-sun-in-the-sea.jpg" width="50" height="50">
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
			<button onclick="reload()">Normal</button>
		</aside>
		<footer>
			<p>Información corporativa | Copyright © empresa, S. A. 2013, Todos los derechos reservados | Aviso legal | Política de Privacidad | Gestión publicitaria</p>
		</footer>
</body>
</html>