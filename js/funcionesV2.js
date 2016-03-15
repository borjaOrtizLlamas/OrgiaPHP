// JavaScript Document

var contador = 0;
var limite = 1;

window.onload=function(){
	agregarCampos('divFormulario');
}

//addEventListener("load",agregarCampos(),false);
function comprobarTexto(texto){
    var xmlhttp;
	
    if (window.XMLHttpRequest){        
      	xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari	  
	}else{        
    	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
	}
	
    xmlhttp.onreadystatechange=function()  {		
      if (xmlhttp.readyState==4 && xmlhttp.status==200){		  
      	document.getElementById("divError").innerHTML=xmlhttp.responseText;		
      }
    }	
    xmlhttp.open("GET","funciones/validacionTexto.php?texto=" + texto ,true);
    xmlhttp.send();
}

function comprobarNumero(numero){
    var xmlhttp;
	
    if (window.XMLHttpRequest){        
      	xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari	  
	}else{        
    	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
	}
	
    xmlhttp.onreadystatechange=function()  {		
      if (xmlhttp.readyState==4 && xmlhttp.status==200){		  
      	document.getElementById("divError").innerHTML=xmlhttp.responseText;		
      }
    }	
    xmlhttp.open("GET","funciones/validacionNumero.php?numero=" + numero ,true);
    xmlhttp.send();
	
}

function agregarCampos(divFormulario){
	document.getElementById(divFormulario).innerHTML="";

	var categoria = document.getElementById("categoria").value;
	
	if (categoria === "libros"){
		var atributos = new Array();
			atributos[0] = "Autor";
			atributos[1] = "Genero";
			atributos[2] = "Editorial";				
	}else if(categoria === "moviles"){
			var atributos = new Array();
			atributos[0] = "Pulgadas";
			atributos[1] = "Marca";
			atributos[2] = "Modelo";
			atributos[3] = "CPU";
			atributos[4] = "Memoria Interna";
	}else if(categoria === "motor"){
			var atributos = new Array();
			atributos[0] = "Marca";
			atributos[1] = "Modelo";
			atributos[2] = "CV";
			atributos[3] = "Color";
			atributos[4] = "Kilometraje";
	}else if(categoria === "inmobiliaria"){
			var atributos = new Array();
			atributos[0] = "Ciudad";
			atributos[1] = "Metros Cuadrados";
			atributos[2] = "Calle";
			atributos[3] = "Codigo Postal";
			atributos[4] = "Baños";
			atributos[5] = "Dormitorios";
	}else if(categoria === "ordenadores"){
			var atributos = new Array();
			atributos[0] = "Tipo";
			atributos[1] = "Cpu";
			atributos[2] = "Ram";
			atributos[3] = "HDD";
			atributos[4] = "Grafica";
			atributos[5] = "Pulgadas";
	}else if(categoria === "peliculas"){
			var atributos = new Array();
			atributos[0] = "Genero";
			atributos[1] = "Formato";
			atributos[2] = "Director";
	}else if(categoria === "ropa"){
			var atributos = new Array();
			atributos[0] = "Talla";
			atributos[1] = "Color";
			atributos[2] = "Tipo tela";
			atributos[3] = "Tipo prenda";
	}else if(categoria === "videojuegos"){
			var atributos = new Array();
			atributos[0] = "Genero";
			atributos[1] = "Plataforma";
			atributos[2] = "Desarrollador";
		}
		
		
	//if (contador < limite){	
	
		for(i=0;i<atributos.length;i++){	
			var nuevoDiv = document.createElement('div');
			if (atributos[i] === "Pulgadas" || atributos[i] === "CPU" || atributos[i] === "Memoria Interna"){
				nuevoDiv.innerHTML ="<div class=\"col-lg-12 col-md-12 col-sm-12\"><label for=\"camposCategoria[]\">" + atributos[i] + ':' + " <input class=\"form-control\" type='text' name='camposCategoria[]' onblur='comprobarNumero(this.value)'> </div>";
			}
			else{
				nuevoDiv.innerHTML = "<div class=\"col-lg-12 col-md-12 col-sm-12\"><label for=\"camposCategoria[]\">" + atributos[i] + ':' + "</label> <input class=\"form-control\" type='text' id='camposCategoria[]' name='camposCategoria[]' onblur='comprobarTexto(this.value)'></div>";	
			}
			document.getElementById(divFormulario).appendChild(nuevoDiv);
		}		
		//contador++;		
	//}
	
}


function pruebasdeMierda(divFormulario){
	nuevoDiv.innerHTML = '<p>Hola</p>';
	document.getElementById(divFormulario).appendChild(nuevoDiv);
	}