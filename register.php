<?php
session_start(); 
include_once("libs/Smarty.class.php");
$smarty = new Smarty;
$smarty->assign("pw","");

if(isset($_GET["contrasena"])){
$smarty->assign("pw","<p>correo o contraseña incorrectos o falta de aceptación oficial</p><br />");

}

if(!isset($_SESSION["login"])){
	$smarty->assign("logeado",0);
}else{ 
	header("location:index.php");
}

$smarty -> display("cabecera.tpl");
$smarty -> display("login.tpl");
$smarty -> display("flooter.tpl");


?>