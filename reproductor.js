function iniciar() {
	console.log("iniciar");
  //enganchamos todos los elementos mediante getElementById
  //maximo lo declaramos para saber el maximo ancho de nuestra barra de progreso
  
  maximo=600;
  medio=document.getElementById('medio');
  reproducir=document.getElementById('reproducir');
  barra=document.getElementById('barra');
  progreso=document.getElementById('progreso');
  mute = document.getElementById('mute');
  volumen = document.getElementById('volumen');
  pantalla = document.getElementById('pantalla');
 //agrego dos listener uno para presionar y otro para mover la barra que equivalen a las funciones mover y prsionar
  reproducir.addEventListener('click', presionar, false);
  barra.addEventListener('click', mover, false);
  mute.addEventListener('click', mutear, false);
  volumen.addEventListener('change', cambiarVolumen, false);
  pantalla.addEventListener('click', openFullscreen, false);
}
//funcion para play pause
function presionar(){
  if(!medio.paused && !medio.ended) {
    //pause apra parar el video
	medio.pause();
    reproducir.innerHTML='Reproducir';
	
    window.clearInterval(bucle);
  }else{
  //play para poner en funcionamiento el video
    medio.play();
    reproducir.innerHTML='Pausa';
	//set interval hace que se lance la funcion una vez por segundo, ya que 1000 son 1000 milisegundos
    bucle=setInterval(estado, 1000);
  }
}

function estado(){
//ended nos indica si el video ha finalizado ponemos barra de progrso a 0 si es false y no ha finalizado, ponemos la barra de prograeso donde corresoponde
  if(!medio.ended){
    var total=parseInt(medio.currentTime*maximo/medio.duration);
    progreso.style.width=total+'px';
  }else{
    progreso.style.width='0px';
    reproducir.innerHTML='Reproducir';
    window.clearInterval(bucle);
  }
}
//funcion para mover la barra de progreso
function mover(e){
  if(!medio.paused && !medio.ended){// indica que el video esta siendo reproducido
    var ratonX=e.pageX-barra.offsetLeft;//aqui determino donde se pincho con el raton en la coordenada x
	
    var nuevoTiempo=ratonX*medio.duration/maximo; // calculamos donde esta siendo reproducido el video
    medio.currentTime=nuevoTiempo;// con currente time le decimos donde debe empezar de nuevo
    progreso.style.width=ratonX+'px'; // aqui cambiamos el ancho de la barra accediendo a sus propiedades css y cuadrandolo con la pos actual
  }
}
/*a partir de aqui lo tuyo*/
function mutear(){
	if(!medio.muted && !medio.ended) {
		medio.muted = true;
		mute.innerHTML='No Mute';
	}else{
		medio.muted = false;
		mute.innerHTML='Mute';
	}
}
function cambiarVolumen(){
	medio.volume=volumen.value;
}
function openFullscreen() {
  if (medio.requestFullscreen) {
    medio.requestFullscreen();
  } else if (medio.mozRequestFullScreen) { /* Firefox */
    medio.mozRequestFullScreen();
  } else if (medio.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    medio.webkitRequestFullscreen();
  } else if (medio.msRequestFullscreen) { /* IE/Edge */
    medio.msRequestFullscreen();
  }
}

window.addEventListener('load', iniciar, false);
