<?php

function setActiveLink($pages)
{
    $current_page = basename($_SERVER["SCRIPT_NAME"]);
    if (in_array($current_page, $pages)) {
        echo "text-orange";
    }
}

?>

<!-- start header -->
<header>

    <!-- start topbar -->
    <div class="bg-white">
        <div class="container-fluid">
            <div class="col-auto d-flex justify-content-between px-15px fs-14px">
                <span>Via dell'artigianato 75 - Torrebelvicino</span>
                <span>+39 0445 827253 - M. info@esseciesseitalia.it</span>
            </div>
        </div>
    </div>
    <!-- end topbar -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="<?= $pathindex ?>">
                    <img src="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" data-at2x="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" alt="logo" class="default-logo">
                    <img src="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" data-at2x="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" alt="logo" class="alt-logo">
                    <img src="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" data-at2x="<?= $pathindex ?>assets\images\global\logo\SCS-logo.svg" alt="logo" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto col-xxl-6 col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="<?= $pathindex ?>" class="nav-link <?= setActiveLink(["index.php"]) ?>">Home</a></li>
                        <li class="nav-item"><a href="<?= $pathindex ?>azienda" class="nav-link <?= setActiveLink(["azienda.php"]) ?>">Su di noi</a></li>
                        <li class="nav-item"><a href="<?= $pathindex ?>alluminio" class="nav-link <?= setActiveLink(["singolo-prodotto.php"]) ?>">Alluminio</a></li>
                        <li class="nav-item"><a href="<?= $pathindex ?>lavori" class="nav-link <?= setActiveLink(["realizzazioni.php"]) ?>">Lavori</a></li>
                        <li class="nav-item"><a href="<?= $pathindex ?>contatti" class="nav-link <?= setActiveLink(["contatti.php"]) ?>">Contatti</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                <div class="header-icon">
                    <div class="header-button"><a href="demo-it-business-contact.html" class="btn btn-large btn-outline-orange btn-rounded text-transform-none border-1">Italiano</a></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->