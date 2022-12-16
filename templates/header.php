<?php
$menu_active[$url[1]] = ' current';
$dropdown[$url[1]] = 'current';
if($url[1]=="default" || $url[1]==""){
    $header= ' current';
}else{
    $header= '';
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= $domain ?>assets/css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= $domain ?>assets/js/ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= $domain ?>assets/js/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $domain ?>assets/js/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= $domain ?>assets/js/fancybox/jquery.fancybox.min.css">
    <link href="<?= $domain ?>assets/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?= $domain ?>assets/css/aos.css" rel="stylesheet" type="text/css">
    <link href="<?= $domain ?>assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?= $domain ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?= $domain ?>assets/images/fav.png" type="image/png"/>
</head>
<body>
<div class="header<?= $header ?>">
    <a href="<?= $domain ?>" class="logo">
        <img src="<?= $domain ?>assets/images/logo.png" alt="">
        <img src="<?= $domain ?>assets/images/logo-white.png" alt="">
    </a>
    <div class="down">
        <div class="top-menu">
            <div class="social">
                <a class="soc" href="#"><i class="fab fa-facebook"></i></a>
                <a class="soc" href="#"><i class="fab fa-instagram"></i></a>
                <a class="soc" href="#"><i class="fab fa-twitter"></i></a>
                <a class="soc" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <ul>
                <li class="<?= $menu_active['contact'] ?>"><a href="tel:03123481200">0 312 348 12 00</a></li>
                <li class="<?= $menu_active['contact'] ?>"><a href="mailto:info@dooral.com">ınfo@dooral.com</a></li>
            </ul>
        </div>
        <div class="menu">
            <ul>
                <li class="<?= $menu_active['about'] ?>"><a href="<?= $domain ?>about"><?= $menu[0] ?></a></li>
                <li class="drop<?= $menu_active['products'] ?>"><a href="<?= $domain ?>products-without"><?= $menu[1] ?></a>
                    <div class="dropdown">
                        <a class="<?= $dropdown['products-without'] ?>" href="<?= $domain ?>products-without"><img src="<?= $domain ?>assets/images/door-bt-1.png" alt=""><?= $menu[2] ?></a>
                        <a class="<?= $dropdown['products-single'] ?>" href="<?= $domain ?>products-single"><img src="<?= $domain ?>assets/images/door-bt-2.png" alt=""><?= $menu[3] ?></a>
                        <a class="<?= $dropdown['products-double'] ?>" href="<?= $domain ?>products-double"><img src="<?= $domain ?>assets/images/door-bt-3.png" alt=""><?= $menu[4] ?></a>
                    </div>
                </li>
                <li class="<?= $menu_active['series'] ?>"><a href="<?= $domain ?>series"><?= $menu[5] ?></a></li>
                <li class="<?= $menu_active['production'] ?>"><a href="<?= $domain ?>production"><?= $menu[6] ?></a></li>
                <li class="<?= $menu_active['contact'] ?>"><a href="<?= $domain ?>contact"><?= $menu[7] ?></a></li>
                <div class="dropdown">
                    <div class="dropbtn">
                        <img class="first" src="<?= $domain ?>assets/images/lang/<?= $_SESSION['lang'] ?>.png" alt="">
                            <p><?= $lang['dil'] ?></p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="<?= $domain ?>lang/en"><img src="<?= $domain ?>assets/images/lang/en.png" alt=""><p>Englısh</p></a>
                        <a href="<?= $domain ?>lang/tr"><img src="<?= $domain ?>assets/images/lang/tr.png" alt=""><p>Türkçe</p></a>
                        <a href="<?= $domain ?>lang/de"><img src="<?= $domain ?>assets/images/lang/de.png" alt=""><p>Deutsch</p></a>
                        <a href="<?= $domain ?>lang/ru"><img src="<?= $domain ?>assets/images/lang/ru.png" alt=""><p>Русский</p></a>
                    </div>
                </div>

                <li class="offer trigger"><a><?= $menu[8] ?></a></li>
            </ul>
        </div>
    </div>
    <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
                <li class="<?= $menu_active['about'] ?>"><a href="<?= $domain ?>about"><?= $menu[0] ?></a></li>
                <li class="drop<?= $menu_active['products'] ?>"><a href="<?= $domain ?>products-without"><?= $menu[1] ?></a></li>
                <li class="<?= $menu_active['series'] ?>"><a href="<?= $domain ?>series"><?= $menu[5] ?></a></li>
                <li class="<?= $menu_active['production'] ?>"><a href="<?= $domain ?>production"><?= $menu[6] ?></a></li>
                <li class="<?= $menu_active['contact'] ?>"><a href="<?= $domain ?>contact"><?= $menu[7] ?></a></li>
                <li class="offer trigger"><a><?= $menu[8] ?></a></li>
            </ul>
        </nav>
        <div class="dropdown-content">
            <a href="<?= $domain ?>lang/en"><img src="<?= $domain ?>assets/images/lang/en.png" alt=""><p></p></a>
            <a href="<?= $domain ?>lang/tr"><img src="<?= $domain ?>assets/images/lang/tr.png" alt=""><p></p></a>
            <a href="<?= $domain ?>lang/de"><img src="<?= $domain ?>assets/images/lang/de.png" alt=""><p></p></a>
            <a href="<?= $domain ?>lang/ru"><img src="<?= $domain ?>assets/images/lang/ru.png" alt=""><p></p></a>
        </div>
    </div>
</div>