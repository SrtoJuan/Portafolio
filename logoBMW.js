function iniciar(){
	var elemento=document.getElementById('lienzoBMW');
	lienzoBMW=elemento.getContext('2d');
	var x1 = 100;
	var x2 = 172;
	var x3 = 173;
	var movimientox = 4;
	
	lienzoBMW.clearRect(0,0,400,400);
	lienzoBMW.beginPath();
	lienzoBMW.fillStyle="#d1dfe6";
	lienzoBMW.strokeStyle="black";
	lienzoBMW.strokeRect(x1,100,70,70); 	
	lienzoBMW.fillRect(x1,100,70,70); 
	lienzoBMW.closePath();
	x1 = x1 + movimientox;
	
	lienzoBMW.beginPath();
	lienzoBMW.fillStyle="white";
	lienzoBMW.strokeStyle="black";
	lienzoBMW.strokeRect(x2,100,70,70); 	
	lienzoBMW.fillRect(x2,100,70,70); 
	lienzoBMW.closePath();
	
	lienzoBMW.beginPath();
	lienzoBMW.fillStyle="white";
	lienzoBMW.strokeStyle="black";
	lienzoBMW.strokeRect(x1,172,70,70); 	
	lienzoBMW.fillRect(x1,172,70,70); 
	lienzoBMW.closePath();
	
	lienzoBMW.beginPath();
	lienzoBMW.fillStyle="#d1dfe6";
	lienzoBMW.strokeStyle="black";
	lienzoBMW.strokeRect(x2,172,70,70); 	
	lienzoBMW.fillRect(x2,172,70,70); 
	lienzoBMW.closePath();
	
	
	lienzoBMW.beginPath();
	//x,y, radio, angulo, inicio, angulo
	lienzoBMW.arc(x3,170,90,0,Math.PI*2, false);
	lienzoBMW.lineWidth=40;
	lienzoBMW.stroke();
	lienzoBMW.closePath();
	
	lienzoBMW.beginPath();
	lienzoBMW.font="italic bold 28px arial,serif";  //Fuente de la letra: cursiva, negrita.
	lienzoBMW.fillText("BMW", 139,90); 	//Poner texto en la coordenada x y
	lienzoBMW.closePath();
	
	lienzoBMW.beginPath();
	lienzoBMW.arc(x3,170,110,0,Math.PI*2, false);
	lienzoBMW.strokeStyle="grey";
	lienzoBMW.lineWidth=5;
	lienzoBMW.closePath();
	lienzoBMW.stroke();
	
	lienzoBMW.beginPath();
	lienzoBMW.arc(x3,170,70,0,Math.PI*2, false);
	lienzoBMW.strokeStyle="grey";
	lienzoBMW.lineWidth=5;
	lienzoBMW.closePath();
	lienzoBMW.stroke();
}
window.addEventListener("load", iniciar, false);