<?php
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once("../inc/mysqli.php");
// $database = new DB();
$titleseo = "titolo";
$descriptionseo = "descrizione";
$image = "/assets/img/global/logo.jpg";
$widthseo = "400";
$heightseox = "115";
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<title>Esseciesse</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="ThemeZaa">
	<? require_once("../inc/htmlcx/meta-ita.php"); ?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
	<!-- favicon icon -->
	<link rel="shortcut icon" href="<?= $pathindex ?>assets/images/global/favicon/SCS-favicon.ico">
	<link rel="apple-touch-icon" href="<?= $pathindex ?>assets/images/global/favicon/SCS-favicon.ico">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $pathindex ?>assets/images/global/favicon/SCS-favicon.ico">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $pathindex ?>assets/images/global/favicon/SCS-favicon.ico">
	<!-- style sheets and font icons -->
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/vendors.min.css" />
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/icon.min.css" />
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/style.css" />
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/responsive.css" />
	<link rel="stylesheet" href="<?= $pathindex ?>assets\css\it-business.css" />
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840">
	<? require_once("../inc/tagmanager_no.php") ?>

	<!-- ==================== Start Navbar ==================== -->

	<? require_once("../inc/htmlcx/menu-ita.php") ?>
	<section class="cover-background small-screen ipad-top-space-margin py-0 md-h-750px sm-h-650px"
		style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= $pathindex ?>assets/images/azienda/header/azienda-header.jpg');">
		<div class="container h-100 d-flex flex-column justify-content-center">
			<span class="text-uppercase text-center text-white">lavorazioni alluminio e leghe</span>
			<h1 class="text-center text-uppercase">su di noi</h1>
		</div>
	</section>
	<!-- ==================== End navbar ==================== -->
	<section class="pt-3 sm-pt-50px pb-0">
        <div class="container">
            <div class="row mb-10 align-items-center">
                <div class="col-lg-5 position-relative md-mb-20">
                    <div class="w-70 xs-w-80" data-animation-delay="50" data-shadow-animation="true">
                        <img src="<?= $pathindex ?>assets/images/home/intro/home-intro_1.webp" alt="service-image" class="border-radius-8px w-100">
                    </div>
                    <div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="<?= $pathindex ?>assets/images/home/intro/home-intro_2.webp" alt="service-image" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-900 h2 ls-minus-2px">Cenni biografici</h3>
                    <p class="mb-40px sm-mb-25px">Siamo molto attenti alle esigenze del cliente ed ai problemi del mercato: collaboriamo con altre aziende del territorio per poter fornire al cliente velocità nella consegna, particolari molto precisi e finiti, già pronti al montaggio. </p>
                    <p>Riusciamo a gestire commesse particolarmente urgenti e spediamo rapidamente in tutta Italia.</p>
                </div>
            </div>
        </div>
    </section>

	<section class="pt-0 sm-pt-50px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="text-dark-gray h2 lg-fs-40 lh-60 lg-lh-60 shadow-none ls-minus-2px " data-shadow-animation="true" data-animation-delay="500"><span class="text-highlight">Dinamicità<span class="bg-dark-gray h-3px bottom-0px separator-animation"></span></span>, <span class="text-highlight">flessibilità<span class="bg-dark-gray h-3px bottom-0px separator-animation"></span></span> e <span class="text-highlight">puntualità<span class="bg-dark-gray h-3px bottom-0px separator-animation"></span></span> sono le basi su cui si fonda la nostra <span class="text-highlight">giovane impresa<span class="bg-dark-gray h-3px bottom-0px separator-animation"></span></span>, in continua espansione e che guarda verso il progresso.</span>
                </div>
            </div>
        </div>
    </section>

	<section class="p-0 bg-orange">
        <div class="container">
            <div class="d-flex justify-content-between">
                <p class="h3 text-white fw-900 mt-25px">Noi siamo pronti a metterci in gioco. E tu?</p>
                <a class="text-decoration-line-bottom h3 text-white fw-900 mt-25px" href="">Contattaci ora</a>
            </div>
        </div>
    </section>

	<section>
		<div class="container">
			<h2 class="fw-900">La nostra gamma di alluminio e leghe</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<? for($i=0; $i<7; $i++): ?>
			<div class="d-flex justify-content-between materials mt-40px">
				<span class="fw-900"><?= rand(1000,9999) ?></span>
				<span>Lega di Alluminio</span>
				<span>We were making our way to the Rila Mountains, where we enjoyed our scrambled eggs.</span>
			</div>
			<? endfor ?>
		</div>
	</section>

	<!-- ==================== Start Footer ==================== -->
	<? require_once("../inc/htmlcx/footer-ita.php") ?>
	<!-- ==================== End Footer ==================== -->
	<!-- start scroll progress -->
	<div class="scroll-progress d-none d-xxl-block">
		<a href="#" class="scroll-top" aria-label="scroll">
			<span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
		</a>
	</div>
	<!-- end scroll progress -->
	<!-- javascript libraries -->
	<script type="text/javascript" src="<?= $pathindex ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?= $pathindex ?>assets/js/vendors.min.js"></script>
	<script type="text/javascript" src="<?= $pathindex ?>assets/js/main.js"></script>
</body>

</html>