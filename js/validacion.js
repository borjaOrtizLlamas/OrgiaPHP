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
    xmlhttp.open("GET","validacion.php?texto=" + texto ,true);
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
    xmlhttp.open("GET","validacionNumero.php?numero=" + numero ,true);
    xmlhttp.send();
	
}
