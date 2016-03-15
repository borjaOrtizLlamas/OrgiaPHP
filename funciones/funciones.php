<?php
function connect($server,$user,$password){
$enlace = mysqli_connect($server,$user,$password);
	//comprobamos si se estableció correctamente el enlace o no:
	if (!$enlace) {
	    die('No pudo conectarse: '.MYSQLI_error());
	}
	return $enlace;
}

function  selectbbdd($baseDatos,$enlace){
	$bd_seleccionada = mysqli_select_db($enlace,$baseDatos);
	if (!$bd_seleccionada) {
	    die ('No se puede usar la base de datos : ' . MYSQLI_error());
	}
}


function runQuery($query,$enlace){
	$registros = mysqli_query($enlace,$query);
	if (!$registros) {
	    die('Consulta no válida: ' .mysqli_error());
	}
	return $registros;
}

function closeBBDD($enlace){
	mysqli_close($enlace);
}
?>