<?php
$pathindex="";
switch ($_pagina_corrente) {
	case "index.php":
		$pathindex="./";
		break;
	case "privacy-policy.php":
	case "cookies-policy.php":
		$pathindex="../";
		break;
	default:
		$pathindex="../"	;
}

?>
