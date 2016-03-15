<?PHP
session_start();
include_once("funciones.php");
include_once("datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);

$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$DNI=$_POST["DNI"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$userio=$_SESSION["logintmp"];
unset($_SESSION["logintmp"]);

runQuery($_SESSION["query_user"],$enlace);

unset($_SESSION["query_user"]);

runQuery($_SESSION["query_empresa"],$enlace);
unset($_SESSION["query_empresa"]);
$queryContacto="insert into contacto (login_usuario, dni_contacto, telefono, email, nombre, apellidos) values ('$userio', '$DNI', '$telefono', '$correo', '$nombre', '$apellidos')";
runQuery($queryContacto,$enlace);
header("location:../index.php");
?>