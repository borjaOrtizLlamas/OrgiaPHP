<?PHP
session_start();
include_once("funciones.php");
include_once("datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$usuario=$_SESSION["login"];

$pass=trim($_POST["password"]);
$pass2=trim($_POST["password2"]);

if(isset($_POST['nombre'])){
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	if(isset($_POST["dni"])){
		$DNI=$_POST["dni"];
	}else{
		$CIF=$_POST["cif"];
	}
}

$telefono=$_POST["telefono"];
$fax=$_POST["fax"];
$email=$_POST["email"];

$ciudad=$_POST["ciudad"];
$provincia=$_POST["provincia"];
$codpostal=$_POST["codpostal"];
$direccion=$_POST["direccion"];

$numero_cuenta=$_POST["numero_cuenta"];

$query="select id_tipo from usuarios where login_usuario='$usuario'";
$reg=runQuery($query,$enlace);
$regnum=mysqli_fetch_array($reg, MYSQLI_BOTH);
$tipo=$regnum["id_tipo"];

if(!$pass==""&&!$pass2==""&&($pass==$pass2)){
	$password=" password='$pass',";
}else{
	$password="";
}

$query="UPDATE usuarios SET" . $password . " codigo_postal='$codpostal', telefono='$telefono', fax='$fax', email='$email', direccion='$direccion', ciudad='$ciudad', provincia='$provincia', numero_cuenta='$numero_cuenta' WHERE login_usuario='$usuario'";
runQuery($query,$enlace);

switch ($tipo){
	case '1':
	$query="UPDATE particular SET dni='$DNI', nombre='$nombre', apellidos='$apellidos' WHERE login_usuario='$usuario'";
	runQuery($query,$enlace);
	break;
	case '2':
	$query="UPDATE profesional SET cif='$CIF', nombre_empresa='$nombre' WHERE login_usuario='$usuario'";
	runQuery($query,$enlace);
	break;
}

header("location:../verUser.php");

?>