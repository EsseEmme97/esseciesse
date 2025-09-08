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
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= $pathindex ?>assets/images/contatti/contatti-header.jpg');">
        <div class="container h-100 d-flex flex-column justify-content-center">
            <span class="text-uppercase text-center text-white">lavorazioni alluminio e leghe</span>
            <h1 class="text-center text-uppercase">Contatti</h1>
        </div>
    </section>
    <!-- ==================== End navbar ==================== -->
    <section class="position-relative bg-light-gray">
        <div class="container">
            <div class="row row-cols-md-1 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <div class="col-xxl-4 col-xl-5 col-lg-5 md-mb-30px d-flex flex-column">
                    <h3 class="fw-900 h2 ls-minus-1px text-dark-gray w-85 xl-w-90 md-w-100 mb-15px">Richiedi ora un preventivo</h3>
                    <p class="w-85 xl-w-90 xs-w-100 mb-4">Esseciesse srl</p>
					<p class="w-85 xl-w-90 xs-w-100 mb-4">Via dell'artigianato 75, 36036, Torrebelvicino (VI)</p>
					<p class="w-85 xl-w-90 xs-w-100 mb-4">Lunedì - Venerdì dalle 7.30 alle 17.30</p>
					<p class="w-85 xl-w-90 xs-w-100 mb-4"><a href="mailto:info@esseciesseitalia.it">info@esseciesseitalia.it</a></p>
                    <div class="icon-with-text-style-01 feature-box feature-box-left-icon-middle last-paragraph-no-margin mt-auto">
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
								<input type="text" name="nome" class="form-control p-3" id="nome" aria-describedby="nome" placeholder="Nome">
							</div>
							<div class="form-group col-lg-6 mt-5">
								<label for="cognome">Cognome</label>
								<input type="text" class="form-control p-3" name="cognome" id="cognome" placeholder="Cognome">
							</div>
						</div>
						<div class="row mt-5">
							<div class="col-lg-6 h-100">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control p-3" id="email" name="email" aria-describedby="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group col-12 col-lg-6 mt-5 mt-lg-0">
								<label for="messaggio">Inserisci il tuo messaggio</label>
								<textarea class="form-control" name="messaggio" id="messaggio" placeholder="Messaggio" style="height: 100%;"></textarea>
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

    <section class="py-0 lh-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.724588459427!2d11.303668975774364!3d45.71656171656601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4778b336bc26a56b%3A0x7617e6a87db9b1a7!2sESSECIESSE%20srl!5e0!3m2!1sit!2sit!4v1752957872780!5m2!1sit!2sit" style="border:0; width: 100%; height: 50vh;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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