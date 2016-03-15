<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$val = $_GET["val"];
if(!preg_match("/\d{5}/",$val)){
	echo("Introduce el c&oacute;digo postal");
}
?>