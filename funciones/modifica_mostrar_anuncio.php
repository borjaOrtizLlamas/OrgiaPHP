<?php
	session_start();
	include_once("datos.php");
	include_once("funciones.php");
	require '../libs/Smarty.class.php';
	$smarty = new Smarty();
	$enlace = connect($server,$user,$password);
	selectBBDD($basededatos,$enlace);
if(!isset($_SESSION["login"])){ 
			header("Location:../404.php");
}
else{
		$id_anuncio = $_SESSION["id_anuncio"];
	$id_categoria = $_SESSION["id_categoria"];
	
	$nombreCat = $_SESSION["categoria"];
	$queryAnuncio = "select * from anuncios where id_anuncio = '$id_anuncio'";
	$registros = runQuery($queryAnuncio,$enlace);
	
	while($fila = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$arrayAnuncio[ ] = $fila;
		}
	
	
	switch($nombreCat){
		case "inmobiliaria":
		$query = "select * from inmobiliaria where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "libros":
		$query = "select * from libros where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "motor":
		$query = "select * from motor where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "moviles":
		$query = "select * from moviles where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "ordenadores":
		$query = "select * from ordenadores where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "peliculas":
		$query = "select * from peliculas where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);                                                                                                                                          
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "ropa":
		$query = "select * from ropa where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "videojuegos":
		$query = "select * from videojuegos where id_anuncio = \"$id_anuncio\"";
		$registros = runQuery($query,$enlace);
		while($fila2 = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
			$array[ ] = $fila2;
			}
		break;
		case "servicios":
		$array[ ] = ""; 
		break;
		}
	$smarty -> assign("anuncio", $arrayAnuncio);
	$smarty -> assign("nombreCategoria", $nombreCat);
	$smarty -> assign("categoria",$array);
	
	$smarty->assign("logeado",1);
	
	$smarty -> display("cabecera.tpl");
	$smarty -> display("anunciosModificar.tpl");
	$smarty -> display("flooter.tpl");
}
?>