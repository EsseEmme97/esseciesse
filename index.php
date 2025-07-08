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
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex w-70 sm-w-100"><i class="bi bi-megaphone text-white icon-small me-10px"></i>Grow your business with us</span>
                        <h1 class="text-white fw-600 ls-minus-2px mb-25px">We craft unique business ideas.</h1> 
                        <div><p class="fw-300 fs-18 w-85 sm-w-95 text-white opacity-6">We're a fully dedicated corporate service agency collaborating with brands all over the world.</p></div>
                        <a href="index.html" target="blank" class="btn-esseciesse-primary">
                           <span>su di noi</span>
                        </a>
                        <a href="demo-it-business-contact.html" class="btn btn-extra-large btn-switch-text btn-transparent-white-light btn-rounded border-1 ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="Contact us">Contact us</span>
                                <span><i class="fa-regular fa-envelope"></i></span>
                            </span>
                        </a>
                    </div>  
                </div> 
            </div>
        </section>

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