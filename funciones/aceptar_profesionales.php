<?php
session_start();
include_once("funciones.php");
include_once("datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$pro = $_GET["login_usuario"];
$query = "UPDATE `profesional` SET `activo` = '1' WHERE `profesional`.`login_usuario` = '$pro';"; 
$todosRegistros = runQuery($query, $enlace);
header("location:../aceptar_profesionales.php");


?>