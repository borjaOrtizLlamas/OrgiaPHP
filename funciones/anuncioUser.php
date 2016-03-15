<?php
	session_start();
	include_once("funciones.php");
	include_once("datos.php");
	include_once("../libs/Smarty.class.php");
	$smarty = new Smarty;
	$smarty->debugging = false;
	$enlace = connect($server, $user, $password);
	selectbbdd($basededatos,$enlace);

	$_SESSION["ver_anuncios"]="algo que nos da igual";
	$_SESSION["verUltimo"]=true;
	header("location:../busqueda_anuncio.php");
	
?>