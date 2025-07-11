<?php

function setActiveLink($pages)
{
    $current_page = basename($_SERVER["SCRIPT_NAME"]);
    if (in_array($current_page, $pages)) {
        echo "attivo";
    }
}

?>

<!-- start header -->
        <header> 
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="demo-it-business.html">
                            <img src="images/demo-it-business-logo-white.png" data-at2x="images/demo-it-business-logo-white@2x.png" alt="" class="default-logo">
                            <img src="images/demo-it-business-logo-black.png" data-at2x="images/demo-it-business-logo-black@2x.png" alt="" class="alt-logo">
                            <img src="images/demo-it-business-logo-black.png" data-at2x="images/demo-it-business-logo-black@2x.png" alt="" class="mobile-logo"> 
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
                                <li class="nav-item"><a href="demo-it-business.html" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="demo-it-business-about.html" class="nav-link">Su di noi</a></li> 
                                <li class="nav-item"><a href="demo-it-business-about.html" class="nav-link">Alluminio</a></li>
                                <li class="nav-item"><a href="demo-it-business-contact.html" class="nav-link">Contatti</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                        <div class="header-icon">
                            <div class="header-button"><a href="demo-it-business-contact.html" class="btn btn-large btn-transparent-white-light btn-rounded text-transform-none border-1">Italiano</a></div>
                        </div>  
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header --> 
