<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$string=$_GET["val"];
$string=trim($string);
if(empty($string)){
	echo("No dejes este campo vac&iacute;o");
}
?>