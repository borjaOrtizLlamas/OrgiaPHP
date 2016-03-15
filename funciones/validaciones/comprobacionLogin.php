<?PHP
include_once("../datos.php");
include_once("../funciones.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$Login = $_GET["val"];
if(preg_match("/(\d|[A-z]){8,20}/",$Login)){
	$query="select login_usuario from usuarios where login_usuario='$Login'";
	$reg=runQuery($query,$enlace);
	if(MYSQLI_num_rows($reg)>0){
		echo("Nombre de usuario no disponible");
	}
}else if(preg_match("/(\d|[A-z]){1,8}/",$Login)){
	echo("Nombre de usuario muy corto");
}else if(preg_match("/(\d|[A-z]){0}/",$Login)){
	echo("Introduce un nombre de usuario");
}else if(preg_match("/(\d|[A-z]){21,}/",$Login)){
	echo("Nombre de usuario muy corto");
}else{
	echo("Nombre de usuario no v&aacute;lido: solo n&uacute;meros y letras");
}
?>