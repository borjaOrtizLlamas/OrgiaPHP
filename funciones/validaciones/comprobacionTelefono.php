<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$val = $_GET["val"];
if(!preg_match("/\d{9}/",$val)){
	echo("Introduce un tel&eacute;fono v&aacute;lido");
}
?>