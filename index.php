<?php
$lingua = 1;
require_once("./inc/global.php");
require_once("./inc/header.php");
require_once("./inc/mysqli.php");
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
    <? require_once("inc/htmlcx/meta-ita.php"); ?>
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
    <? require_once("inc/tagmanager_no.php") ?>

    <!-- ==================== Start Navbar ==================== -->

    <? require_once("inc/htmlcx/menu-ita.php") ?>
    <section class="cover-background full-screen ipad-topspace-margin py-0 md-h-750px sm-h-650px"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('./assets/images/home/header/home-header.jpg'); 
                margin-top: inherit; 
                height: 951px;">
        <div class="opacity-very-light bg-black"></div>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-xl-6 col-lg-8 col-md-10 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-25px text-uppercase">Lavorazioni Alluminio e leghe</h1>
                    <p class="text-white">Sperimentiamo e lavoriamo tramite macchinari ad alto tasso innovativo e tecnologico</p>
                    <div class="d-flex gap-2">
                        <a href="<?= $pathindex ?>azienda" class="btn-esseciesse-primary">
                            <span>su di noi</span>
                        </a>
                        <a href="<? $pathindex ?>contatti" class="btn-esseciesse-secondary">
                            <span>contattaci</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End navbar ==================== -->
    <section class="half-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="text-dark-gray h2 fw-400 lg-fs-40 shadow-none " data-shadow-animation="true" data-animation-delay="500">Grazie ad <span class="text-highlight">impianti di produzione ad alta tecnologia<span class="bg-dark-gray d-none d-lg-block h-3px bottom-0px separator-animation"></span></span> realizziamo particolari a disegno di varie dimensioni, anche in tirature limitate, dal piccolo particolare a piastre fino a 4000*2000 mm.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="half-section pt-0 xs-mb-0 xs-pb-0">
        <div class="container">
            <div class="row mb-10 align-items-center">
                <div class="col-lg-5 position-relative md-mb-20">
                    <div class="w-70 xs-w-80" data-animation-delay="50" data-shadow-animation="true">
                        <img src="<?= $pathindex ?>assets/images/home/intro/home-intro_1.webp" alt="immagine servizio" class="border-radius-8px w-100">
                    </div>
                    <div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="<?= $pathindex ?>assets/images/home/intro/home-intro_2.webp" alt="immagine servizio" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-dark-gray fw-700 h2 d-block">Cosa facciamo</span>
                    <p class="mb-40px sm-mb-25px">Siamo molto attenti alle esigenze del cliente ed ai problemi del mercato: collaboriamo con altre aziende del territorio per poter fornire al cliente velocità nella consegna, particolari molto precisi e finiti, già pronti al montaggio.</p>
                    <p>Riusciamo a gestire commesse particolarmente urgenti e spediamo rapidamente in tutta Italia.</p>
                    <div class="mt-40px">
                        <a href="<?= $pathindex ?>azienda" class="btn-esseciesse-primary">
                            <span>su di noi</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center container mx-auto mt-70px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
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
    <!-- end section -->

    <section class="bg-light-gray half-section">
        <div class="container">
            <h2 class="text-center mb-70px">In questi settori, siamo specializzati</h2>
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 g-0 justify-content-between" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay":0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <? $data = [["title" => "Packaging", "image" => "assets/images/icon set/settori/packaging.svg"], ["title" => "Alimentare", "image" => "assets/images/icon set/settori/alimentare.svg"], ["title" => "Nautico", "image" => "assets/images/icon set/settori/nautico.svg"], ["title" => "Automotive", "image" => "assets/images/icon set/settori/automotive.svg"]] ?>
                <? foreach ($data as $element): ?>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all <?= $i == 0 ? "border-start" : "" ?> border-end border-dark-subtle">
                        <div class="feature-box hover-box h-100 transition pt-10 pb-10 xs-p-12 last-paragraph-no-margin overflow-hidden">
                            <div class="feature-box-icon">
                                <img src="<?= $pathindex . $element["image"] ?>" alt="icona settore">
                            </div>
                            <div class="feature-box-content mt-20px">
                                <span class="d-inline-block fw-900 h4"><?= $element["title"] ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                <? endforeach ?>
            </div>
        </div>
    </section>

    <section class="p-0 bg-orange">
        <div class="container">
            <div class="d-lg-flex py-3 py-lg-0 text-center text-lg-start justify-content-lg-between">
                <p class="h3 text-white fw-600 mt-25px">Noi siamo pronti a metterci in gioco. E tu?</p>
                <a href="<?= $pathindex ?>contatti" class="text-decoration-line-bottom d-block d-md-inline h3 text-white fw-600 mt-25px mb-25px">Contattaci ora</a>
            </div>
        </div>
    </section>

    <section class="overflow-hidden position-relative half-section">
        <div class="container">
            <div class="row align-items-start mb-5 sm-mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5 md-mb-30px">
                    <h2 class="fw-700 lh-70 mb-0">Sbircia qui i nostri lavori migliori</h2>
                </div>
                <div class="col-lg-4 offset-xl-1 last-paragraph-no-margin md-mb-30px">
                    <p>Lavorazioni tradizionali con centri di lavoro CNC e pantografi CNC, per produzioni più precise.</p>
                    <div class="mt-5">
                        <a href="<?= $pathindex ?>lavori" class="btn-esseciesse-primary">
                            <span>Vedi di più</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="outside-box-right-20 sm-outside-box-right-0">
                        <div class="swiper slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <? $labels = ["automotive", "nautico", "packaging", "alimentare"] ?>
                                <? for ($i = 0; $i < count($labels) * 2; $i++): ?>
                                    <? $imgPath= $pathindex . "assets/images/home/prodotti/prodotti-0". ($i+1) . ".jpg" ?>
                                    <? $index = $i % count($labels) ?>
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start services box style -->
                                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                            <div class="position-relative">
                                                <img src="<?= $imgPath ?>" alt="immagine-realizzazione">
                                                <span class="cursor-normal no-hover btn btn-very-small btn-rounded bg-orange-gradient text-white lh-16 position-absolute right-30px top-30px text-uppercase"><?= $labels[$index] ?></span>
                                            </div>
                                        </div>
                                        <!-- end services box style -->
                                    </div>
                                    <!-- end slider item -->
                                <? endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- ==================== Start Footer ==================== -->
    <? require_once("inc/htmlcx/footer-ita.php") ?>
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