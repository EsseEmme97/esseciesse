<?
$authorseo="new project";
$site_name=$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'];
$copyrightseo=$publisherseo="new project";
$pageurlseo=$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$linkimgseo=$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"],"/it"))."/$image";
?>
		<title><?=$titleseo?></title>
		<base href="<?php echo $BaseDir; ?>">
		<meta name="author" content="<?=$authorseo?>" />
		<meta name="robots" content="all | index | follow">
		<meta name="copyright" content="<?=$copyrightseo?>">
		<meta name="Content-Language" content="it">
		<meta name="audience" content="all">
		<meta name="publisher" content="<?=$publisherseo?>">
		<meta name="Coverage" content="Worldwide">
		<meta name="rating" content="General">
		<meta name="description" content="<?=$descriptionseo?>" />
		<meta property="og:title" content="<?=$titleseo?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?=$pageurlseo?>" />
		<meta property="og:site_name" content="<?=$site_name?>" />
		<meta property="og:description" content="<?=$descriptionseo?>" />
		<meta property="og:image" content="<?=$linkimgseo?>" />
		<meta property="og:image:width" content="<?=$widthseo?>" />
		<meta property="og:image:height" content="<?=$heightseo?>" />
