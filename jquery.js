function iniciar(){
				//Toggle de colores
			$(document).ready(function(){
				$("#colores2").hide();
			});
			$(document).ready(function(){
				$("#colores").on("click", function(){
					$("#colores2").slideToggle(1000);	
				});
			});
			//Toggle de fondos
			$(document).ready(function(){
				$("#fondoImg2").hide();
			});
			$(document).ready(function(){
				$("#fondoImg").on("click", function(){
					$("#fondoImg2").slideToggle(1000);	
				});
			});
			//Toggle del editor de tamaños de la letra
			$(document).ready(function(){
				$("#cambiarTamaño2").hide();
			});
			$(document).ready(function(){
				$("#cambiarTamaño").on("click", function(){
					$("#cambiarTamaño2").slideToggle(1000);	
				});
			});
			//Toggle del editor de tamaños de la alineacion del texto
			$(document).ready(function(){
				$("#cambiarAlineacion2").hide();
			});
			$(document).ready(function(){
				$("#cambiarAlineacion").on("click", function(){
					$("#cambiarAlineacion2").slideToggle(1000);	
				});
			});
			//Toggle del editor de estilos de la pagina
			$(document).ready(function(){
				$("#cambiarEstilo2").hide();
			});
			$(document).ready(function(){
				$("#cambiarEstilo").on("click", function(){
					$("#cambiarEstilo2").slideToggle(1000);	
				});
			});
			//Toggle del editor del idioma de la pagina
			$(document).ready(function(){
				$("#cambiarIdioma2").hide();
			});
			$(document).ready(function(){
				$("#cambiarIdioma").on("click", function(){
					$("#cambiarIdioma2").slideToggle(1000);	
				});
			});
}
window.addEventListener('load', iniciar, false);
