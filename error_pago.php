<?php
session_start();
include_once("libs/Smarty.class.php");
include_once("funciones/datos.php");
include_once("funciones/funciones.php");
$enlace = connect($server,$user,$password);
selectbbdd($basededatos,$enlace);

$smarty = new Smarty;

if(isset($_SESSION["login"])){
	$smarty->assign("logeado",0);
} else {	
$smarty->assign("logeado",1);
}

$smarty -> display("cabecera.tpl");
$smarty -> display("error_pago.tpl");
$smarty -> display("flooter.tpl");

?>