<?php
	session_start();
	include_once("datos.php");
	include_once("funciones.php");
	require '../libs/Smarty.class.php';
	$smarty = new Smarty();
	$enlace = connect($server,$user,$password);
	selectbbdd($basededatos,$enlace);
	
	$id_anuncio = $_SESSION["id_anuncio"];
	$id_categoria = $_SESSION["id_categoria"];
	$login_usuario = $_SESSION["login"];
	$id_tipo = $_SESSION["id_tipo"];
	
	$nombreCat = $_SESSION["categoria"];
	$titulo = $_POST["titulo"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	
	//M-------------------------
	if(preg_match("/\d+,\d+/",$precio)){
		$num=preg_split("/,/",$precio);
		$precio=$num[0] . "." . $num[1];
	}
	//M-------------------------
	
	if(!isset($_POST["premium"])){
		$query = "UPDATE `anuncios` SET 
		`titulo`='$titulo',
		`descripcion`='$descripcion', 
		`premium` = 0, 
		`precio_anuncio` = $precio 
		where `id_anuncio` = $id_anuncio";
	}else{
		$query = "UPDATE `anuncios` SET 
		`titulo`='$titulo',
		`descripcion`='$descripcion', 
		`premium` = 1, 
		`precio_anuncio` = $precio
		 where `id_anuncio` = $id_anuncio";
		}
	runQuery($query,$enlace);
	switch($nombreCat){
		case "inmobiliaria":
		$ciudad = $_POST["ciudad"];
		$metros = $_POST["metros_cuadrados"];
		$calle = $_POST["calle"];
		$codigo = $_POST["codigo_postal"];
		$banos = $_POST["banos"];
		$dormitorios = $_POST["dormitorios"];
		
		$query = "UPDATE  `inmobiliaria` SET  `ciudad`='$ciudad',
		`metros_cuadrados` ='$metros',
		`calle` = '$calle',
		`codigo_postal` =  '$codigo',
		`banos` = $banos,
		`dormitorios` = $dormitorios 
		WHERE `id_anuncio` = $id_anuncio ";
		runQuery($query,$enlace);
		break;
		
		case "libros":
		$autor = $_POST["autor"];
		$genero = $_POST["genero"];
		$editorial = $_POST["editorial"];
		$query = "UPDATE `libros` SET 
		`autor`='$autor',`genero`='$genero',
		`editorial`='$editorial' WHERE `id_anuncio`= $id_anuncio";
		runQuery($query,$enlace);
		break;
				
		case "motor":
		$marca = $_POST["marca"];
		$modelo = $_POST["modelo"];
		$cv = $_POST["cv"];
		$color = $_POST["color"];
		$kilometraje = $_POST["kilometraje"];
		$query = "UPDATE  `motor` SET
		`marca` = '$marca',
		`modelo` = '$modelo',
		`cv` = '$cv' ,
		`color` = '$color',
		`kilometraje` = $kilometraje
		WHERE  `id_anuncio` = $id_anuncio";
		runQuery($query,$enlace);
		break;
		
		case "moviles":
		$pulgadas = $_POST["pulgadas"];
		$marca = $_POST["marca"];
		$modelo = $_POST["modelo"];
		$cpu = $_POST["cpu"];
		$memoria = $_POST["memoria_interna"];
		$query = "UPDATE  `moviles` SET
		`pulgadas` = '$pulgadas',
		`marca` = '$marca',
		`modelo` = '$modelo',
		`cpu` = '$cpu' ,
		`memoria_interna` = '$memoria'
		WHERE  `id_anuncio` = $id_anuncio";
		runQuery($query,$enlace);
		break;
		
		case "ordenadores":
		$tipo = $_POST["tipo"];
		$cpu = $_POST["cpu"];
		$ram = $_POST["ram"];
		$hdd = $_POST["hdd"];
		$grafica = $_POST["grafica"];
		$pulgadas = $_POST["pulgadas"];
		$query = "UPDATE  `ordenadores` SET
		`tipo` = '$tipo',
		`cpu` = '$cpu',
		`ram` = '$ram',
		`hdd` = '$hdd',
		`grafica` = '$grafica',
		`pulgadas` = '$pulgadas'
		WHERE  `id_anuncio` = $id_anuncio";
		runQuery($query,$enlace);
		break;
		
		case "peliculas":
		$genero = $_POST["genero"];
		$formato = $_POST["formato"];
		$director = $_POST["director"];
				
		$query = "UPDATE  `peliculas` SET
		`genero` = '$genero',
		`formato` = '$formato',
		`director` = '$director'
		WHERE  `id_anuncio` = $id_anuncio";
		runQuery($query,$enlace);
		break;
		
		case "ropa":
			$talla = $_POST["talla"];
			$color = $_POST["color"];
			$tipo_tela = $_POST["tipo_tela"];
			$tipo_prenda = $_POST["tipo_prenda"];
			$query = "UPDATE  `ropa` SET
			`talla` = '$talla',
			`color` = '$color',
			`tipo_tela` = '$tipo_tela',
			`tipo_prenda` = '$tipo_prenda'
			WHERE  `id_anuncio` = $id_anuncio";
			runQuery($query,$enlace);
			break;
		
		case "videojuegos":
			$genero = $_POST["genero"];
			$plataforma = $_POST["plataforma"];
			$desarrollador = $_POST["desarrollador"];
			
			$query = "UPDATE  `videojuegos` SET
			`genero` = '$genero',
			`plataforma` = '$plataforma',
			`desarrollador` = '$desarrollador'
			WHERE  `id_anuncio` = $id_anuncio";
			runQuery($query,$enlace);
			break;
		default:
		break;
		
		}
		header("Location:../getDatosFactura.php");
?>