<?php
session_start();
include_once("libs/Smarty.class.php");
include_once("funciones/datos.php");
include_once("funciones/funciones.php");

$enlace = connect($server,$user,$password);
selectbbdd($basededatos,$enlace);


$smarty = new Smarty;

	
if(isset($_SESSION["login"])){
	$smarty->assign("log", 1);
	$smarty->assign("logeado",1);

} else {	
	$smarty->assign("log", 0);
$smarty->assign("logeado",0);


}

$query = "select *  from  categoria"; 
$todosRegistros= runQuery($query,$enlace); 
while ($fila = mysqli_fetch_array($todosRegistros,MYSQLI_BOTH)){
		$array1[ ] = $fila; 
}

$smarty->assign("log1", $array1);

$smarty -> display("cabecera.tpl");
$smarty -> display("busqueda_anuncio.tpl");
$smarty -> display("flooter.tpl");
?>