<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$val = $_GET["val"];
if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
	echo("Introduce un correo v&aacute;lido");
}
?>