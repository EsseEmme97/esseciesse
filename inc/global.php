<?
$BaseDir = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$_pagina_corrente = basename($_SERVER['SCRIPT_NAME']); 
$pageurlseolan=$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/";

$current = array ($_pagina_corrente => 'attivo');

$mesi_long[1] = array("01"=>'gennaio', "02"=>'febbraio', "03"=>'marzo', "04"=>'aprile',
                "05"=>'maggio', "06"=>'giugno', "07"=>'luglio', "08"=>'agosto',
                "09"=>'settembre', "10"=>'ottobre', "11"=>'novembre', "12"=>'dicembre');
$mesi_short[1] = array("01"=>'gen', "02"=>'feb', "03"=>'mar', "04"=>'apr',
                "05"=>'mag', "06"=>'giu', "07"=>'lug', "08"=>'ago',
                "09"=>'set', "10"=>'ott', "11"=>'nov', "12"=>'dic');

$mesi_long[2] = array("01"=>'january', "02"=>'february', "03"=>'march', "04"=>'april',
                "05"=>'may', "06"=>'june', "07"=>'july', "08"=>'august',
                "09"=>'september', "10"=>'october', "11"=>'november', "12"=>'december');
$mesi_short[2] = array("01"=>'jan', "02"=>'feb', "03"=>'mar', "04"=>'apr',
                "05"=>'may', "06"=>'jun', "07"=>'jul', "08"=>'aug',
                "09"=>'sep', "10"=>'oct', "11"=>'nov', "12"=>'dec');

$mesi_long[3] = array("01"=>'januar', "02"=>'februar', "03"=>'märz', "04"=>'april',
                "05"=>'mai', "06"=>'juni', "07"=>'juli', "08"=>'august',
                "09"=>'september', "10"=>'oktober', "11"=>'november', "12"=>'dezember');
$mesi_short[3] = array("01"=>'jan', "02"=>'feb', "03"=>'mär', "04"=>'apr',
                "05"=>'mai', "06"=>'jun', "07"=>'jul', "08"=>'aug',
                "09"=>'sep', "10"=>'okt', "11"=>'nov', "12"=>'dez');

$mesi_long[4] = array("01"=>'janvier', "02"=>'f&eacute;vrier', "03"=>'mars', "04"=>'avril',
                "05"=>'mai', "06"=>'juin', "07"=>'juillet', "08"=>'ao&ucirc;t',
                "09"=>'septembre', "10"=>'octobre', "11"=>'novembre', "12"=>'d&eacute;cembre');
$mesi_short[4] = array("01"=>'jan', "02"=>'f&eacute;v', "03"=>'mar', "04"=>'avr',
                "05"=>'mai', "06"=>'jui', "07"=>'jul', "08"=>'ao&ucirc;t',
                "09"=>'sep', "10"=>'oct', "11"=>'nov', "12"=>'d&eacute;c');

$mesi_long[5] = array("01"=>'enero', "02"=>'febrero', "03"=>'marzo', "04"=>'abril',
                "05"=>'mayo', "06"=>'junio', "07"=>'julio', "08"=>'agosto',
                "09"=>'septiembre', "10"=>'octubre', "11"=>'noviembre', "12"=>'diciembre');
$mesi_short[5] = array("01"=>'ene', "02"=>'feb', "03"=>'mar', "04"=>'abr',
                "05"=>'may', "06"=>'jun', "07"=>'jul', "08"=>'ago',
                "09"=>'sep', "10"=>'oct', "11"=>'nov', "12"=>'dic');

$mesi_long[6] = array("01"=>'янва́рь', "02"=>'февра́ль', "03"=>'март', "04"=>'апре́',
                "05"=>'май', "06"=>'ию́нь', "07"=>'ию́ль', "08"=>'а́вгуст',
                "09"=>'сентя́брь', "10"=>'октя́брь', "11"=>'ноя́брь', "12"=>'дека́брь');
$mesi_short[6] = array("01"=>'янв', "02"=>'фев', "03"=>'мар', "04"=>'апр́',
                "05"=>'май', "06"=>'ию́н', "07"=>'ию́л', "08"=>'а́вг',
                "09"=>'сен', "10"=>'окт', "11"=>'ноя́', "12"=>'дек');

$locale=array(1=>"it",2=>"en",3=>"es");

$sito="https://tecnostampi.it/";
$settore[1]=array(1=>"Caffè",2=>"Foglia",3=>"Solubili");
$fase[1]=array(1=>"Compatibile",2=>"Compostabile");
$settore[2]=array(1=>"Commercial",2=>"Industrial");
$fase[2]=array(1=>"Mixers",2=>"Dividers",3=>"Moulders",4=>"Proofing",5=>"Baking",6=>"Accessories");
$settore[3]=array(1=>"Artesanal",2=>"Industrial");
$fase[3]=array(1=>"Masa",2=>"División",3=>"Moldeado",4=>"Fermentación",5=>"Cocción",6=>"Accesorios");

// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.</i>
function myTruncate($string, $limit, $break=".", $pad="...") { // taglia alla parola successiva il limite
	// return with no change if string is shorter than $limit 
	if(strlen($string) <= $limit) 
		return $string; 
	// is $break present between $limit and the end of the string? 
	if(false !== ($breakpoint = strpos($string, $break, $limit))) { 
		if($breakpoint < strlen($string) - 1) { 
			$string = substr($string, 0, $breakpoint) . $pad; 
		} 
	} 
	return $string; 
}
function myTruncate2($string, $limit, $break=" ", $pad="...") { // taglia alla parola precedente il limite
	// return with no change if string is shorter than $limit 
	if(strlen($string) <= $limit) return $string; 
	$string = substr($string, 0, $limit); 
	if(false !== ($breakpoint = strrpos($string, $break))) { 
		$string = substr($string, 0, $breakpoint); 
	} 
	return $string . $pad; 
}
// Original PHP code by Chirp Internet: www.chirp.com.au // Please acknowledge use of this code by including this header. 
function restoreTags($input) { 
	$opened = array(); // loop through opened and closed tags in order 
	if(preg_match_all("/<(\/?[a-z]+)>?/i", $input, $matches)) { 
		foreach($matches[1] as $tag) { 
			if(preg_match("/^[a-z]+$/i", $tag, $regs)) {
				// a tag has been opened 
				if(strtolower($regs[0]) != 'br') $opened[] = $regs[0]; 
			} elseif(preg_match("/^\/([a-z]+)$/i", $tag, $regs)) {
				// a tag has been closed
				$tmp=array_keys($opened, $regs[1]);
				unset($opened[array_pop($tmp)]); 
			} 
		} 
	} 
	// close tags that are still open 
	if($opened) { 
		$tagstoclose = array_reverse($opened); 
		foreach($tagstoclose as $tag) $input .= "</$tag>"; 
	} 
	return $input; 
}

function formatSizeUnits($bytes){
	if ($bytes >= 1073741824){
		$bytes = number_format($bytes / 1073741824, 2) . ' GB';
	}
	elseif ($bytes >= 1048576){
		$bytes = number_format($bytes / 1048576, 2) . ' MB';
	}
	elseif ($bytes >= 1024){
		$bytes = number_format($bytes / 1024, 2) . ' KB';
	}
	elseif ($bytes > 1){
		$bytes = $bytes . ' bytes';
	}
	elseif ($bytes == 1){
		$bytes = $bytes . ' byte';
	}
	else{
		$bytes = '0 bytes';
	}
	return $bytes;
}

function CleanString($string){
    $strResult =  str_ireplace("à", "a", $string);
    $strResult =  str_ireplace("á", "a", $strResult);
    $strResult =  str_ireplace("è", "e", $strResult);
    $strResult =  str_ireplace("é", "e", $strResult);
    $strResult =  str_ireplace("ì", "i", $strResult);
    $strResult =  str_ireplace("í", "i", $strResult);
    $strResult =  str_ireplace("ò", "o", $strResult);
    $strResult =  str_ireplace("ó", "o", $strResult);
    $strResult =  str_ireplace("ù", "u", $strResult);
    $strResult =  str_ireplace("ú", "u", $strResult);
    $strResult =  str_ireplace("ç", "c", $strResult);
    $strResult =  str_ireplace("ö", "o", $strResult);
    $strResult =  str_ireplace("û", "u", $strResult);
    $strResult =  str_ireplace("ê", "e", $strResult);
    $strResult =  str_ireplace("ü", "u", $strResult);
    $strResult =  str_ireplace("ë", "e", $strResult);
    $strResult =  str_ireplace("ä", "a", $strResult);
    
    $strResult =  str_ireplace("À", "a", $strResult);
    $strResult =  str_ireplace("Á", "a", $strResult);
    $strResult =  str_ireplace("È", "e", $strResult);
    $strResult =  str_ireplace("É", "e", $strResult);
    $strResult =  str_ireplace("Ì", "i", $strResult);
    $strResult =  str_ireplace("Í", "i", $strResult);
    $strResult =  str_ireplace("Ò", "o", $strResult);
    $strResult =  str_ireplace("Ó", "o", $strResult);
    $strResult =  str_ireplace("Ù", "u", $strResult);
    $strResult =  str_ireplace("Ú", "u", $strResult);
    $strResult =  str_ireplace("Ç", "c", $strResult);
    $strResult =  str_ireplace("Ö", "o", $strResult);
    $strResult =  str_ireplace("Û", "u", $strResult);
    $strResult =  str_ireplace("Ê", "e", $strResult);
    $strResult =  str_ireplace("Ü", "u", $strResult);
    $strResult =  str_ireplace("Ë", "e", $strResult);
    $strResult =  str_ireplace("Ä", "a", $strResult);
        
    $strResult =  str_ireplace("'", " ", $strResult);
 
    $strResult = strip_tags($strResult);
    $strResult = preg_replace('/[^A-Za-z0-9 ]/', "", $strResult);
    $strResult = trim($strResult);
    $strResult =  preg_replace('/[ ]{2,}/', " ", $strResult);
 
    $strResult = str_replace(" ", "-", $strResult);
    $strResult = strip_tags($strResult);
 
    return strtolower($strResult);
}

function convertCase($str, $case = 'upper'){
	switch($case){
		case "upper" :
		default:
			$str = strtoupper($str);
			$pattern = '/&([A-Z])(UML|ACUTE|CIRC|TILDE|RING|';
			$pattern .= 'ELIG|GRAVE|SLASH|HORN|CEDIL|TH);/e';
			$replace = "'&'.'\\1'.strtolower('\\2').';'"; //convert the important bit back to lower
		break;

		case "lower" :
			$str = strtolower($str);
		break;
	}
	$str = preg_replace($pattern, $replace, $str);
	return $str;
}
?>
