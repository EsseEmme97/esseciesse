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
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="<?= $pathindex ?>assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $pathindex ?>assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $pathindex ?>assets/images/apple-touch-icon-114x114.png">
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
    <section class="cover-background full-screen ipad-top-space-margin py-0 md-h-750px sm-h-650px" style="background-image:url('<?= $pathindex ?>assets/images/home/header/home-header.jpg');">
        <div class="opacity-very-light bg-black"></div>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-xl-6 col-lg-8 col-md-10 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-25px text-uppercase">Lavorazioni Alluminio e leghe</h1>
                    <p class="text-white">Sperimentiamo e lavoriamo tramite macchinari ad alto taso innovativo e tecnologico</p>
                    <div class="d-flex gap-2">
                        <a href="index.html" target="blank" class="btn-esseciesse-primary">
                            <span>su di noi</span>
                        </a>
                        <a href="demo-it-business-contact.html" class="btn-esseciesse-secondary">
                            <span>contattaci</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="big-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="text-dark-gray h2 lg-fs-40 lh-60 lg-lh-60 shadow-none ls-minus-2px" data-shadow-animation="true" data-animation-delay="500">Grazie ad <span class="text-highlight">impianti di produzione ad alta tecnologia<span class="bg-dark-gray h-3px bottom-0px separator-animation"></span></span> realizziamo particolari a disegno di varie dimensioni, anche in tirature limitate, dal piccolo particolare a piastre fino a 4000*2000 mm.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 sm-pt-50px">
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
                    <h3 class="text-dark-gray fw-700 h2 ls-minus-2px">Cosa facciamo</h3>
                    <p class="mb-40px sm-mb-25px">Siamo molto attenti alle esigenze del cliente ed ai problemi del mercato: collaboriamo con altre aziende del territorio per poter fornire al cliente velocità nella consegna, particolari molto precisi e finiti, già pronti al montaggio.</p>
                    <p>Riusciamo a gestire commesse particolarmente urgenti e spediamo rapidamente in tutta Italia.</p>
                    <div class="mt-40px">
                        <a href="index.html" target="blank" class="btn-esseciesse-primary">
                            <span>su di noi</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-7 container mx-auto mt-7" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-01 md-mb-30px">
                <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <img src="<?= $pathindex ?>assets/images/icon set/punti di forza/puntualita.svg" alt="puntualità" />
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block h4 fw-700 mb-5px">Puntualità</span>
                        <p class="w-80 xl-w-90 lg-w-100">Puntualità Lorem ipsum dolor sit amet tempo</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-01 md-mb-30px">
                <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <img src="https://placehold.co/80x80" alt="" />
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Cost savings ideas</span>
                        <p class="w-80 xl-w-90 lg-w-100">We also help our clients with social media strategy.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-01 md-mb-30px">
                <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                    <div class="feature-box-icon me-20px">
                        <img src="https://placehold.co/80x80" alt="" />
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Boost performance</span>
                        <p class="w-80 xl-w-90 lg-w-100">We deliver email marketing campaigns to your audience.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </section>
    <!-- end section -->

    <!-- ==================== End Navbar ==================== -->

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