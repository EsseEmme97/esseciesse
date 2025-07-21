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
            <h1 class="text-center text-uppercase">su di noi</h1>
        </div>
    </section>
    <!-- ==================== End navbar ==================== -->
    <section class="position-relative">
        <div class="container">
            <div class="row row-cols-md-1 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <div class="col-xxl-4 col-xl-5 col-lg-5 md-mb-30px d-flex flex-column">
                    <h3 class="fw-700 ls-minus-1px text-dark-gray w-85 xl-w-90 md-w-100 mb-15px">We'd love to hear from you.</h3>
                    <p class="w-85 xl-w-90 xs-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing finibus a purus at fermentum. Praesent vitae quam sed dui.</p>
                    <div class="icon-with-text-style-01 feature-box feature-box-left-icon-middle last-paragraph-no-margin mt-auto">
                        <div class="feature-box-icon me-15px">
                            <img src="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" alt="logo image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-xxl-1">
                    <!-- start contact form -->
                    <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
                        <div class="row justify-content-center">
                            <div class="col-md-6 xs-mb-30px">
                                <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Enter your name*</label>
                                <div class="position-relative form-group mb-25px xs-mb-0">
                                    <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name?" />
                                </div>
                            </div>
                            <div class="col-md-6 xs-mb-30px">
                                <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Phone number</label>
                                <div class="position-relative form-group mb-25px xs-mb-0">
                                    <span class="form-icon"><i class="bi bi-telephone text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" id="exampleInputEmail2" type="tel" name="phone" placeholder="Enter your phone number" />
                                </div>
                            </div>
                            <div class="col-md-6 xs-mb-30px">
                                <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Email address*</label>
                                <div class="position-relative form-group mb-25px xs-mb-0">
                                    <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail3" type="email" name="email" placeholder="Enter your email address" />
                                </div>
                            </div>
                            <div class="col-md-6 xs-mb-30px">
                                <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Subject</label>
                                <div class="position-relative form-group mb-25px xs-mb-0">
                                    <span class="form-icon"><i class="bi bi-journals text-dark-gray"></i></span>
                                    <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" id="exampleInputEmail4" type="text" name="subject" placeholder="How can we help you?" />
                                </div>
                            </div>
                            <div class="col-12 mb-4 xs-mb-30px">
                                <label for="exampleInputEmail1" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">Your message</label>
                                <div class="position-relative form-group form-textarea mb-0">
                                    <textarea class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="comment" placeholder="Describe about your project" rows="4"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-7 col-sm-10">
                                <p class="mb-0 fs-14 lh-24 text-center text-md-start">We will never collect information about you without your explicit consent.</p>
                            </div>
                            <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-25px">
                                <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                                <button class="btn-esseciesse-primary no-border" type="submit"><span>Send message</span></button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0 lh-0">
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
</body>

</html>