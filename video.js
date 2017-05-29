var video, reproducir, barra, progreso, maximo;

maximo = 400;

function comenzar(){
	
	video = document.getElementById("video");
	reproducir = document.getElementById("reproducir");
	barra = document.getElementById("barra");
	progreso = document.getElementById("progreso");
	
	reproducir.addEventListener("click",play,false);
	barra.addEventListener("click",adelantar,false);
	
	
	}
	
function adelantar(posicion){
	
	if ((video.paused==false) && (video.ended==false)){ /*Si el video esta en reproduccion*/
		
		/*En ratonX capturo la posicion x del raton y se la resto a los pixeles de la barra*/
		var ratonX = posicion.pageX-barra.offsetLeft;
		
		/*En nuevoTiempo guardo el tiempo actual de la barra*/
		var nuevoTiempo = ratonX*video.duration/maximo;
		
		video.currentTime = nuevoTiempo;
		
		progreso.style.width = ratonX+"px";
		
		}
	
	}
	
function play(){
	
	if((video.paused==false) && (video.ended==false)){
		
		video.pause();
		reproducir.innerHTML="Play"; /*Le cambio el nombre al boton*/
		
		bucle = setInterval(estado,25);/* El segundo parametro se mide en milisegundos (1000 = 1 segundo)*/
		
		}else{
			video.play();
			reproducir.innerHTML="Pause";
			
			bucle = setInterval(estado,25)
			}
	
	}
	
function estado(){
	
	if(video.ended==false){
		/*Tiempo es una regla de 3 simple, el tiempo actual por el maximo en pixeles de la barra divido la duracion total*/
		var tiempo = parseInt(video.currentTime*maximo/video.duration)
		/*A la barra de progreso voy midiendo el tiempo en pixeles*/
		progreso.style.width=tiempo+"px"
		
		}
	
	}
	
	
window.addEventListener("load",comenzar,false);