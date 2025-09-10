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
		style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= $pathindex ?>assets/images/realizzazioni/header/realizzazioni-header.jpg');">
		<div class="container h-100 d-flex flex-column justify-content-center">
			<span class="text-uppercase text-center text-white">PROGETTI SU MISURA PER OGNI ESIGENZA</span>
			<h1 class="text-center text-uppercase">Lavori</h1>
		</div>
	</section>
	<!-- ==================== End navbar ==================== -->

	<section class="half-section pb-lg-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<span class="text-dark-gray h2 lg-fs-40 lh-60 lg-lh-60 shadow-none ls-minus-2px" data-shadow-animation="true" data-animation-delay="500">
						Grazie ad , <span class="text-highlight">impianti di produzione ad alta tecnologia<span class="bg-dark-gray h-3px bottom-0px d-none d-lg-block separator-animation"></span></span> realizziamo particolari a disegno di varie dimensioni, anche in tirature limitate, dal piccolo particolare a piastre fino a 4000*2000 mm.</span>
				</div>
			</div>
		</div>
	</section>

	<section class="container py-0">
		<div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-7 container mx-auto mt-7" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
			<!-- start features box item -->
			<div class="col icon-with-text-style-01 md-mb-30px">
				<div class="feature-box feature-box-left-icon last-paragraph-no-margin">
					<div class="feature-box-icon me-20px">
						<img src="<?= $pathindex ?>assets/images/icon set/punti di forza/puntualita.svg" alt="puntualità" />
					</div>
					<div class="feature-box-content">
						<span class="d-inline-block h4 fw-700 mb-5px">Puntualità</span>
						<p class="w-80 xl-w-90 lg-w-100">Lorem ipsum dolor sit amet tempo</p>
					</div>
				</div>
			</div>
			<!-- end features box item -->
			<!-- start features box item -->
			<div class="col icon-with-text-style-01 md-mb-30px">
				<div class="feature-box feature-box-left-icon last-paragraph-no-margin">
					<div class="feature-box-icon me-20px">
						<img src="<?= $pathindex ?>assets/images/icon set/punti di forza/flessibilita.svg" alt="flessibilità" />
					</div>
					<div class="feature-box-content">
						<span class="d-inline-block h4 fw-700 mb-5px">Flessibilità</span>
						<p class="w-80 xl-w-90 lg-w-100">Lorem ipsum dolor sit amet tempo</p>
					</div>
				</div>
			</div>
			<!-- end features box item -->
			<!-- start features box item -->
			<div class="col icon-with-text-style-01 md-mb-30px">
				<div class="feature-box feature-box-left-icon last-paragraph-no-margin">
					<div class="feature-box-icon me-20px">
						<img src="<?= $pathindex ?>assets/images/icon set/punti di forza/lavori-su-misura.svg" alt="lavori su misura" />
					</div>
					<div class="feature-box-content">
						<span class="d-inline-block h4 fw-700 mb-5px">Lavori su misura</span>
						<p class="w-80 xl-w-90 lg-w-100">Lorem ipsum dolor sit amet tempo</p>
					</div>
				</div>
			</div>
			<!-- end features box item -->
		</div>
	</section>

	<section class="position-relative pb-lg-0 pt-0 bg-gradient-top-very-light-gray sm-pt-50px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
		<div class="container">
			<div class="row mb-8 sm-mb-0">
				<div class="col-12 filter-content p-md-0">
					<ul class="portfolio-modern portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
						<li class="grid-sizer"></li>
						<!-- start portfolio item -->
						 <? for($i=1;$i<18;$i++): ?>
						<? $imageIndex= $i<10 ? "0$i" : $i;
							$imageFullPath= $pathindex . "assets/images/realizzazioni/prodotti/prodotti-". $imageIndex . ".jpg"
						?>
						<li class="grid-item transition-inner-all">
								<div class="portfolio-box">
									<div class="portfolio-image border-radius-4px">
										<img src="<?= $imageFullPath ?>" alt="immagine servizio" />
									</div>
									<div class="portfolio-hover box-shadow-extra-large">
										<div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
											<div class="me-auto">
												<div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Alimentare</div>
												<div class="fw-700 text-dark-gray text-uppercase lh-initial">7022</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<!-- end portfolio item -->
						<? endfor; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="p-0 bg-orange">
		<div class="container">
			<div class="d-lg-flex py-3 py-lg-0 text-center text-lg-start justify-content-lg-between">
				<p class="h3 text-white fw-900">Noi siamo pronti a metterci in gioco. E tu?</p>
				<a class="text-decoration-line-bottom h3 text-white fw-900 mt-25px" href="<?= $pathindex ?>contatti">Contattaci ora</a>
			</div>
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