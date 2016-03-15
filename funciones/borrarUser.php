<?php
session_start();
include_once("funciones.php");
include_once("datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);

$usuario=$_SESSION["login"];
$query="delete from usuarios where '$usuario'=login_usuario";
runQuery($query,$enlace);

unset($_SESSION["login"]);
header("location:../index.php");
?>