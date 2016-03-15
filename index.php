<?php
session_start(); 
include_once("libs/Smarty.class.php");
$smarty = new Smarty;

include_once("funciones/datos.php");
include_once("funciones/funciones.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos, $enlace);


$query = "select a.id_anuncio id,a.fecha_anuncio,a.`login_usuario` log_u,a.`titulo`,a.descripcion des, a.precio_anuncio , a.`tipo_anuncio`,ut.tipo tip,a.ruta_imagen ,a.`estado`,a.`premium`,c.nombre nombre_c from anuncios a,categoria c, usuarios u,usuario_tipo ut where premium = 1 and a.id_categoria=c.id_categoria and u.id_tipo=ut.id_tipo and u.login_usuario=a.login_usuario and a.estado = 1 ORDER BY a.fecha_anuncio DESC"; 
$datos[ ] = ""; 

$todosRegistros = runQuery($query, $enlace);
	$todosRegistros = runQuery($query, $enlace);

$i = 0; 
while ($fila = mysqli_fetch_array($todosRegistros, MYSQLI_BOTH)) {
		$ruta ="images/".$fila["log_u"]."/".$fila["id"]."/";
		$total_imagenes = count(glob($ruta."/{*.jp*,*.png}",GLOB_BRACE));
		if($total_imagenes > 0){
			$datos[$i]["titulo"] = $fila["titulo"]; 		
			$datos[$i]["nombre_c"] = $fila["nombre_c"]; 		
			$datos[$i]["precio_anuncio"] = $fila["precio_anuncio"]; 		
			$datos[$i]["des"] = substr($fila["des"],0,50)."..."; 
			$filehandle = opendir($ruta); // Abrir archivos
			while ($file = readdir($filehandle)) {
				if ($file != "." && $file != "..") {
					$datos[$i]["ruta_imagen"] = "images/".$fila["log_u"]."/".$fila["id"]."/".$file;  
				break;
				} 
			} 
				closedir($filehandle);
		}
		
$i++; 
if($i == 10) break; 
}
$smarty->assign("datos",$datos);


if(!isset($_SESSION["login"])){ 
	$smarty->assign("logeado",0);
}else{
	$smarty->assign("logeado",1);
}

$smarty -> display("cabecera_index.tpl");
$smarty -> display("index.tpl");
$smarty -> display("flooter.tpl");
?>