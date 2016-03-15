<?php
session_start();
include_once("funciones.php");//-----------------------------
include_once("datos.php");//---------------------------------
include_once("../libs/Smarty.class.php");
$smarty = new Smarty;
$smarty->debugging = false;
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);

$userio=$_POST["login"];
$pass=$_POST["password"];
$pass2=$_POST["password2"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$tipo=$_POST["tipo"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$DNI=$_POST["DNI"];
$CIF=$_POST["CIF"];
$fax=$_POST["fax"];
$cod_postal=$_POST["cod_postal"];
$direccion=$_POST["direccion"];
$provincia=$_POST["provincia"];
$ciudad=$_POST["ciudad"];
$num_cuenta=$_POST["num_cuenta"];

if($pass2==""){
	
	$query="Select id_tipo from usuarios where '$userio' = login_usuario and '$pass' = password";
	$reg = runQuery($query, $enlace);
	$fila = mysqli_fetch_array($reg,MYSQLI_BOTH);//M
	if(!MYSQLI_num_rows($reg)==0){
		//inicio con exito
		if($fila[0]==2){
			$query="Select * from profesional where '$userio' = login_usuario and 1 = activo";
			$reg = runQuery($query, $enlace);
			if(!MYSQLI_num_rows($reg)==0){
				$_SESSION["id_tipo"]=$fila[0];
				$_SESSION["login"]= $userio;
				header("location:../index.php");
			}else{
				header("location:../register.php?contrasena=false");
			}
		}else {
				$_SESSION["id_tipo"]=$fila[0];
				$_SESSION["login"]= $userio;
				header("location:../index.php");
		}
/**********/
	} else{
		//inicio fracasado, el susuario no existe, sesion destruida
		header("location:../register.php?contrasena=false");
	}
}else{
	$query="insert into usuarios (login_usuario, password, email, telefono, fax, codigo_postal, direccion, provincia, ciudad, numero_cuenta, id_tipo, fecha_registro) values ('$userio', '$pass', '$correo', '$telefono', '$fax', '$cod_postal', '$direccion', '$provincia', '$ciudad', '$num_cuenta', $tipo, DATE_FORMAT(now( ),'%Y-%m-%d'))";
	
	//la subtabla correspondiente
	if($tipo=="1"){
		runQuery($query, $enlace);
		$query="insert into particular (login_usuario, nombre, apellidos, dni) values ('$userio', '$nombre', '$apellidos', '$DNI')";
		runQuery($query, $enlace);
		$_SESSION["login"]=$userio;
		$_SESSION["id_tipo"]=1;//
		header("location:../register.php");//-----------------------------------------------------------------------------------------------
	}else{
		$_SESSION["query_user"]=$query;
		$query="insert into profesional (login_usuario, nombre_empresa, cif,activo) values ('$userio', '$nombre', '$CIF',0)";
		$_SESSION["query_empresa"]=$query;
		$_SESSION["logintmp"]=$userio;
		$smarty->assign("logeado",0);
		$smarty->display("cabecera.tpl");
		$smarty->display("contacto.tpl");
		$smarty->display("flooter.tpl");		
		///-----------------------------------------------------------------------------------------------
	}
}

?>