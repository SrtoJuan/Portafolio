<html>
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
				<body onload="init()">
		<h1 id="arkanoidT">ARKANOID</h1>
		<canvas id="canvas" width="300" height="300" style="border:1px solid;"></canvas>
		   <br>
		   <form>
				<input id="start" type="submit" onclick="startdraw(); return false;" value="start">
				<input id="clear" type="submit" onclick="abort(); return false;" value="clear">
			</form>
			<p></p>
			<p></p>
			<h1 id="ranking">Ganadores</h1>
			
			<section id="ganadores">
				No hay ganadores
			</section> 
			<img id="chip" width="220" height="277" src="chip.jpg" style="display:none;">
		<script>
			var WIDTH = 300;
			var HEIGHT = 300;
			var x = WIDTH/2;
			var y = HEIGHT-10;
			var paddlex = WIDTH/2;
			var paddledx = WIDTH/75;
			var paddlewidth = WIDTH/4;
			var dx = 8;
			var dy = -8;
			var intervalID = 0;
			var canvas, ctx;
			var rightDown = false;
			var leftDown = false;
			var mouser = "deleteme";
			var windowMinX = 0;
			var windowMaxX = 0;
			var NROWS = 5;
			var NCOLS = 5;
			var BRICKWIDTH = (WIDTH/NCOLS) - 1;
			var BRICKHEIGHT = 15;
			var PADDING = 1;
			var bricks;
			var vidas = 0;
			var nombre;
			var colores = ["#FF1C0A", "#FFFD0A", "#00A308", "#0008DB", "#EB0093"];;
			var img = document.getElementById("chip");
			var puntos = parseInt("0");
			
			function init() {
				/*var boton=document.getElementById('mostar');
				boton.addEventListener('click', mostarGanadores, false);*/
				x = WIDTH/2;
				y = HEIGHT-20;
				dx = 1;
				dy = -4;
				paddlex = WIDTH/2;
				canvas = document.getElementById("canvas");
				ctx = canvas.getContext("2d");
				windowMinX = $("#canvas").offset().left;
				windowMaxX = windowMinX + $("#canvas").width();
				nombre = prompt ("Introduce tu nombre");
				vidas = parseInt(prompt("Introduce el numero de vidas"));
				//document.write(nombre); 
				//document.write(vidas); 
				initbricks();
				draw();
			}

			function initbricks() {
				bricks = new Array(NROWS);
				for (i=0; i < NROWS; i++) {
					bricks[i] = new Array(NCOLS);
					for (j=0; j < NCOLS; j++) {
						bricks[i][j] = 1;
					}
				}
			}

			function startdraw() {
				x = WIDTH/2;
				y = HEIGHT-10;
				clearInterval(intervalID);
				intervalID = setInterval(draw, 20);
				initbricks();
			}

			function abort() {
				clearInterval(intervalID);
				init();
			}

			function draw() {
				ctx.clearRect(0,0,300,300);
				ctx.drawImage(img, 0, 0,300,300);
				
				ctx.font = "15px Georgia";
				ctx.fillStyle='white';
				ctx.fillText("Nombre: "+nombre, 5, 230);
				ctx.fillText("Vidas: "+vidas, 5, 246);
				ctx.fillText("Puntos: "+puntos, 5, 261);
				
				//draw ball
				ctx.fillStyle = 'white';
				ctx.beginPath();
				ctx.arc(x,y,10,0,Math.PI*2,true); 
				ctx.fill();

				px = paddlex - paddlewidth / 2;
				ctx.fillRect(px, HEIGHT-10, paddlewidth, HEIGHT);

				//draw bricks
				for (i=0; i < NROWS; i++) {
					ctx.fillStyle = colores[i];
					for (j=0; j < NCOLS; j++) {
						if (bricks[i][j] == 1) {
							ctx.fillRect((j * (BRICKWIDTH + PADDING)) + PADDING, 
										 (i * (BRICKHEIGHT + PADDING)) + PADDING,
										 BRICKWIDTH, BRICKHEIGHT);
						}
					}
				}
				
				if (puntos>=250){
					localStorage.setItem(nombre,puntos);
					
					var ganadores=document.getElementById('ganadores');
					ganadores.innerHTML='';
							
					for(var f=0;f<localStorage.length;f++){
						 var nombre1=localStorage.key(f);
						 var puntos1=localStorage.getItem(nombre1);
						 ganadores.innerHTML+='<table border="1px solid black"><tr><td>'+nombre1+'-'+puntos1+'</td></tr></table>';
					}
					
					ctx.font = "25px Georgia";
					ctx.fillStyle = "white";
					ctx.fillText("HAS GANADO", 60, 160);
					clearInterval(intervalID);
					
					var ganadores=document.getElementById('ganadores');
					ganadores.innerHTML='';
					
					for(var f=0;f<localStorage.length;f++){
						 var nombre2=localStorage.key(f);
						 var puntos2=localStorage.getItem(nombre2);
						 ganadores.innerHTML+='<table id="tablaGanadores" border="1px solid black"><tr><td>'+nombre2+'-'+puntos2+'</td></tr></table>';
					}
				}
				
				//update x and y
				x += dx;
				y += dy;

				//have we hit a brick?
				rowheight = BRICKHEIGHT + PADDING;
				colwidth = BRICKWIDTH + PADDING;
				row = Math.floor(y/rowheight)
				col = Math.floor(x/colwidth)
				if (y < NROWS * rowheight && row >= 0 && col >= 0 && bricks[row][col] == 1) {
					dy = -dy;
					bricks[row][col] = 0;
					puntos+=10;
				}

				//have we hit a wall
				if (x > WIDTH || x < 0) {
					x -= 2*dx;
					dx = -dx;
				}
				//have we hit a paddle
				if (y + 10 > HEIGHT && x > px && x < px + paddlewidth) {
				  dx = 8 * ((x-(px+paddlewidth/2))/paddlewidth);
				  console.log(x.toString() +"|"+ px.toString())
				  y -= 2*dy;
				  dy = -dy;
				}
				//or the ceiling
				else if (y < 0) {
					y -= 2*dy;
					dy = -dy;
				}
				else if (y > HEIGHT) {
					//TODO: you lose!
					vidas--;
					if (vidas >= 0){
						dy=-dy;
						x=150;
						y=270;
					}else{
						/*imprimir has perdidoº*/
						localStorage.setItem(nombre,puntos);
						ctx.font = "25px Georgia";
						ctx.fillStyle='white';
						ctx.fillText("HAS PERDIDO", 60, 160);
						
						clearInterval(intervalID);	
					}
				}
				
				if (leftDown){
					paddlex -= paddledx;
				}else if (rightDown){
					paddlex += paddledx;
				}

			}

			function doKeyDown(evt) {
				//right is 39 left is 37
				if (evt.keyCode == 39) {
					rightDown = true;
				}
				else if (evt.keyCode == 37) {
					leftDown = true;
				}
			}

			function doKeyUp(evt) {
				if (evt.keyCode == 39) {
					rightDown = false;
				}
				else if (evt.keyCode == 37) {
					leftDown = false;
				}
			}

			function mousemove(evt) {
				minX = evt.pageX - (paddlewidth/2);
				maxX = evt.pageX + (paddlewidth/2);
				if (minX > windowMinX && maxX < windowMaxX) {
					paddlex = evt.pageX - windowMinX;
				}
			}

			function touchmove(evt) {
				if (evt.touches.length==1) {
					paddlex = evt.touches[0].pageX - windowMinX;
				}
			}
		
			/*function mostarGanadores(){
				var ganadores=document.getElementById('ganadores');
				ganadores.innerHTML='';
				
				for(var f=0;f<localStorage.length;f++){
					 var nombre=localStorage.key(f);
					 var puntos=localStorage.getItem(nombre);
					 ganadores.innerHTML+='<table border="1px solid black"><tr><td>'+nombre+'-'+puntos+'</td></tr></table>';
				} 
			}*/
			
			window.addEventListener('keydown',doKeyDown,false);
			window.addEventListener('keyup',doKeyUp,false);
			window.addEventListener('mousemove',mousemove,false);
			window.addEventListener('touchmove',touchmove,false);
			//window.addEventListener('load', iniciar, false);
		</script>
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
			<p>Información corporativa | Copyright © empresa, S. A. 2018, Todos los derechos reservados | Aviso legal | Política de Privacidad | Gestión publicitaria</p>
		</footer>
</body>
</html>