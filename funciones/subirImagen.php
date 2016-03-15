<?php
	session_start();
	$ruta = $_SESSION["ruta"];
	if (!file_exists($ruta)) {
		mkdir($ruta, 0777, true);
	}
	$count=count($_FILES["files"]["name"]);
	
	for ($i=0; $i<$count; $i++) {
		if(preg_match("/image/", $_FILES["files"]["type"][$i])){
			$b=$i+1;
            $extensionf=preg_split("/\//",$_FILES["files"]["type"][$i]);
            
            move_uploaded_file($_FILES["files"]["tmp_name"][$i], "$ruta$b.$extensionf[1]");
			
		}
     }
	 $_SESSION["numero_imagenes"] = $count;	 

	 header("Location:../getDatosFactura.php");  
	
?>