"use strict";
	function registrarse(bool){
		var capa;
		if (bool){
			capa = document.getElementById("botoneslogin");
			capa.style.display="none";
			capa = document.getElementById("crearcuenta");
			capa.style.display="inline";
		}else{
			capa = document.getElementById("crearcuenta");
			capa.style.display="none";
			capa = document.getElementById("botoneslogin");
			capa.style.display="inline";
			document.getElementById("registro").reset();
		}
		comprobarUsuario("login");
		comprobarPass1("pass1");
	}
	
	function userTipo(){
		var capaParticular = document.getElementById("particular");
		var proname = document.getElementById("proname");
		var capaProfesiona = document.getElementById("profesional");
		if(document.getElementById("rParticular").checked){
			capaParticular.style.display="inline";
			capaProfesiona.style.display="none";
			proname.style.display="none";
		}else{
			capaParticular.style.display="none";
			capaProfesiona.style.display="inline";
			proname.style.display="inline";
		}
	}

	function getMessage(id1, comprobacion, asinc){
		var capa="span_"+id1;
		var text="";
		var xmlhttp;
    	if (window.XMLHttpRequest){
      		xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
		}else{
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
		}
		if (asinc){
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState===4 && xmlhttp.status===200){
					var text = xmlhttp.responseText;
					document.getElementById(capa).innerHTML=text;
					if (id1==="pass1"){
						var zona = document.getElementById(capa);
						switch (text){
							case "Seguridad alta":
							zona.style.color="green";
							break;
							case "Seguridad media":
							zona.style.color="orange";
							break;
							default:
							zona.style.color="red";
						}
					}
					
				}
			};
		}
    	xmlhttp.open("GET","validaciones/"+comprobacion+".php?val=" + document.getElementById(id1).value ,asinc);
    	xmlhttp.send();
		if (!asinc){
			document.getElementById(capa).innerHTML=xmlhttp.responseText;
		}
	}
	
	function getMessage2(id1, id2, comprobacion, asinc){
		var capa="span_"+id2;
		var xmlhttp;
    	if (window.XMLHttpRequest){
      		xmlhttp=new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
		}else{
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
		}
    	if (asinc){
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState===4 && xmlhttp.status===200){
					document.getElementById(capa).innerHTML=xmlhttp.responseText;
				}
			};
		}
    	if(id1==="pass1"){
    		xmlhttp.open("GET","validaciones/" + comprobacion + ".php?val=" + document.getElementById(id1).value + "&val2=" + document.getElementById(id2).value ,asinc);
		}else{
			xmlhttp.open("GET","validaciones/" + comprobacion + ".php?val=" + id1 + "&val2=" + id2 ,asinc);
		}
    	xmlhttp.send();
		if (!asinc){
			document.getElementById(capa).innerHTML=xmlhttp.responseText;
		}
	}
	
	function comprobarUsuario(id0, asinc){
		if(document.getElementById("botoneslogin").style.display==="none"){
			getMessage(id0, "comprobacionLogin", asinc);
		} else{
			document.getElementById("span_"+id0).innerHTML="";
		}
	}
	function comprobarPass1(id0, asinc){
		if(document.getElementById("botoneslogin").style.display==="none"){
			getMessage(id0, "comprobacionPass1", asinc);
		} else{
			document.getElementById("span_"+id0).innerHTML="";
		}
	}
	function comprobarPass11(id0, asinc){
		if(document.getElementById("pass1").value!==""){
			getMessage(id0, "comprobacionPass1", asinc);
		} else{
			document.getElementById("span_"+id0).innerHTML="";
		}
	}
	function comprobarPass2(id0, id00, asinc){
		getMessage2(id0, id00, "comprobacionPass2", asinc);
	}
	function comprobarCorreo(id0, asinc){
		getMessage(id0, "comprobacionCorreo", asinc);
	}
	function comprobarTelefono(id0, asinc){
		getMessage(id0, "comprobacionTelefono", asinc);
	}
	function comprobarVacio(id0, asinc){
		getMessage(id0, "comprobacionVacio", asinc);
	}
	function comprobarDNICIF(value,id0, asinc){
		getMessage2(value, id0, "comprobacionDNICIF", asinc);
	}
	function comprobarCodPostal(id0, asinc){
		getMessage(id0, "comprobacionCodPostal", asinc);
	}
	function comprobarNumCuenta(id0, asinc){
		getMessage(id0, "comprobacionNumCuenta", asinc);
	}
	
	
	
	
	function comprobarTodo(){
		if(document.getElementById("botoneslogin").style.display==="none"){
			comprobarUsuario("login", false);
			comprobarPass2("pass1", "pass2", false);
			comprobarCorreo("correo", false);
			comprobarTelefono("telefono", false);
			comprobarVacio("nombre", false);
			if(document.getElementById("rParticular").checked){
				comprobarVacio("apellidos", false);
				comprobarDNICIF(document.getElementById("DNI").value,"DNI", false);
			}else{
				comprobarDNICIF(document.getElementById("CIF").value,"CIF", false);
			}
			comprobarCodPostal("cod_postal");
			comprobarVacio("direccion", false);
			comprobarVacio("provincia", false);
			comprobarVacio("ciudad", false);
			comprobarNumCuenta("num_cuenta", false);
			
			var para = true;
			if(document.getElementById("span_login").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_pass2").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_correo").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_telefono").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_nombre").textContent!==""){
				para = false;
			}
			if(document.getElementById("rParticular").checked){
				if(document.getElementById("span_apellidos").textContent!==""){
					para = false;
				}
				if(document.getElementById("span_DNI").textContent!==""){
					para = false;
				}
			}else{
				if(document.getElementById("span_CIF").textContent!==""){
					para = false;
				}
			}
			if(document.getElementById("span_cod_postal").textContent!==""){
				para = false;
				
			}
			if(document.getElementById("span_direccion").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_provincia").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_ciudad").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_num_cuenta").textContent!==""){
				para = false;
			}
			return para;
		} else{
			return true;
		}
	}
	
	function comprobarTodoContacto(){
		comprobarVacio("nombre", false);
		comprobarVacio("apellidos", false);
		comprobarDNICIF(document.getElementById("DNI").value,"DNI", false);
		comprobarCorreo("correo", false);
		comprobarTelefono("telefono", false);
		
		var para = true;
		if(document.getElementById("span_nombre").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_apellidos").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_DNI").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_correo").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_telefono").textContent!==""){
			para = false;
		}
		return para;
	}
	
	function borrarUser(){
		document.getElementById("form").action = "borrarUser.php";
		document.getElementById("form").submit();
	}
	
	function comprobarUpdateUser(){
		if(document.getElementById("pass1").value===""&&document.getElementById("pass2").value===""){
			document.getElementById("span_pass2").innerHTML="";
		}else{
			comprobarPass2("pass1", "pass2", false);
		}
		comprobarCorreo("correo", false);
		comprobarTelefono("telefono", false);
		comprobarVacio("nombre", false);
		if(document.getElementById("tipo")===1){
			comprobarVacio("apellidos", false);
			comprobarDNICIF(document.getElementById("DNI").value,"DNI", false);
		}else if(document.getElementById("tipo")===2){
			comprobarDNICIF(document.getElementById("CIF").value,"CIF", false);
		}
		comprobarCodPostal("cod_postal");
		comprobarVacio("direccion", false);
		comprobarVacio("provincia", false);
		comprobarVacio("ciudad", false);
		comprobarNumCuenta("num_cuenta", false);
		
		var para = true;
		if(document.getElementById("span_pass2").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_correo").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_telefono").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_nombre").textContent!==""){
			para = false;
		}
		if(document.getElementById("tipo")===1){
			if(document.getElementById("span_apellidos").textContent!==""){
				para = false;
			}
			if(document.getElementById("span_DNI").textContent!==""){
				para = false;
			}
		}else if(document.getElementById("tipo")===2){
			if(document.getElementById("span_CIF").textContent!==""){
				para = false;
			}
		}
		if(document.getElementById("span_cod_postal").textContent!==""){
			para = false;
			
		}
		if(document.getElementById("span_direccion").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_provincia").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_ciudad").textContent!==""){
			para = false;
		}
		if(document.getElementById("span_num_cuenta").textContent!==""){
			para = false;
		}
		if (para){
			document.getElementById("form").action="updateUser.php";
			document.getElementById("form").submit();
		}
	}