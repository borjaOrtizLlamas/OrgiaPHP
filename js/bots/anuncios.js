$(document).ready(function() { 
addEventListener('load',todos,false);
});

function busqueda(){
	var xmlhttp;
	if (window.XMLHttpRequest){
	xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
	}
	xmlhttp.onreadystatechange=function()  {
		if (xmlhttp.readyState===4 && xmlhttp.status===200){
			document.getElementById("anuncioss").innerHTML=xmlhttp.responseText;
		}
	};

	x  = document.getElementById("categoria_nombre").value; 
	recorer();
switch (x){
		case "1":
	// beusqueda segun la categoria inmobiliaria
			document.getElementById("inmobiliaria").style.display="block"; 
			ciudad = document.getElementById("ciudada_inmobiliaria").value;
			metros = document.getElementById("metros_cuadrados_inmobiliaria").value; 
			banos = document.getElementById("banos_inmobiliaria").value; 
			dormitorios = document.getElementById("dormitorios").value; 
	
			xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&ciudada_inmobiliaria=" + document.getElementById("ciudada_inmobiliaria").value +"&descripcion="+document.getElementById("descripcion").value +"&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&precio="+ document.getElementById("precio").value+"&ciudada_inmobiliaria=" +  ciudad + "&metros_cuadrados_inmobiliaria=" + metros + "&banos_inmobiliaria=" + banos + "&dormitorios=" + dormitorios+"&fecha=" +document.getElementById("fecha").value,true);
		
		break;
		case "2":
		//libros
			document.getElementById("libros").style.display="block";
			xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value +
"&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value + "&editorial_libros=" +document.getElementById("editorial_libros").value +"&autor_libros="+document.getElementById("autor_libros").value +"&genero_libros=" +document.getElementById("genero_libros").value+"&fecha=" +document.getElementById("fecha").value,true);
		break;
		case "3":
		//motor
			document.getElementById("motor").style.display="block";
			xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&precio="+ document.getElementById("precio").value +"&marca_motor=" + document.getElementById("marca_motor").value +"&modelo_motor=" +document.getElementById("modelo_motor").value + "&cv_motor=" +document.getElementById("cv_motor").value +"&color_motor=" + document.getElementById("color_motor").value + "&kilometraje_motor=" +document.getElementById("kilometraje_motor").value +"&descripcion="+document.getElementById("descripcion").value+"&fecha=" +document.getElementById("fecha").value ,true);
		break;   
		case "4":
		//moviles
			document.getElementById("moviles").style.display="block";
			xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value + "&pulgadas_movil="+document.getElementById("pulgadas_movil").value+"&marca_moviles=" + document.getElementById("marca_moviles").value + "&modelo_moviles="+document.getElementById("modelo_moviles").value +"&cpu_moviles="+document.getElementById("cpu_moviles").value + "&memoria_interna_moviles=" +document.getElementById("memoria_interna_moviles").value+"&fecha=" +document.getElementById("fecha").value,true);

			break;
		case "5":
		//ordenadores
		document.getElementById("ordenadores").style.display="block";
		xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value+"&tipo_ordenadores=" + 	document.getElementById("tipo_ordenadores").value	+ "&cpu_ordenadores=" + document.getElementById("cpu_ordenadores").value + "&ram_ordenadores="+document.getElementById("ram_ordenadores").value + "&hdd_ordenadores="+ document.getElementById("hdd_ordenadores").value + "&grafica_ordenadores= "+document.getElementById("grafica_ordenadores").value+"&pulgadas_ordenador="+document.getElementById("pulgadas_ordenador").value+"&fecha=" +document.getElementById("fecha").value,true);
		break;
		case "6":
		//peliculas
		document.getElementById("peliculas").style.display="block";
		xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value+"&fecha=" +document.getElementById("fecha").value+
		"&genero="+ document.getElementById("genero").value+
		"&formato="+ document.getElementById("formato").value+
		"&director="+document.getElementById("director").value,true);
		break;
		case "7":
		//ropa
		document.getElementById("ropa").style.display="block";
		xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value+"&fecha=" +document.getElementById("fecha").value+"&tipo_prenda=" +document.getElementById("tipo_prenda_ropa").value+"&tipo_tela=" +document.getElementById("tipo_tela_ropa").value+"&color=" +document.getElementById("color_ropa").value + "&talla=" +document.getElementById("talla_ropa").value,true);

		break;
		case "8":
		//videojuegos
		document.getElementById("videojuegos").style.display="block";
		xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value+"&fecha=" +document.getElementById("fecha").value
	 + "&desarrollador_videojuego=" +document.getElementById("desarrollador_videojuego").value +"&plataforma_videojuego=" +document.getElementById("plataforma_videojuego").value + "&genero_videojuego" + document.getElementById("genero_videojuego").value,true);
		break;
		case "9":
		//servicios
		xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value+"&fecha=" +document.getElementById("fecha").value,true);
			
		break;
		case "null":
		xmlhttp.open("GET","funciones/anuncio_smarty.php?categoria_nombre=" + x + "&tipo=" +document.getElementById("tipo").value  +"&titulo=" + document.getElementById("titulo").value + "&descripcion="+document.getElementById("descripcion").value + "&precio="+ document.getElementById("precio").value+"&fecha=" +document.getElementById("fecha").value,true);
		break; 
		
	}
	xmlhttp.send();
}


function todos(){
	var xmlhttp;
	if (window.XMLHttpRequest){
	xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
	}
	xmlhttp.onreadystatechange=function()  {
		if (xmlhttp.readyState===4 && xmlhttp.status===200){
			document.getElementById("anuncioss").innerHTML=xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET","funciones/anuncio_smarty.php?",true);
	xmlhttp.send();
}


function recorer(){//tapar las busquedas de todas las categorias
	a = document.getElementsByClassName("categ");
	for (var i=0; i<a.length; i++) a[i].style.display="none"; 

}