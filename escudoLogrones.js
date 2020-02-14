function iniciar(){
   var elemento=document.getElementById('lienzo');
  lienzo=elemento.getContext('2d');
 
  lienzo.beginPath();
  //x,y, radio, angulo, inicio, angulo
  lienzo.arc(150,150,100,0,Math.PI*2, false);
  lienzo.fillStyle='black';
  lienzo.fill();
  
  lienzo.beginPath();
  lienzo.moveTo(78,78);
  lienzo.lineTo(220,77);
  lienzo.lineTo(150,250);
  lienzo.closePath();
  lienzo.fillStyle='red';
  lienzo.strokeStyle='yellow';
  lienzo.fill();
  lienzo.stroke();
  
   lienzo.beginPath();
  lienzo.moveTo(150,52);
  lienzo.lineTo(220,220);
  lienzo.lineTo(76,220);
  lienzo.closePath();
  lienzo.fillStyle='white';
  lienzo.strokeStyle='yellow';
  lienzo.fill();
   lienzo.stroke();
}
window.addEventListener("load", iniciar, false);