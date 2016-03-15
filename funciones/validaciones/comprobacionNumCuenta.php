<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$val = $_GET["val"];
if(!preg_match("/\d{20}/",$val)){
	echo("Introduce un n&uacute;mero de cuenta v&aacute;lido");
}
?>