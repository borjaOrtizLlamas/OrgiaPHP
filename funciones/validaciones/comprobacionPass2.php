<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$pass = $_GET["val"];
$pass2 = $_GET["val2"];
if(strcmp($pass, $pass2)<>0){
	echo("Las contrase&ntilde;as no coinciden");
}
?>