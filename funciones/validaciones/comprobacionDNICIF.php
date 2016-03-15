<?PHP
include_once("../funciones.php");
include_once("../datos.php");
$enlace = connect($server, $user, $password);
selectbbdd($basededatos,$enlace);
$val = $_GET["val"];
$id = $_GET["val2"];
if(strcasecmp($id,"dni")==0){
	$letra = substr($val, -1);
	$numeros = substr($val, 0, -1);
	if (!(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 )){
		echo ("El DNI no es v&aacute;lido");
	}
}else{
	if(!cif_valido($val)){
		echo ("El CIF no es v&aacute;lido");
	}
}


function cif_valido($cif) {
    $cif = strtoupper($cif);
     
    $cifRegEx1 = '/^[ABEH][0-9]{8}$/i';
    $cifRegEx2 = '/^[KPQS][0-9]{7}[A-J]$/i';
    $cifRegEx3 = '/^[CDFGJLMNRUVW][0-9]{7}[0-9A-J]$/i';
     
    if (preg_match($cifRegEx1, $cif) || preg_match($cifRegEx2, $cif) || preg_match($cifRegEx3, $cif)) {
        $control = $cif[strlen($cif) - 1];
        $suma_A = 0;
        $suma_B = 0;
         
        for ($i = 1; $i < 8; $i++) {
            if ($i % 2 == 0) $suma_A += intval($cif[$i]);
            else {
                $t = (intval($cif[$i]) * 2);
                $p = 0;
                 
                for ($j = 0; $j < strlen($t); $j++) {
                    $p += substr($t, $j, 1);
                }
                $suma_B += $p;
            }
        }
         
        $suma_C = (intval($suma_A + $suma_B)) . "";
        $suma_D = (10 - intval($suma_C[strlen($suma_C) - 1])) % 10;
         
        $letras = "JABCDEFGHI";
         
        if ($control >= "0" && $control <= "9") return ($control == $suma_D);
        else return (strtoupper($control) == $letras[$suma_D]);
    }
    else return false;
}
?>