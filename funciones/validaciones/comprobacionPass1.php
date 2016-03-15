<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$pass = $_GET["val"];


if(strlen($pass)<1){
	echo("Introduce una contraseña");
}elseif(strlen($pass)<6){
	echo("Contraseña muy corta");
}else if(strlen($pass)<10){
	echo("Seguridad baja");
}else if(strlen($pass)<14){
	echo("Seguridad media");
}else{
	echo("Seguridad alta");
}
?>