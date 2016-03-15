<?php
	session_start();
	include_once("funciones/datos.php");
	include_once("funciones/funciones.php");
	require 'libs/Smarty.class.php';
	
if(!isset($_SESSION["login"])){ 
			header("Location:404.php");

}
else{	$smarty = new Smarty();
	$enlace = connect($server,$user,$password);
	selectbbdd($basededatos,$enlace);
	
	$query = "select * from anuncios where estado = 0";
	$registros = runQuery($query,$enlace);
	while($fila = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
		$arrayAnuncios[ ] = $fila;
		}
	$smarty -> assign("anuncio", $arrayAnuncios);
	$smarty->assign("logeado",1);
	
	
	$smarty -> display("cabecera.tpl");
	$smarty -> display("pagar.tpl");
	$smarty -> display("flooter.tpl");
}
?>