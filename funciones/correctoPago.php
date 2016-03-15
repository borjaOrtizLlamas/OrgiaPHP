<?php
	session_start();
	include_once("datos.php");
	include_once("funciones.php");
	$id_anuncio = $_SESSION["id_anuncio"];
	$enlaceServidor = connect($server,$user,$password);
	selectbbdd($basededatos, $enlaceServidor);
	$query4 = "UPDATE `pagos` SET `estado` = 1 WHERE `id_anuncio` = $id_anuncio";
	$query5 = "UPDATE `anuncios` SET `estado` = 1 WHERE `id_anuncio` = $id_anuncio";
	runQuery($query4,$enlaceServidor);
	runQuery($query5,$enlaceServidor);
	header("Location:../index.php");
?>