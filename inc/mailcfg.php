<?
$emailMethod                = 'smtp'; // REQUIRED value. Options: 'smtp' , 'phpmail'

$outgoingServerAddress      = 'smtp.gmail.com'; // Consult your hosting provider.
$outgoingServerPort         = '465';                  // Options: '587' , '25' - Consult your hosting provider.
$outgoingServerSecurity     = 'ssl';                 // Options: 'ssl' , 'tls' , null - Consult your hosting provider.
$sendingAccountUsername     = 'info.carbonx@gmail.com';
$sendingAccountPassword     = 'nqdritkvpovsutnt';

$toemailaddresses = array();
$bccemailaddresses = array();

$recipientEmail             = 'info@pizetaexpress.it';
$recipientName              = 'Pizeta express';	

$toemailaddresses[] = array(
	'email' => "carlo@carbonx.it",
	'name' 	=> "Pizeta express"
);
/*$toemailaddresses[] = array(
	'email' => "test@carbonx.it",
	'name' 	=> "Officina del credito"
);*/	
$bccemailaddresses[] = array(
	'email' => "forms@carbonx.it",
	'name' 	=> "Pizeta express"
);

?>
