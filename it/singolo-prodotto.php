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
		style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= $pathindex ?>assets/images/lavorazioni/header/lavorazioni-header.jpg');">
		<div class="container h-100 d-flex flex-column justify-content-center">
			<span class="text-uppercase text-center text-white">lavorazioni alluminio e leghe</span>
			<h1 class="text-center text-uppercase">Alluminio</h1>
		</div>
	</section>
	<!-- ==================== End navbar ==================== -->
	<section class="pt-3 sm-pt-50px pb-0">
		<div class="container">
			<div class="row mb-10 align-items-center">
				<div class="col-lg-5 position-relative md-mb-20">
					<div class="w-70 xs-w-80" data-animation-delay="50" data-shadow-animation="true">
						<img src="<?= $pathindex ?>assets/images/alluminio/intro/lavorazioni-intro_1.webp" alt="service-image" class="border-radius-8px w-100">
					</div>
					<div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
						<img src="<?= $pathindex ?>assets/images/alluminio/intro/lavorazioni-intro_2.webp" alt="service-image" class="border-radius-8px w-100 box-shadow-quadruple-large" />
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 offset-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
					<span class="text-dark-gray fw-900 h2 d-block">Cenni biografici</span>
					<p class="mb-40px sm-mb-25px">Siamo molto attenti alle esigenze del cliente ed ai problemi del mercato: collaboriamo con altre aziende del territorio per poter fornire al cliente velocità nella consegna, particolari molto precisi e finiti, già pronti al montaggio. </p>
					<p class="mb-0">Riusciamo a gestire commesse particolarmente urgenti e spediamo rapidamente in tutta Italia.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="pt-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<span class="text-dark-gray h2 lg-fs-40 lh-60 lg-lh-60 shadow-none ls-minus-2px " data-shadow-animation="true" data-animation-delay="500"><span class="text-highlight">Dinamicità<span class="bg-dark-gray h-3px bottom-0px d-none d-lg-block separator-animation"></span></span>, <span class="text-highlight">flessibilità<span class="bg-dark-gray h-3px bottom-0px d-none d-lg-block separator-animation"></span></span> e <span class="text-highlight">puntualità<span class="bg-dark-gray h-3px bottom-0px d-none d-lg-block separator-animation"></span></span> sono le basi su cui si fonda la nostra <span class="text-highlight">giovane impresa<span class="bg-dark-gray h-3px bottom-0px d-none d-lg-block separator-animation"></span></span>, in continua espansione e che guarda verso il progresso.</span>
				</div>
			</div>
		</div>
	</section>

	<section class="p-0 bg-orange">
		<div class="container">
			<div class="d-lg-flex py-3 py-lg-0 text-center text-lg-start justify-content-lg-between">
				<p class="h3 text-white fw-900 mt-25px">Noi siamo pronti a metterci in gioco. E tu?</p>
				<a class="text-decoration-line-bottom h3 text-white fw-900 mt-25px" href="<?= $_SERVER['REQUEST_URI'] ?>#contact-section">Contattaci ora</a>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<h2 class="fw-900">La nostra gamma di alluminio e leghe</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<div class="container">
				<div class="row mt-5">
					<? for ($i = 1; $i <= 8; $i++): ?>
						<div class="col-12" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
							<div class="row g-0 align-items-center text-center text-sm-start">
								<div class="col-12">
									<div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
								</div>
								<div class="col-sm-1 text-center xs-mt-20px">
									<span class="text-dark-gray fs-16 ls-minus-1px fw-600"><?= "0$i" ?></span>
								</div>
								<div class="col-sm-3 offset-sm-1">
									<span class="fw-600 text-dark-gray fs-22 ls-minus-05px">Lega di alluminio</span>
								</div>
								<div class="col-sm-7 p-35px sm-p-25px xs-p-20px xs-pt-10px last-paragraph-no-margin">
									<p class="w-95 sm-w-100">We are excited for our work and how it positively impacts clients. With over 12 years of experience we have been constantly providing solutions.</p>
								</div>
							</div>
						<? endfor; ?>
						</div
							</div>
				</div>
			</div>
	</section>

	<section class="pt-0">
		<div class="container-fluid">
			<div class="row overflow-hidden">
				<div class="col-12 col-md-12">
					<div class="outside-box-right-15 outside-box-left-15 sm-outside-box-left-40 sm-outside-box-right-40">
						<div class="swiper view-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false },  "pagination": { "el": ".swiper-line-pagination", "clickable": true }, "navigation": { "nextEl": ".slider-three-slide-next", "prevEl": ".slider-three-slide-prev" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 3 } }, "effect": "slide" }'>
							<div class="swiper-wrapper align-items-center">
								<!-- start slider item -->
								<? for ($i = 1; $i < 7; $i++) : ?>
									<? $imagePath = $pathindex . "assets/images/alluminio/gallery/lavorazioni-gallery_" . $i . ".webp" ?>
									<div class="swiper-slide">
										<img src="<?= $imagePath ?>" class="border-radius-6px" alt="immagine-lavorazioni">
									</div>
									<!-- end slider item -->
								<? endfor; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact-section" class="position-relative bg-light-gray">
		<div class="container">
			<div class="row row-cols-md-1 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
				<div class="col-xxl-4 col-xl-5 col-lg-5 md-mb-30px d-flex flex-column">
					<span class="fw-900 h2 text-dark-gray w-85 xl-w-90 md-w-100 mb-15px">Richiedi ora un preventivo</span>
					<p class="w-85 xl-w-90 xs-w-100">Allega un file CAD per ricevere un'offerta più rapidamente</p>
					<div class="icon-with-text-style-01 feature-box feature-box-left-icon-middle last-paragraph-no-margin mt-5">
						<div class="feature-box-icon me-15px d-flex align-items-center p-4 gap-4 bg-white rounded shadow">
							<img src="<?= $pathindex ?>assets/images/global/recapiti/telefono.svg" alt="icona telefono">
							<div>
								<span class="d-block text-18 color-dark-gray">Oppure chiama</span>
								<a href="tel:+390445827253" class="d-block text-18 color-dark-gray fw-900">0445 827253</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7 offset-xxl-1">
					<!-- start contact form -->
					<form>
						<div class="row">
							<div class="form-group col-lg-6 mt-5">
								<label for="nome">Nome</label>
								<input type="text" name="Nome" class="form-control p-3" id="nome" aria-describedby="nome" placeholder="Nome">
							</div>
							<div class="form-group col-lg-6 mt-5">
								<label for="Cognome">Cognome</label>
								<input type="text" class="form-control p-3" name="cognome" id="cognome" placeholder="Cognome">
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-lg-6 h-100">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control p-3" id="mail" name="email" aria-describedby="email" placeholder="Email">
								</div>
								<div class="form-group mt-5 mt-lg-3">
									<label for="allegato">Allegato</label>
									<input type="file" name="allegato" class="form-control p-3" id="allegato" aria-describedby="allegato" placeholder="Scegli allegato">
								</div>
							</div>
							<div class="form-group col-12 col-lg-6 mt-5 mt-lg-0">
								<label for="messaggio">Inserisci il tuo messaggio</label>
								<textarea class="form-control" name="messaggio" id="messaggio" placeholder="Messaggio" style="height: 80%;"></textarea>
							</div>
						</div>
						<div class="mt-50px">
							<button type="submit" class="btn-esseciesse-primary no-border">
								<span>Invia</span>
							</button>
						</div>
					</form>
					<!-- end contact form -->
				</div>
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
	<script>
		$(function() {
			$('form').on('submit', function(e) {
				e.preventDefault(); // Previene l'invio se ci sono errori

				let isValid = true;

				// Rimuove eventuali errori precedenti
				$('.form-control').removeClass('is-invalid');

				// Nome
				const nome = $('#nome').val().trim();
				if (nome === '') {
					$('#nome').addClass('is-invalid');
					isValid = false;
				}

				// Cognome
				const cognome = $('#cognome').val().trim();
				if (cognome === '') {
					$('#cognome').addClass('is-invalid');
					isValid = false;
				}

				// Email
				const email = $('#email').val().trim();
				const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				if (!emailRegex.test(email)) {
					$('#email').addClass('is-invalid');
					isValid = false;
				}

				// Messaggio
				const messaggio = $('#messaggio').val().trim();
				if (messaggio === '') {
					$('#messaggio').addClass('is-invalid');
					isValid = false;
				}

				// Allegato (facoltativo — se vuoi renderlo obbligatorio, decommenta)
				/*
				const allegato = $('#allegato').val().trim();
				if (allegato === '') {
				    $('#allegato').addClass('is-invalid');
				    isValid = false;
				}
				*/

				// Se tutto è valido, puoi inviare il form (es: via AJAX o con submit normale)
				if (isValid) {
					this.submit(); // o gestisci con AJAX
				}
			});
		});
	</script>
</body>

</html>