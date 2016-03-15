 <?php 	
session_start();
include_once("datos.php");
include_once("funciones.php");
if(!isset($_SESSION["login_usuario"])){
 $_SESSION["login_usuario"] = "ninguno";  
}

if(!isset($_SESSION["verUltimo"])){
	$_SESSION["verUltimo"]=false;
}


if(isset($_SESSION["id_tipo"])){
	if($_SESSION["id_tipo"] == 1){
		$tipo_usuario_res =  "corriente";
	}else if($_SESSION["id_tipo"] == 2){
		$tipo_usuario_res =  "profesional";
	}else if($_SESSION["id_tipo"] == 0){
		$tipo_usuario_res =  "admin";
	}else{
		$tipo_usuario_res = "ninguno";
	}
} else {
	$_SESSION["id_tipo"] = -1; 
	$tipo_usuario_res = "ninguno";
}

$datos[0]["tipo"]= ""; 
$imagenes[0][0] = "";


$enlace = connect($server,$user,$password);
selectbbdd($basededatos,$enlace);

require '../libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->debugging = true;

include_once("datos.php");
include_once("funciones.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos, $enlace);

$cadenaLogin="";
if(isset($_SESSION["ver_anuncios"])){
	$cadenaLogin=" and a.login_usuario='".$_SESSION["login"]."'";
	unset($_SESSION["ver_anuncios"]);
}

$query = "select a.id_anuncio id,a.fecha_anuncio,a.`login_usuario` log_u,a.`titulo`,a.descripcion des, a.precio_anuncio , a.`tipo_anuncio`, u.telefono tel,ut.tipo tip,a.ruta_imagen ,a.`estado`,a.`premium`,c.nombre nombre_c from anuncios a,categoria c, usuarios u, usuario_tipo ut where a.id_categoria=c.id_categoria and u.id_tipo=ut.id_tipo and u.login_usuario=a.login_usuario".$cadenaLogin;


if (isset($_GET["categoria_nombre"]) && $_GET["categoria_nombre"] != 0) {//comparacion categoria
    $categoria = $_GET["categoria_nombre"];
    $query = $query . " and a.id_categoria = $categoria ";
}

if (isset($_GET["tipo"]) && $_GET["tipo"] != "null") {//comparacion tipos
    $tipo = $_GET["tipo"];
    $query = $query . " and a.tipo_anuncio = \"$tipo\" ";
}
//titulo

if (isset($_GET["titulo"]) && trim($_GET["titulo"]) != "") {//busqueda de titulo
    $titulo = $_GET["titulo"];
    $query = $query . " and a.titulo like \"%" . $titulo . "%\" ";
}

if (isset($_GET["precio"]) && $_GET["precio"] != "") {//busqueda precio
    $precio = $_GET["precio"];
    $precio = explode(",", $precio);
    $query = $query . " and  a.precio_anuncio	 > $precio[0] and  a.precio_anuncio	 < $precio[1]";
}

if (isset($_GET["descripcion"]) && $_GET["descripcion"] != "") {//busqueda descripcion
    $descripcion = $_GET["descripcion"];
    $query = $query ." and a.descripcion like \"%" . $descripcion . "%\" ";
}


if (isset($_GET["fecha"])) {//busqueda descripcion
    $fecha = $_GET["fecha"];
	if($fecha == 0){ 
		$query = $query ." ORDER BY fecha_anuncio ASC";
	}else if($fecha == 1) {
		$query = $query ." ORDER BY fecha_anuncio DESC";
	}
}



$todosRegistros = runQuery($query, $enlace);
$i = 0; 
while ($fila = mysqli_fetch_array($todosRegistros, MYSQLI_BOTH)) {
    if ($fila["estado"] == 1 || $_SESSION["verUltimo"]) {
		
		
					$datos[$i]["tel"] = $fila["tel"]; 
					$datos[$i]["id"] = $fila["id"]; 
					$datos[$i]["titulo"] = $fila["titulo"]; 		
					$datos[$i]["nombre_c"] = $fila["nombre_c"]; 		
					$datos[$i]["precio_anuncio"] = $fila["precio_anuncio"]; 		
					$datos[$i]["des"] =$fila["des"] ; 						
					$datos[$i]["premium"] =$fila["premium"]; 	
					$datos[$i]["log_u"] =$fila["log_u"] ; 
					$datos[$i]["edicion"]=false;
					if($_SESSION["id_tipo"]==0 || (isset($_SESSION["login"]) && $_SESSION["login"]==$fila["log_u"])){
						$datos[$i]["edicion"]=true;
					}


            if ($fila["nombre_c"] == "libros") {//busqueda segun el tipo de libro 
                $query = "select * from libros where " . $fila["id"] . " = id_anuncio";
								
				if (isset($_GET["autor_libros"]) && trim($_GET["autor_libros"]) != "") {
					$autor = $_GET["autor_libros"]; 
					$query = $query." and autor like \"%$autor%\" ";
				}			
					
				if (isset($_GET["editorial_libros"]) && trim($_GET["editorial_libros"]) != "") {
					$autor = $_GET["editorial_libros"]; 
					$query = $query." and editorial like \"%$autor%\" ";
				}
				
				if (isset($_GET["genero_libros"]) && trim($_GET["genero_libros"]) != "") {
					$autor = $_GET["genero_libros"]; 
					$query = $query." and genero like \"%$autor%\" ";
				}
				
				
				$todos = runQuery($query, $enlace);
                $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
				
				if(0 < MYSQLI_affected_rows($enlace)){
						//libros
					$datos[$i]["tipo"] = "libro"; 	

					
					
                    $datos[$i]["autor"] =  $fila2["autor"]; 
                    $datos[$i]["genero"] = $fila2["genero"]; 
    				$datos[$i]["editorial"] = $fila2["editorial"]; 

						
				}} else if ($fila["nombre_c"] == "inmobiliaria") {
				$query = "select * from inmobiliaria where " . $fila["id"] . " = id_anuncio";

				if (isset($_GET["ciudada_inmobiliaria"]) && trim($_GET["ciudada_inmobiliaria"]) != "") {
					$ciudada_inmobiliaria = $_GET["ciudada_inmobiliaria"];
					$query = $query . " and ciudad like \"%" . $ciudada_inmobiliaria . "%\" ";
					
				}
				
				if (isset($_GET["metros_cuadrados_inmobiliaria"]) && trim($_GET["metros_cuadrados_inmobiliaria"]) != "") {
					$metros = $_GET["metros_cuadrados_inmobiliaria"];
					$query = $query . " and  $metros < metros_cuadrados";
				}
				
				if (isset($_GET["banos_inmobiliaria"]) && trim($_GET["banos_inmobiliaria"]) != "") {
					$banos = $_GET["banos_inmobiliaria"];
					$query = $query . " and  $banos < banos";
				}
				if (isset($_GET["dormitorios"]) && trim($_GET["dormitorios"]) != "") {
					$dormitorios = $_GET["dormitorios"];
					$query = $query . " and  $dormitorios < dormitorios";
				}
				
                $todos = runQuery($query, $enlace);
                $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
				if(0 < MYSQLI_affected_rows($enlace)){
				// inmobiliaria
					$datos[$i]["tipo"] = "inmobiliaria"; 	
                    $datos[$i]["ciudad"] = $fila2["ciudad"];
					$datos[$i]["calle"] = $fila2["calle"];

                    $datos[$i]["metros_cuadrados"] = $fila2["metros_cuadrados"];
                    $datos[$i]["codigo_postal"] = $fila2["codigo_postal"];
                    $datos[$i]["banos"]  = $fila2["banos"];
                    $datos[$i]["dormitorios"]  = $fila2["dormitorios"];
					
					
					
				
				}
			} else if ($fila["nombre_c"] == "motor") {
            $query = "select * from motor where " . $fila["id"] . " = id_anuncio";
			
				if (isset($_GET["marca_motor"]) && trim($_GET["marca_motor"]) != "") {
					$marca_motor = $_GET["marca_motor"];
					$query = $query . " and marca like \"%" . $marca_motor . "%\" ";
				}
				
				if (isset($_GET["modelo_motor"]) && trim($_GET["modelo_motor"]) != "") {
					$modelo_motor = $_GET["modelo_motor"];
					$query = $query . " and modelo like \"%" . $modelo_motor . "%\" ";
				}
				
				if (isset($_GET["cv_motor"]) && trim($_GET["cv_motor"]) != "") {
					$cv_motor = $_GET["cv_motor"];
					$cv_motor = explode(",", $cv_motor);
					$query = $query." and cv > $cv_motor[0] and cv < $cv_motor[1]";
				}
				
				if (isset($_GET["color_motor"]) && trim($_GET["color_motor"]) != "") {
					$color_motor = $_GET["color_motor"];
					$query = $query." and color like \"%$color_motor%\"";
				}
				
				if (isset($_GET["kilometraje_motor"]) && trim($_GET["kilometraje_motor"]) != "") {
					$kilometraje_motor = $_GET["kilometraje_motor"];
					$kilometraje_motor = explode(",", $kilometraje_motor);
					$query = $query." and kilometraje > $kilometraje_motor[0] and  kilometraje < $kilometraje_motor[1]";
				}				
				
            $todos = runQuery($query, $enlace);
            $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
			if(0 < MYSQLI_affected_rows($enlace)){
				//motor
					$datos[$i]["tipo"] = "motor"; 		

                   	$datos[$i]["marca"] = $fila2["marca"]; 
				   	$datos[$i]["modelo"] =  $fila2["modelo"];
                   	$datos[$i]["cv"] = $fila2["cv"];
                  	$datos[$i]["color"]= $fila2["color"];
                   	$datos[$i]["kilometraje"] =$fila2["kilometraje"];
					
					
					
					
								
			}
		} else if ($fila["nombre_c"] == "moviles") {
            $query = "select * from moviles where " . $fila["id"] . " = id_anuncio";
			
			
			
				if (isset($_GET["pulgadas_movil"]) && trim($_GET["pulgadas_movil"]) != "") {
					$pulgadas = $_GET["pulgadas_movil"];
					$pulgadas = explode(",", $pulgadas);

					$query = $query." and pulgadas > $pulgadas[0] and  pulgadas < $pulgadas[1]";
				}				
				
		
			
				if (isset($_GET["cpu_moviles"])){
					$cpu_moviles = $_GET["cpu_moviles"];
					$query = $query . " and cpu like \"%" . $cpu_moviles . "%\" ";
				}
				
				
				if (isset($_GET["marca_moviles"])){
					$marca_moviles = $_GET["marca_moviles"];
					$query = $query . " and marca like \"%" . $marca_moviles . "%\" ";
				}
				
				if (isset($_GET["modelo_moviles"])){
					$modelo_moviles = $_GET["modelo_moviles"];
					$query = $query . " and modelo like \"%" . $modelo_moviles . "%\" ";
				}
			
				if (isset($_GET["memoria_interna_moviles"]) && trim($_GET["memoria_interna_moviles"]) != ""){
					$memoria_interna_moviles = $_GET["memoria_interna_moviles"];
					$memoria_interna_moviles = explode(",", $memoria_interna_moviles);

					$query = $query." and memoria_interna > $memoria_interna_moviles[0] and  memoria_interna < $memoria_interna_moviles[1]";
				}

            $todos = runQuery($query, $enlace);
            $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
			if(0 < MYSQLI_affected_rows($enlace)){
				//moviles
					$datos[$i]["tipo"] = "moviles"; 		


			     	$datos[$i]["pulgadas"]= $fila2["pulgadas"];
					$datos[$i]["marca"]= $fila2["marca"];
					$datos[$i]["modelo"]= $fila2["modelo"];
                 	$datos[$i]["cpu"]=   $fila2["cpu"]; 
                   	$datos[$i]["memoria_interna"]=  $fila2["memoria_interna"];


			}
		} else if ($fila["nombre_c"] == "ordenadores") {
            $query = "select * from ordenadores where " . $fila["id"] . " = id_anuncio";
			
				if (isset($_GET["tipo_ordenadores"])){
					$tipo_ordenadores = $_GET["tipo_ordenadores"];
					$query = $query . " and tipo like \"%" . $tipo_ordenadores . "%\" ";
				}			
			
				if (isset($_GET["cpu_ordenadores"])){
					$cpu_ordenadores = $_GET["cpu_ordenadores"];
					$query = $query . " and cpu like \"%" . $cpu_ordenadores . "%\" ";
				}	
				

				if (isset($_GET["ram_ordenadores"]) && trim($_GET["ram_ordenadores"])  != ""){
					$ram_ordenadores = $_GET["ram_ordenadores"];
					$ram_ordenadores = explode(",", $ram_ordenadores);

					$query = $query." and ram > $ram_ordenadores[0] and  ram < $ram_ordenadores[1]";
				}	
				
				if (isset($_GET["hdd_ordenadores"]) && trim($_GET["hdd_ordenadores"])  != "" ){
					$hdd_ordenadores = $_GET["hdd_ordenadores"];
					$hdd_ordenadores = explode(",", $hdd_ordenadores);

					$query = $query." and hdd > $hdd_ordenadores[0] and  hdd < $hdd_ordenadores[1]";
				}	
				
				if (isset($_GET["grafica_ordenadores"])){
					$grafica_ordenadores = $_GET["grafica_ordenadores"];
					$query = $query . " and grafica like \"%" . $grafica_ordenadores . "%\" ";
				}	
								
				if (isset($_GET["pulgadas_ordenador"]) && trim($_GET["pulgadas_ordenador"]) != ""){
					$pulgadas_ordenador = $_GET["pulgadas_ordenador"];
					$pulgadas_ordenador = explode(",", $pulgadas_ordenador);
					$query = $query." and pulgadas > $pulgadas_ordenador[0] and  pulgadas < $pulgadas_ordenador[1]";
				}	

            $todos = runQuery($query, $enlace);
            $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
			
			
			if(0 < MYSQLI_affected_rows($enlace)){
				//ordenadores
				   	$datos[$i]["tipo"] = "ordenador"; 		
						
					$datos[$i]["tipo_ordenadores"] =$fila2["tipo"]; 
                   	$datos[$i]["cpu"] = $fila2["cpu"]; 
                  	$datos[$i]["ram"] =	$fila2["ram"];
                  	$datos[$i]["hdd"] =  $fila2["hdd"];
                  	$datos[$i]["grafica"] =  $fila2["grafica"];
                   	$datos[$i]["pulgadas"] = $fila2["pulgadas"]; 
					
				
			}
		}else if ($fila["nombre_c"] == "peliculas") {
            $query = "select * from peliculas where " . $fila["id"] . " = id_anuncio";
			
			
				if (isset($_GET["genero"])){
					$genero = $_GET["genero"];
					$query = $query . " and genero like \"%" . $genero . "%\" ";
				}	
		
				if (isset($_GET["formato"])){
					$formato = $_GET["formato"];
					$query = $query . " and formato like \"%" . $formato . "%\" ";
				}
				
				
				if (isset($_GET["director"])){
						$director = $_GET["director"];
						$query = $query . " and director like \"%" . $director . "%\" ";
				}
				
            $todos = runQuery($query, $enlace);
            $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
			if(0 < MYSQLI_affected_rows($enlace)){
			//peliculas
					$datos[$i]["tipo"] = "peliculas"; 		



                   	$datos[$i]["genero"] = $fila2["genero"]; 
					$datos[$i]["formato"] =$fila2["formato"]; 
                   	$datos[$i]["director"] = $fila2["director"]; 
			
			}
		}else if ($fila["nombre_c"] == "ropa") {
            $query = "select * from ropa where " . $fila["id"] . " = id_anuncio";
			
				if (isset($_GET["talla"])){
					$talla = $_GET["talla"];
					$query = $query . " and talla like \"%" . $talla . "%\" ";
				}	
								
				if (isset($_GET["color"])){
					$color = $_GET["color"];
					$query = $query . " and color like \"%" . $color . "%\" ";
				}			 	
				if (isset($_GET["tipo_tela"])){
					$tipo_tela = $_GET["tipo_tela"];
					$query = $query . " and tipo_tela like \"%" . $tipo_tela . "%\" ";
				}			 	
				if (isset($_GET["tipo_prenda"])){
					$tipo_prenda = $_GET["tipo_prenda"];
					$query = $query . " and tipo_prenda like \"%" . $tipo_prenda . "%\" ";
				}			 					
				
			
            $todos = runQuery($query, $enlace);
            $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
			if(0 < MYSQLI_affected_rows($enlace)){
			//ropa
			


                    $datos[$i]["talla"] =$fila2["talla"];
                    $datos[$i]["color"] =$fila2["color"];
                	$datos[$i]["tipo_tela"] =$fila2["tipo_tela"]; 
                   	$datos[$i]["tipo_prenda"] =$fila2["tipo_prenda"]; 
					
			}
		}else if ($fila["nombre_c"] == "videojuegos") {
	            $query = "select * from videojuegos where " . $fila["id"] . " = id_anuncio";

				if (isset($_GET["genero_videojuego"])) {
					$genero_videojuego = $_GET["genero_videojuego"];
					$query = $query." and genero like \"%$genero_videojuego%\"";
				}
				
				if (isset($_GET["plataforma_videojuego"])) {
					$plataforma_videojuego = $_GET["plataforma_videojuego"];
					$query = $query." and genero like \"%$plataforma_videojuego%\"";
				}
				if (isset($_GET["desarrollador_videojuego"]) ) {
					$desarrollador_videojuego = $_GET["desarrollador_videojuego"];
					$query = $query." and genero like \"%$desarrollador_videojuego%\"";
				}

		  
		  
			$todos = runQuery($query, $enlace);
            $fila2 = mysqli_fetch_array($todos, MYSQLI_BOTH);
			if(0 < MYSQLI_affected_rows($enlace)){
			//videojuegos
					$datos[$i]["tipo"] = "videojuegos"; 		


                    $datos[$i]["genero"] = $fila2["genero"];
                    $datos[$i]["plataforma"] = $fila2["plataforma"];
                    $datos[$i]["desarrollador"] = $fila2["desarrollador"];
					
			}
		}else if ($fila["nombre_c"] == "servicios") {
					
					$datos[$i]["tipo"] = "servicios"; 		
		
		}


				$ruta ="../images/".$fila["log_u"]."/".$fila["id"]."/";
				$total_imagenes = count(glob($ruta."/{*.jp*,*.png}",GLOB_BRACE));
				if($total_imagenes > 0){
				 $filehandle = opendir($ruta); // Abrir archivos
				  while ($file = readdir($filehandle)) {
					   if ($file != "." && $file != "..") {
						$datos[$i]["ruta_imagen"][ ] = "images/".$fila["log_u"]."/".$fila["id"]."/".$file;  
					   } 
					} 
					closedir($filehandle);
				}

					$datos[$i]["ruta_imagen"][ ] ="null";		



	
	
			if($fila["tip"] == "profesional"){
				$datos[$i]["tipo_usuario"] = "profesional"; 
				$query = "SELECT login_usuario, dni_contacto, telefono, email, nombre, apellidos FROM `contacto` where login_usuario = \"".$fila["log_u"]."\""; 
				$todos = runQuery($query, $enlace);
				$fila3 = mysqli_fetch_array($todos, MYSQLI_BOTH);
				if(0 < MYSQLI_affected_rows($enlace)){
						
						$datos[$i]["dni_contacto"] = $fila3["dni_contacto"]; 
						$datos[$i]["telefono"] = $fila3["telefono"]; 
						$datos[$i]["email"] = $fila3["email"]; 
						$datos[$i]["nombre"] = $fila3["nombre"]; 
						$datos[$i]["apellidos"] = $fila3["apellidos"]; 
						
				} else {
					
						$datos[$i]["dni_contacto"] ="null"; 
						$datos[$i]["telefono"] = "null"; 
						$datos[$i]["email"] = "null"; 
						$datos[$i]["nombre"] = "null"; 
						$datos[$i]["apellidos"] = "null"; 
				}
			} else if ($fila["tip"] == "particular") {
				$datos[$i]["tipo_usuario"] = "particular"; 
			} else if ($fila["tip"] == "administrador") {
				$datos[$i]["tipo_usuario"] = "administrador"; 
			} else {
				$datos[$i]["tipo_usuario"] = "normal"; 
			}
		
			$datos[$i]["login_usuario"] = $_SESSION["login_usuario"]; 
			$datos[$i]["tipo_de_usuario"] = $tipo_usuario_res;
	
	}
$i++; 
}

unset($_SESSION["verUltimo"]);

$smarty->assign("datos",$datos);
$smarty->display("anuncios.tpl");
?>

