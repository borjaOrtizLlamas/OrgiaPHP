<?php
session_start();
include_once("funciones/funciones.php");
include_once("funciones/datos.php");
include_once("libs/Smarty.class.php");
$smarty = new Smarty;
$smarty->debugging = false;
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
if(!isset($_SESSION["login"])){ 
	$smarty->assign("logeado",0);
$smarty -> display("cabecera_paralax.tpl");
$smarty -> display("404.tpl");
$smarty -> display("flooter.tpl");

}else{
$query = "SELECT u.login_usuario log, p.cif, p.nombre_empresa FROM `usuarios` u,profesional  p WHERE u.login_usuario=p.login_usuario and p.activo=0;"; 
$todosRegistros = runQuery($query, $enlace);
while ($fila = mysqli_fetch_array($todosRegistros, MYSQLI_BOTH)) {
$datos[ ] = $fila; 
}
$datos[ ] ="";
	
	$smarty->assign("logeado",1);

$smarty->assign("profesionales",$datos);
$smarty -> display("cabecera.tpl");
$smarty -> display("aceptar_profesionales.tpl");
$smarty -> display("flooter.tpl");
}

?>