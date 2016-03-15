<?PHP
session_start();
include_once("funciones/funciones.php");
include_once("funciones/datos.php");
include_once("libs/Smarty.class.php");
$smarty = new Smarty;
$smarty->debugging = false;
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);



if(isset($_SESSION["login"])) {
	$smarty->assign("logeado",1);
$smarty -> display("cabecera.tpl");


$usuario=$_SESSION["login"];
$query="select * from usuarios where '$usuario'=login_usuario";
$reg=runQuery($query,$enlace);
$arrdatos=mysqli_fetch_array($reg, MYSQLI_BOTH);

$smarty->assign("login",$usuario);
$smarty->assign("codpostal",$arrdatos["codigo_postal"]);
$smarty->assign("telefono",$arrdatos["telefono"]);
$smarty->assign("fax",$arrdatos["fax"]);
$smarty->assign("fecha",$arrdatos["fecha_registro"]);
$smarty->assign("numero_cuenta",$arrdatos["numero_cuenta"]);
$smarty->assign("email",$arrdatos["email"]);
$smarty->assign("direccion",$arrdatos["direccion"]);
$smarty->assign("ciudad",$arrdatos["ciudad"]);
$smarty->assign("provincia",$arrdatos["provincia"]);

$tipo=$arrdatos["id_tipo"];
$smarty->assign("tipo", $tipo);

switch ($tipo){
	case '1':
		$query="select * from particular where login_usuario='$usuario'";
		$reg=runQuery($query,$enlace);
		$arrdatos=mysqli_fetch_array($reg, MYSQLI_BOTH);	
		$smarty->assign("nombre",$arrdatos["nombre"]);
		$smarty->assign("apellidos",$arrdatos["apellidos"]);
		$smarty->assign("dnicif",$arrdatos["dni"]);
		break;
	case '2':
		$query="select * from profesional where login_usuario='$usuario'";
		$reg=runQuery($query,$enlace);
		$arrdatos=mysqli_fetch_array($reg, MYSQLI_BOTH);
		$smarty->assign("nombre",$arrdatos["nombre_empresa"]);
		$smarty->assign("dnicif",$arrdatos["cif"]);
		$query="select * from contacto where login_usuario=\"$usuario\"";
		$reg=runQuery($query,$enlace);
		$arrdatos=mysqli_fetch_array($reg, MYSQLI_BOTH);
		$smarty->assign("cont_nom",$arrdatos["nombre"]);
		$smarty->assign("cont_ape",$arrdatos["apellidos"]);
		$smarty->assign("cont_ema",$arrdatos["email"]);
		$smarty->assign("cont_dni",$arrdatos["dni_contacto"]);
		$smarty->assign("cont_tel",$arrdatos["telefono"]);
		break;
}

if(isset($_POST['edit_user'])){
	if($_POST['edit_user']==="EDITAR"){
		$smarty->display("modUser.tpl");
	}else{
		$smarty->display("modContact.tpl");
	}
}else{
	$smarty->display("verUser.tpl");
}
$smarty -> display("flooter.tpl");
} else {
$smarty->assign("logeado",0);

$smarty -> display("cabecera_paralax.tpl");
$smarty -> display("404.tpl");
	$smarty -> display("flooter.tpl");
	}

?>