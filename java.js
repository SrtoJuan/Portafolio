//Funcion cambiar color
			function cambiarColor(){
				
					var rojo=document.getElementById("rojo").value;
					var verde=document.getElementById("verde").value;
					var azul=document.getElementById("azul").value;
					var opacidad=document.getElementById("opacidad").value;
				
					
				//document.getElementById("pepe").style.backgroundColor= "red";
				//document.getElementById("pepe").style.backgroundColor= "rgba("+rojo+","+azul+","+rosa+",1)";
				document.getElementById("cambiar").style.backgroundColor= "rgba("+rojo+","+verde+","+azul+","+opacidad+")";
			
	
			console.log("dentro funcion cambiar color");
			}
			//Funcion Cambiar Img
			function cambiarImg1(){
					var img1=document.getElementById("img1").src;
					document.getElementById("cambiar").style.backgroundImage= "url(\""+img1+"\")";
			}
			function cambiarImg2(){
					var img2=document.getElementById("img2").src;
					document.getElementById("cambiar").style.backgroundImage= "url(\""+img2+"\")";
			}
			function cambiarImg3(){
					var img3=document.getElementById("img3").src;
					document.getElementById("cambiar").style.backgroundImage= "url(\""+img3+"\")";
			}
			function cambiarImg4(){
					var img4=document.getElementById("img4").src;
					document.getElementById("cambiar").style.backgroundImage= "url(\""+img4+"\")";
			}
			//Funcion cambiar tamaño
			function cambiarTamano(){
					var principal=document.getElementById("fuente");
					var a=document.getElementById('cambiartamano');
					principal.style.fontSize=a.value;
			}
			//Cambiar Alineacion
			function cambiarAlineacion(){
					var principal=document.getElementById("fuente");
					var a=document.getElementById('cambiaralineacion');
					principal.style.textAlign=a.value;
			}
			function Estilo1() {
			var x = document.getElementsByTagName("H1");
			for (var i=0;i<x.length;i++){
				x[i].style.backgroundColor = "black";
				x[i].style.color = "yellow";
				x[i].style.fontSize = "30px";
			}
			var x = document.getElementsByTagName("p");
			for (var i=0;i<x.length;i++){
				x[i].style.backgroundColor = "black";
				x[i].style.color = "yellow";
				x[i].style.fontSize = "30px";
			}
		}
		
		function Estilo2() {
			var x = document.getElementsByTagName("H1");
			for (var i=0;i<x.length;i++){
				x[i].style.backgroundColor = "white";
				x[i].style.color = "black";
				x[i].style.fontSize = "8px";
			}
			var x = document.getElementsByTagName("p");
			for (var i=0;i<x.length;i++){
				x[i].style.backgroundColor = "white";
				x[i].style.color = "black";
				x[i].style.fontSize = "8px";
			}
		}
		function Estilo3() {
			var x = document.getElementsByTagName("article");
			for (var i=0;i<x.length;i++){
				x[i].style.backgroundColor = "rgb(174,255,251)";
				x[i].style.textAlign="center";
			}
		}
		function reload(){
			location.reload();
		}
		function Estilo4(){
			document.getElementById("cambio").className = "estilo4";
		}

		