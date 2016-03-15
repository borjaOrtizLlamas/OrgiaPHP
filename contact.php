<?php
session_start(); 
include_once("libs/Smarty.class.php");
$smarty = new Smarty;

if(!isset($_SESSION["login"])) {
$smarty->assign("logeado",0);
}else{
	 $smarty->assign("logeado",1);

}



$smarty -> display("cabecera_paralax.tpl");
$smarty -> display("contact.tpl");
$smarty -> display("flooter.tpl");
?>