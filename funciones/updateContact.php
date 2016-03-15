<?PHP
session_start();
include_once("funciones.php");
include_once("datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$usuario=$_SESSION["login"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$dni_contacto=$_POST["DNI"];
$telefono=$_POST["telefono"];
$email=$_POST["correo"];

$query="UPDATE contacto SET nombre='$nombre', apellidos='$apellidos', dni_contacto='$dni_contacto', telefono='$telefono', email='$email' WHERE login_usuario='$usuario'";

runQuery($query,$enlace);

header("location:../verUser.php");

?>