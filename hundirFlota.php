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
			<article id ="cambiar article">
				<p id="vidas"></p>
				<script>
					var aux="";
					var filas=parseInt(prompt("Introduce un numero de filas: "));
					var columnas=parseInt(prompt("Introduce un numero de columnas: "));
					var vidas=parseInt(prompt("Introduce un numero de vidas: "));
					var arrayP = new Array(columnas);
					for (i = 0; i < columnas; i++) {
						arrayP[i]= new Array(filas);
					} 
					var aux= aux+"<table id=\"tabla\" border=\"2px solid black\" align=\"center\" height=\"50px\" width=\"50px\">";
					for (var i=0;i<columnas;i++){
						aux+="<tr>";
						for (var x=0;x<filas;x++){
							aux+="<td id="+i+x+" onmousedown=\"mousedown(event)\" onmouseup=\"Coordenadas(event)\"><img src=\"mar.jpg\" height=\"50px\" width=\"50px\"></td>";
							arrayP[i][x]= Math.floor(Math.random()*2);
						}	
						aux= aux+"</tr>";
					}
					aux= aux+"</table>";
					document.write(aux);
					function mousedown(event){
						var x = event.clientX;
						var y = event.clientY;
						console.log(x);
						console.log(y);
						var x= x - document.getElementById("tabla").offsetLeft;
						var y = y- document.getElementById("tabla").offsetTop;
						var ejex= Math.floor(x/60); //Dividimos la coordenada x por el tamaño de la celda(50px)
						var ejey= Math.floor(y/60); //Dividimos la coordenada y por el tamaño de la celda(50px)
						document.getElementById(ejey+""+ejex).innerHTML="<img src=\"mira.png\" height=\" 50px\" width=\"50px\">";
					}
					function Coordenadas(event){
						var x = event.clientX;
						var y = event.clientY;
						console.log(x);
						console.log(y);
						var x = x - document.getElementById("tabla").offsetLeft;
						var y = y - document.getElementById("tabla").offsetTop;
						var ejex= Math.floor(x/60); //Dividimos la coordenada x por el tamaño de la celda(50px)
						var ejey= Math.floor(y/60); //Dividimos la coordenada y por el tamaño de la celda(50px)
						var perder = true;
					
						
						switch(arrayP[ejey][ejex]){
							case 0:
								document.getElementById(ejey+""+ejex).innerHTML="<img src=\"agua.jpg\" height=\" 50px\" width=\"50px\">";
								break;
							case 1:
								document.getElementById(ejey+""+ejex).innerHTML="<img src=\"barco-hundido.jpg\" height=\" 50px\" width=\"50px\">";
								arrayP[ejey][ejex]=2;
								perder = false;
								break;
						}
						//Comprobar Perder
						if (perder){
							vidas--;				
						}
						document.getElementById("vidas").innerHTML = "Te quedan "+vidas+" vidas";
						if (vidas == 0){
							document.getElementById("article").innerHTML ="<img src=\"perder.gif\" height=\" 200px\" width=\"200px\" align=\"center\">";
						}
						//Comprobar Ganar
						var ganar = true;
						for (var i=0;i<columnas;i++){
							for (var x=0;x<filas;x++){
								if (arrayP[i][x] == 1){
									ganar = false;
								}
							}	
						}
						if (ganar){
							document.getElementById("article").innerHTML ="<img src=\"ganar.gif\" height=\" 200px\" width=\"200px\" align=\"center\">";
						}
					}
				</script>
				<form action="ejercicios.php" method="post" id="volver">
					<input type="submit" value="Volver" name="volver">
				</form>
			</article>
		</section>
		<aside>
			<div class="div1" id="colores">
				· Editor de colores
			</div>
			<div class="div1" id="colores2">
				Rojo<input id="rojo" type="range" onchange="cambiarColor()" name="rojo" step="1" value="50" min="0" max="255"><br>
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
			<p>Información corporativa | Copyright © empresa, S. A. 2013, Todos los derechos reservados | Aviso legal | Política de Privacidad | Gestión publicitaria</p>
		</footer>
</body>
</html>