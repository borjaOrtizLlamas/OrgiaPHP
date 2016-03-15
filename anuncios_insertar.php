<?php
session_start();
include_once("funciones/datos.php");
include_once("funciones/funciones.php");
include_once("libs/Smarty.class.php");
$smarty = new Smarty();

if(!isset($_SESSION["login"])){ 
$smarty->assign("logeado",0);
	$smarty -> display("cabecera_paralax.tpl");
	$smarty -> display("404.tpl");
	$smarty -> display("flooter.tpl");

	
}
else{
	$smarty->assign("logeado",1);
	
	$enlace = connect($server,$user,$password);
	selectBBDD($basededatos,$enlace);
	$query = "Select * from categoria";
	$registros = runQuery($query,$enlace);
	$login_usuario = $_SESSION["login"];
	while($fila = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
		$arrayCategorias[ ] = $fila;
	}
		
	$smarty -> assign("categorias",$arrayCategorias);

	$smarty -> display("cabecera.tpl");
	$smarty -> display("anuncios_categoria.tpl");
	$smarty -> display("flooter.tpl");

}
	//CODIGO CORRECTO, COMENTADO POR JOSE PORQUE FALTA COMPLETARLO	
	/*$queryComprobacionPago = "SELECT estado FROM `pagos` WHERE id_anuncio = (select max(id_anuncio) from anuncios where login_usuario = '$login_usuario')";
	$registroComprobacionPago = runQuery($queryComprobacionPago,$enlace);	
	$filaComprobacionPago = mysqli_fetch_array($registroComprobacionPago,MYSQLI_BOTH);
	
	if ($filaComprobacionPago["estado"] == 0) echo ("No puedes insertar nuevos anuncios mientras tengas pagos pendientes"); //FALTA HACER TPL QUE TE DEJE PAGAR FACTURA
	else{*/
	//} 
?>