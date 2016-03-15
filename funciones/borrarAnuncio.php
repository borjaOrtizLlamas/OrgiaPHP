<?php
	session_start();
	include_once("funciones.php");
	include_once("datos.php");
	$enlace = connect($server, $user, $password);
	selectbbdd($basededatos,$enlace);
	$query="DELETE FROM anuncios WHERE id_anuncio='".$_POST["id_anuncio"]."'";
	runQuery($query,$enlace);
	header("location:../busqueda_anuncio.php")
?>