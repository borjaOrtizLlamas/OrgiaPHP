<?php

	session_start();
if(!isset($_SESSION["login"])){ 
			header("Location:404.php");

}
else{
		//$id_anuncio = $_SESSION["id_anuncio"]; La pongo mas abajo
	$id_tipo = $_SESSION["id_tipo"];
	$login_usuario = $_SESSION["login"];
	//$numero_imagenes = $_SESSION["numero_imagenes"];
	//$premium = $_SESSION["premium"];	Puesta abajo
	$estado = 0;

	include_once("funciones/datos.php");
	include_once("funciones/funciones.php");
	
	include_once("libs/Smarty.class.php");
	$smarty = new Smarty();
	
	$enlaceServidor = connect($server,$user,$password);
	selectbbdd($basededatos, $enlaceServidor);	
	
	//CONSULTAS REFERENTES AL ANUNCIANTE
	if ($id_tipo == 1){		
		$query = "SELECT nombre, apellidos FROM `particular` WHERE login_usuario = '$login_usuario'";
		$registro = runQuery($query,$enlaceServidor);	
		$fila = mysqli_fetch_array($registro,MYSQLI_BOTH);
		$smarty->assign("id_tipo","1");
		$smarty->assign("nombre",$fila[0]);
		$smarty->assign("apellidos",$fila[1]);
	}else if($id_tipo == 2){		
		$query = "SELECT nombre, apellidos FROM `contacto` WHERE login_usuario = '$login_usuario'";
		$query2 = "SELECT nombre_empresa FROM `profesional` WHERE login_usuario = '$login_usuario'";
		$registro = runQuery($query,$enlaceServidor);	
		$fila = mysqli_fetch_array($registro,MYSQLI_BOTH);
		$registro2 = runQuery($query2,$enlaceServidor);	
		$fila2 = mysqli_fetch_array($registro2,MYSQLI_BOTH);
		$smarty->assign("id_tipo",$id_tipo);
		$smarty->assign("nombre",$fila[0]);
		$smarty->assign("apellidos",$fila[1]);
		$smarty->assign("empresa",$fila2[0]);
	}else{
		echo('Admin');
	}
	
	//Seleccion de anuncio Impagado
		if(isset($_SESSION["estado"])){
			if($_SESSION["estado"]==0){
				$query6 = "SELECT COUNT(*) FROM `anuncios`"; //OBTENGO CANTIDAD TOTAL DE Anuncios
				$registro6 = runQuery($query6,$enlaceServidor);   
				$fila6 = mysqli_fetch_array($registro6,MYSQLI_BOTH);
				
				$query00 = "SELECT id_anuncio  FROM anuncios a WHERE login_usuario = '$login_usuario' AND estado =0 ";
				$reg00 = runQuery($query00, $enlaceServidor);
				$id00 = mysqli_fetch_array($reg00,MYSQLI_BOTH);
				
				$query7 = "select a.id_anuncio, a.premium, c.nombre nom from anuncios a, categoria c where `id_anuncio` = $id00[0]  and a.id_categoria = c.id_categoria ";
				$registro7 = runQuery($query7,$enlaceServidor);
				while($fila7 = mysqli_fetch_array($registro7,MYSQLI_BOTH)){
				
					$id_anuncio = $fila7["id_anuncio"];	
					$premium = $fila7["premium"];
					$numero_imagenes=$_SESSION["numero_imagenes"];
					$_SESSION["id_categoria"] = $fila7["nom"] ;
				
				}
			}else{
				
				
				$id_anuncio = $_SESSION["id_anuncio"];
				$premium = $_SESSION["premium"] ;
				$numero_imagenes =$_SESSION["numero_imagenes"];
			}
		}else{
				$id_anuncio = $_SESSION["id_anuncio"];
				$premium = $_SESSION["premium"] ;
				$numero_imagenes =$_SESSION["numero_imagenes"];
			}
		
		 
		

	//CONSULTAS REFERENTES AL ANUNCIO
	$smarty->assign("id_anuncio",$id_anuncio);
	$query = "SELECT titulo FROM `anuncios` WHERE id_anuncio = $id_anuncio";
	$registro = runQuery($query,$enlaceServidor);	
	$fila = mysqli_fetch_array($registro,MYSQLI_BOTH);
	$smarty->assign("anuncio",$fila[0]);
	
	//IMPORTE
	$total = 0;
	
	for($i=1;$i<$numero_imagenes+1;$i++){
		if($i>2&&$i<6) $total += 0.50;
		else if($i>5&&$i < 10) $total += 0.40;
		
		if($i < 3) $desglose[] = $i . ' - Gratuita';	
		else if($i < 6) $desglose[] = $i . ' - 0.50' . '&#8364';
		else if($i < 10) $desglose[] = $i . ' - 0.40' . '&#8364';
	}
	
	$query = "SELECT premium FROM `anuncios` WHERE id_anuncio = $id_anuncio";
	$registro = runQuery($query,$enlaceServidor);	
	$fila = mysqli_fetch_array($registro,MYSQLI_BOTH);
	
	if($fila[0]==1) $total += 1.50;	
	
	$query2 = "SELECT count(*) FROM `pagos` WHERE id_anuncio = $id_anuncio";
	$registro2 = runQuery($query2,$enlaceServidor);
	$fila2 = mysqli_fetch_array($registro2,MYSQLI_BOTH);
	
	//MOD
	if($fila2[0] == 1){
		$query4 = "UPDATE `pagos` SET `n_imagenes` = '$numero_imagenes', `premium` = $fila[0], `precio` = '$total', `estado` = '$estado' WHERE `id_anuncio` = $id_anuncio";
		runQuery($query4,$enlaceServidor);
	}else{
		$query5 = "INSERT INTO `pagos` (`id_anuncio`, `n_imagenes`, `premium`, `precio`, `estado`) VALUES ($id_anuncio, $numero_imagenes, $premium, $total, $estado)";
		runQuery($query5,$enlaceServidor);	
	}
	//MOD	
	$smarty->assign("logeado",1);
	if(isset($desglose)){
		$smarty->assign("desglose",$desglose);
	}
	
	//correctoPago.php
	$ruta=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$arr=preg_split("/getDatosFactura.php/",$ruta);
	
	$smarty->assign("ruta","http://".$arr[0]."funciones/correctoPago.php");
	$smarty->assign("premium",$fila[0]);
	$smarty->assign("total",$total);
	$smarty->display("cabecera.tpl");
	$smarty->display("factura.tpl");
	$smarty->display("flooter.tpl");
}
?>