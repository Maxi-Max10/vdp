<?php

session_start();
if (isset($_SESSION['lang'])) {
    $idioma = $_SESSION['lang'];
}else{
    $idioma = 'en';
}

$archivo = file_exists("languages/$idioma.json")?
                        "languages/$idioma.json":
                        "languages/en.json";

$contenido = file_get_contents($archivo);
$palabras = json_decode($contenido, true);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.8.14, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="facebook-domain-verification" content="1tpv9k4lc2sfpn8jrdrwvzccobkfxb" />
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <title>Vivacs del Plata | <?php print $campo ?></title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirse-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/parallax/jarallax.css">
    <link rel="stylesheet" href="assets/animatecss/animate.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <!--<link rel="stylesheet" href="assets/styleju/stylej.css">-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/page7.css">
    <link rel="stylesheet" href="assets/css/page4.css">
    <link rel="stylesheet" href="assets/css/page6.css">
    <link rel="stylesheet" href="assets/css/page8.css">
    <link rel="stylesheet" href="assets/fonts/Roboto-Medium/style.css">
    <link rel="stylesheet" href="assets/fonts/Roboto-Bold/style.css">
    <link href="assets/fonts/style.css" rel="stylesheet">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/page8.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="index-2.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/page6.css">
</head>

<body>
    <section data-bs-version="5.1" class="menu menu2 cid-tL7nLROMV3" once="menu" id="menu2-1c">

        <nav id="nav" class="navbar navbar-dropdown nav-height navbar-fixed-top collapsed" style="">
            <div class="container" >
                <div class="col-auto me-auto mt-5 mb-0">
                    <span class="navbar-logo">
                        <a href="mountain-resort-farmstay">
                            <img id="img-logo" class="" src="assets/images/vdp-isologotipo-final-10-298x298.png" alt="" style="height: 5rem; z-index: 3;">
                        </a>
                    </span>
                </div>
                <ul class="nav col-auto mb-2 justify-content-center mb-md-0 col-1-margin"  id="flags">
                    <li id="closeLi" class="nav-item hidden responsive-nav"><a id="close" class="nav-link padding-x link-light tes text-nav"data-section="nav" data-value="cerrar"><?php echo $palabras ['nav']['cerrar']; ?></a></li>
                    <!--
                        <li id="li1" class="nav-item flags responsive-nav es" ><a id="tes-1" data-language="es" class="nav-link padding-x link-light tes text-nav flags__item" >ES</a></li>
                    <li id="separator" class="nav-link padding-x link-light tes text-nav responsive-nav separator-top" style="top: -6px;">|</li>
                    <li id="li2" class="nav-item flags responsive-nav en"><a id="tes-2" data-language="en"  class="nav-link padding-x link-light tes text-nav flags__item">EN</a></li>
                    -->
                    <li id="li1" class="nav-item flags responsive-na " ><a href="lang.php?l=es" id="tes-1"  class="nav-link padding-x link-light tes text-nav" >ES</a></li>
                    <li id="separator" class="nav-link padding-x link-light tes text-nav responsive-nav separator-top" style="top: -6px;">|</li>
                    <li id="li2" class="nav-item flags responsive-nav"><a href="lang.php?l=en" id="tes-2"  class="nav-link padding-x link-light tes text-nav">EN</a></li>

                    <li id="li3" class="nav-item responsive-nav cont"><a id="tes-3" href="contact-us" class="nav-link padding-x link-light tes text-nav" data-section="nav" data-value="CONTACTMAY"><?php echo $palabras ['nav']['CONTACTMAY']; ?></a></li>
                    <li class="ms-2 responsive-nav burger-negative"> <button id="burger" class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="hamburger">
                                <span id="burger-1" class="tes-2"></span>
                                <span id="burger-2" class="tes-2"></span>
                                <span id="burger-3" class="tes-2"></span>
                                <span id="burger-4" class="tes-2"></span>
                            </div>
                        </button>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" aria-labelledby="navbarSupportedContent" >
                    <div class="navbar-nav nav-dropdown" data-app-modern-menu="true">

                        <div class="fade-slide-down row fuente-Vidaloka fs-2 fw-normal justify-content-around mt-3 mt-sm-5" data-app-modern-menu="true">
                            <div class="col-12 col-sm-7 col-1-padding">
                                <ul class="no-bullets dropdown-transition ul-1-padding">
                                    <li id="nav-href-1" class="fs-3 fs-sm-1 dropdown-transition vidaloka-nav  menu-vidaloka"><a href="our-story" style="line-height: 2"  class="text-decoration-none link-light" data-section="nav" data-value="ourStory"><?php echo $palabras ['nav']['ourStory']; ?></a></li>
                                    <li id="nav-href-2" class="fs-3 fs-sm-1 dropdown-transition  menu-vidaloka"><a href="all-inclusive-experience" style="line-height: 2" class="text-decoration-none link-light all-inclusive vidaloka-nav"data-section="nav" data-value="allInclusive"><?php echo $palabras ['nav']['allInclusive']; ?></a></li>
                                    <li id="nav-href-3" class="fs-3 fs-sm-1 dropdown-transition  menu-vidaloka"><a href="getting-here" style="line-height: 2" class="text-decoration-none link-light vidaloka-nav"data-section="nav" data-value="gettinghere"><?php echo $palabras ['nav']['gettinghere']; ?></a>
                                    </li>
                                    <li id="nav-href-4" class="fs-3 fs-sm-1 dropdown-transition menu-vidaloka"><a href="trip-enhancements" style="line-height: 2"  class="text-decoration-none link-light vidaloka-nav "data-section="nav" data-value="tripEnhancements"><?php echo $palabras ['nav']['tripEnhancements']; ?></a></li>
                                </ul>
                            </div>

                            <div class="col-12 col-sm-5 col-2-padding">
                                <ul class="list-unstyled dropdown-transition ul-2-padding">
                                    <li id="nav-href-5" class="fs-3 fs-sm-1 dropdown-transition menu-vidaloka"><a href="gallery" style="line-height: 2"  class="text-decoration-none link-light vidaloka-nav" data-section="nav" data-value="gallery"><?php echo $palabras ['nav']['gallery']; ?></a></li>
                                    <li id="nav-href-6" class="fs-3 fs-sm-1 dropdown-transition menu-vidaloka"><a href="fac" style="line-height: 2"  class="text-decoration-none link-light vidaloka-nav" data-section="nav" data-value="FAC"><?php echo $palabras ['nav']['FAC']; ?></a></li>
                                    <li id="nav-href-7" class="fs-3 fs-sm-1 dropdown-transition menu-vidaloka"><a href="contact-us" style=""  class="text-decoration-none link-light vidaloka-nav" data-section="nav" data-value="contact"><?php echo $palabras ['nav']['contact']; ?></a></li>
                                </ul>
                                <div id="nav-href-8" class="social-row display-5 nav col-md-5 justify-content-start ">
                                    <div class="soc-item ms-2 icon-index2">
                                        <a href="" target="_blank">
                                            <span class="mbr-iconfont socicon socicon-whatsapp icon-wsp" style="color: rgb(250, 250, 250); fill: rgb(250, 250, 250);font-size: 12pt"></span>
                                        </a>
                                    </div>
                                    <div class="soc-item ms-2 icon-index">
                                        <a href="https://api.whatsapp.com/send/?phone=2616316497&text&type=phone_number&app_absent=0" target="_blank">
                                            <img src="assets/img/icons/icon1.svg" class="icon-svg" alt="trip_icon">
                                        </a>
                                    </div>
                                    <div class="soc-item ms-2 icon-index2">
                                        <a href="https://instagram.com/vivacsdelplata?igshid= MZRLODBINWFIZA==" target="_blank">
                                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon icon-ig" style="color: rgb(250, 250, 250); fill: rgb(250, 250, 250);font-size: 12pt"></span>
                                        </a>
                                    </div>
                                    <div class="soc-item ms-2 icon-index">
                                        <a href="https://maps.app.goo.gl/YZDKpfVicwxZ4hYp6" target="_blank">
                                            <img src="assets/img/icons/icon2.svg" class="icon-svg2" alt="location">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- EndMenu -->
            </div>

        </nav>
    </section>