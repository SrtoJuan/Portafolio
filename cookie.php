<?php
	//Cambiar color con cookie
	//Si pasa por el boton grabar la cookie
	if (isset($_POST['boton'])){
		$color = $_POST["combo"];
		setcookie("css", $color, time() + (86400 * 30), "/");
	//Si no pasa por el boton, buscar la cookie y grabarla
	}else{
		if (isset($_COOKIE["css"])){
			$color = $_COOKIE["css"];
			setcookie("css", $color, time() + (86400 * 30), "/"); //No es necesario, es para alargar el tiempo de la cookie
		}else{
			$color = "white";
		}
	}
	if (isset($_POST['boton'])){
		//include ('español.php');
		$idioma = $_POST['idioma'];
		setcookie("idioma", $idioma, time() + (86400 * 30), "/");
	}else{
		if (isset($_COOKIE['idioma'])){
			$idioma = $_COOKIE['idioma'];
			setcookie("idioma", $idioma, time() + (86400 * 30), "/"); //No es necesario, es para alargar el tiempo de la cookie
		}else{
			$idioma = "espanol.php";
		}
	} 
	include($idioma);
?>
