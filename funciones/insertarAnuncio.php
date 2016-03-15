<?php
	session_start();
	include_once("datos.php");
	include_once("funciones.php");
	require '../libs/Smarty.class.php';
	$smarty = new Smarty();
if(!isset($_SESSION["login"])){ 
$smarty->assign("logeado",0);
			$smarty -> display("cabecera.tpl");
			$smarty -> display("404.tpl");
			$smarty -> display("flooter.tpl");
}
else{$smarty->assign("logeado",1);

		$enlace = connect($server,$user,$password);
	selectBBDD($basededatos,$enlace);
	
	switch ($_POST["categoria"]){
		case "inmobiliaria": 
			$id_categoria = 1;
			$camposCategoria = $_POST["camposCategoria"];
			break;
		case "libros":
			$id_categoria = 2;
			$camposCategoria = $_POST["camposCategoria"];
			break;
		case "motor": 
			$id_categoria = 3;
			$camposCategoria = $_POST["camposCategoria"];
			break;	
		case "moviles": 
			$id_categoria = 4;
			$camposCategoria = $_POST["camposCategoria"];
			break;	
		case "ordenadores": 
			$id_categoria = 5;
			$camposCategoria = $_POST["camposCategoria"];
			break;
		case "peliculas": 
			$id_categoria = 6;
			$camposCategoria = $_POST["camposCategoria"];
			break;
		case "ropa": 
			$id_categoria = 7;
			$camposCategoria = $_POST["camposCategoria"];
			break;
		case "videojuegos": 
			$id_categoria = 8;
			$camposCategoria = $_POST["camposCategoria"];
			break;
		//MODIFICADO POR JOSE
		case "servicios": 
			$id_categoria = 9;
			break;
		//FIN MODIFICACION
		}
	$titulo = $_POST["titulo"];
	$descripcion = $_POST["descripcion"];
	//$camposCategoria = $_POST["camposCategoria"];
	$precio = $_POST["precio"];
	$login_usuario = $_SESSION["login"];
	$id_tipo = $_SESSION["id_tipo"];
	
	//M-------------------------
	if(preg_match("/\d+,\d+/",$precio)){
		$num=preg_split("/,/",$precio);
		$precio=$num[0] . "." . $num[1];
	}
	//M-------------------------
	
	//SELECT estado FROM `pagos` WHERE id_anuncio = (select max(id_anuncio) from anuncios where login_usuario = "josejose")
	
	
		
		if(!isset($_POST["premium"])){
		$premium = 0;
		$query = "INSERT INTO `anuncios`(`login_usuario`, `titulo`, `descripcion`, `tipo_anuncio`, `ruta_imagen`, `id_categoria`, `estado`, `premium`, `fecha_anuncio`,`precio_anuncio`) VALUES ('$login_usuario', '$titulo', '$descripcion', $id_tipo , null , $id_categoria , 0 , 0 , DATE_FORMAT(NOW(),'%Y-%m-%d'),$precio)";
		}else{
			$premium = 1;
			$query = "INSERT INTO `anuncios`(`login_usuario`, `titulo`, `descripcion`, `tipo_anuncio`, `ruta_imagen`, `id_categoria`, `estado`, `premium`, `fecha_anuncio`,`precio_anuncio`) VALUES ('$login_usuario', '$titulo', '$descripcion', $id_tipo , null , $id_categoria , 0 , 1 , DATE_FORMAT(NOW(),'%Y-%m-%d'),$precio)";
			}
	//insertar el id de la sesion del usuario que ha creado, tipo de usuario, estado si esta pagado es 1 si es gratis es 0;  
	
	runQuery($query,$enlace);
	
	$id =  mysqli_insert_id($enlace);
	$ruta = "../images/$login_usuario/$id/";
	
	$query = "UPDATE `anuncios` SET `ruta_imagen`='$ruta' where id_anuncio=$id";
	runQuery($query,$enlace);	
	
	switch ($_POST["categoria"]){
		
			case "libros":
				$autor = $camposCategoria[0];
				$genero = $camposCategoria[1];
				$editorial =  $camposCategoria[2];
				$query2 = "INSERT INTO libros (id_anuncio, autor, genero, editorial) VALUES ($id,\"$autor\", \"$genero\", \"$editorial\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
				
			case "moviles":
				$pulgadas = $camposCategoria[0];
				$marca = $camposCategoria[1];
				$modelo =  $camposCategoria[2];
				$cpu =  $camposCategoria[3];
				$memoriaInterna =  $camposCategoria[4];
			  	$query2 = "INSERT INTO moviles (id_anuncio, pulgadas, marca, modelo,cpu,memoria_interna) VALUES (\"$id\" ,\"$pulgadas\",\"$marca\", \"$modelo\", \"$cpu\",\"$memoriaInterna\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
				
			case "inmobiliaria":
				$ciudad = $camposCategoria[0];
				$metros_cuadrados = $camposCategoria[1];
				$calle =  $camposCategoria[2];
				$codigo_postal =  $camposCategoria[3];
				$baños =  $camposCategoria[4];
				$dormitorios =  $camposCategoria[5];
				//El campo dormitorios esta cambiado a dormitoriso en mi version de sql,cambiar postiormente a 'dormitorios'
			  	$query2 = "INSERT INTO inmobiliaria (id_anuncio, ciudad, metros_cuadrados, calle,codigo_postal,banos,dormitorios) VALUES (\"$id\" ,\"$ciudad\",\"$metros_cuadrados\", \"$calle\", \"$codigo_postal\",\"$baños\",\"$dormitorios\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
				
			case "motor":
				$marca = $camposCategoria[0];
				$modelo = $camposCategoria[1];
				$cv =  $camposCategoria[2];
				$color =  $camposCategoria[3];
				$kilometraje =  $camposCategoria[4];
			  	$query2 = "INSERT INTO motor (id_anuncio, marca, modelo, cv,color,kilometraje) VALUES (\"$id\" ,\"$marca\",\"$modelo\", \"$cv\", \"$color\",\"$kilometraje\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
				
				
			case "ordenadores":
				$tipo = $camposCategoria[0];
				$cpu = $camposCategoria[1];
				$ram =  $camposCategoria[2];
				$hdd =  $camposCategoria[3];
				$grafica =  $camposCategoria[4];
				$pulgadas =  $camposCategoria[5];
			  	$query2 = "INSERT INTO ordenadores (id_anuncio, tipo, cpu, ram,hdd,grafica,pulgadas) VALUES (\"$id\" ,\"$tipo\",\"$cpu\", \"$ram\", \"$hdd\",\"$grafica\",\"$pulgadas\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
				
	
			case "peliculas":
				$genero = $camposCategoria[0];
				$formato = $camposCategoria[1];
				$director =  $camposCategoria[2];
			  	$query2 = "INSERT INTO peliculas (id_anuncio, genero, formato, director) VALUES (\"$id\" ,\"$genero\",\"$formato\", \"$director\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
				
			case "ropa":
				$talla = $camposCategoria[0];
				$color = $camposCategoria[1];
				$tipo_tela =  $camposCategoria[2];
				$tipo_prenda =  $camposCategoria[3];
			  	$query2 = "INSERT INTO ropa (id_anuncio, talla, color, tipo_tela,tipo_prenda) VALUES (\"$id\" ,\"$talla\",\"$color\", \"$tipo_tela\", \"$tipo_prenda\")";
			  	$exitoInsercion = runQuery($query2,$enlace);
				break;
				
				
			case "videojuegos":
				$genero = $camposCategoria[0];
				$plataforma = $camposCategoria[1];
				$desarrollador =  $camposCategoria[2];
				$query2 = "INSERT INTO videojuegos (id_anuncio, genero, plataforma, desarrollador) VALUES (\"$id\" ,\"$genero\",\"$plataforma\", \"$desarrollador\")";
				$exitoInsercion = runQuery($query2,$enlace);
				break;
	
			case "servicios":
				break;
				
			default:
				echo("No se encuentra la categoria");
				break;
	}
	
	//$exitoInsercion = runQuery($query2,$enlace);
	
	$_SESSION["id_anuncio"] = $id;
	$_SESSION["id_categoria"] = $id_categoria;
	$_SESSION["categoria"] = $_POST["categoria"];
	$_SESSION["ruta"] = $ruta;
	$_SESSION["premium"] = $premium;
	
	//M-------------------------------
	if (!file_exists($ruta)) {
		mkdir($ruta, 0777, true);
	}
	$files=$_FILES["files"];
	$count=count($files["name"]);
	if(trim($files["name"][0])==""){
		$count = 0;
	}
	for ($i=0; $i<$count; $i++) {
		if(preg_match("/image/", $_FILES["files"]["type"][$i])){
			$b=$i+1;
			$extensionf=preg_split("/\//",$_FILES["files"]["type"][$i]);
			
			move_uploaded_file($_FILES["files"]["tmp_name"][$i], "$ruta$b.$extensionf[1]");
			
		}
	}
	$_SESSION["numero_imagenes"] = $count;
	header("Location:../getDatosFactura.php");  
	//M-----------------------------------------  
	//BORRAR SUBIRIMAGEN.PHP
	
	
	//$smarty -> display("cabecera.tpl");
	//$smarty -> display("subirImagen.tpl");
	//$smarty -> display("flooter.tpl");

}
?>