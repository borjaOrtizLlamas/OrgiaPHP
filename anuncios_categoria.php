<?php
session_start();
include_once("funciones/datos.php");
include_once("funciones/funciones.php");
require 'libs/Smarty.class.php';
$smarty = new Smarty();
if(!isset($_SESSION["login"])){ 
			header("Location:404.php");

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
	
	$queryPrimerAnunc = "SELECT count(*) FROM anuncios WHERE login_usuario = '$login_usuario'";
	$registroPrimerAnunc = runQuery($queryPrimerAnunc,$enlace);
	$filaPrimerAnunc = mysqli_fetch_array($registroPrimerAnunc,MYSQLI_BOTH);
	
	if($filaPrimerAnunc[0] == 0){
		$smarty -> assign("categorias",$arrayCategorias);
			$smarty -> display("cabecera.tpl");
			$smarty -> display("anuncios_categoria.tpl");
			$smarty -> display("flooter.tpl");
	}else{
		$queryComprobacionPago = "SELECT estado, id_anuncio, premium FROM `pagos` WHERE id_anuncio = (select max(id_anuncio) from anuncios where login_usuario = '$login_usuario')";
		$registroComprobacionPago = runQuery($queryComprobacionPago,$enlace);	
		$filaComprobacionPago = mysqli_fetch_array($registroComprobacionPago,MYSQLI_BOTH);
		
		if ($filaComprobacionPago["estado"] == 0) {
			$_SESSION["estado"]=$filaComprobacionPago["estado"];
			$_SESSION["id_anuncio"]=$filaComprobacionPago["id_anuncio"];
			$_SESSION["premium"]=$filaComprobacionPago["premium"];
			
			$queryFotos = "select n_imagenes from pagos where \"". $_SESSION["id_anuncio"] ."\"= id_anuncio";
			$regFotos=runQuery($queryFotos,$enlace);
			$img=mysqli_fetch_array($regFotos,MYSQLI_BOTH);
			$_SESSION["numero_imagenes"]= $img[0];
			header("Location:seleccionarAnuncio.php");
		}else{
			$smarty -> assign("categorias",$arrayCategorias);
			$smarty -> display("cabecera.tpl");
			$smarty -> display("anuncios_categoria.tpl");
			$smarty -> display("flooter.tpl");
		} 
	}
	
	}
?>