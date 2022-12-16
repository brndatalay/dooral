<?php /*
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <span class="open" id="open-nav">
                <i class="fas fa-search"></i>
                <span class="after"></span>
                <span class="before"></span>
                <div class="drop-all">
                    <div class="dropdown" id="drop-nav">
                        <img src="<?= $domain ?>assets/images/door/porta.jpg" alt="">
                        <span>Hızlı Gönderim Stok Dışı Kapılar</span>
                        <a href="">Onarım</a>
                    </div>
                </div>
            </span>
            <div class="caption" data-aos="fade-right">
                <p><?= $slider[0] ?></p>
            </div>
            <img src="<?= $domain ?>assets/images/slider-1.jpg" alt=""></div>
        <div class="swiper-slide">
             <span class="open" id="open-nav">
                <i class="fas fa-search"></i>
                <span class="after"></span>
                <span class="before"></span>
                <div class="drop-all">
                    <div class="dropdown" id="drop-nav">
                        <img src="<?= $domain ?>assets/images/door/panel-aloumini.jpg" alt="">
                        <span>Hızlı Gönderim Stok Dışı Kapılar</span>
                        <a href="">onarım</a>
                    </div>
                </div>
            </span>
            <div class="caption" data-aos="fade-right">
                <p><?= $slider[1] ?></p>
            </div>
            <img src="<?= $domain ?>assets/images/slider-2.jpg" alt=""></div>
        <div class="swiper-slide">
            <span class="open" id="open-nav">
                <i class="fas fa-search"></i>
                <span class="after"></span>
                <span class="before"></span>
                <div class="drop-all">
                    <div class="dropdown" id="drop-nav">
                        <img src="<?= $domain ?>assets/images/door/sita-noshawsmall.jpg" alt="">
                        <span>Hızlı Gönderim Stok Dışı Kapılar</span>
                        <a href="">onarım</a>
                    </div>
                </div>
            </span>
            <div class="caption" data-aos="fade-right">
                <p><?= $slider[2] ?></p>
            </div>
            <img src="<?= $domain ?>assets/images/slider-3.jpg" alt=""></div>
    </div>
</div>
 */?>
<div class="slider">
    <div class="owl-carousel owl-theme main-slider">
        <div class="item">
            <img src="<?= $domain ?>assets/images/slider-1.jpeg" alt="">
            <div class="caption" data-animation-in="fadeInLeft">
                <h3 class="animated bounce"><?= $slider[0] ?></h3></div>
        </div>
        <div class="item">
            <img src="<?= $domain ?>assets/images/slider-2.jpeg" alt="">
            <div class="caption" data-animation-in="fadeInLeft">
                <h3 class=""><?= $slider[1] ?></h3></div>
        </div>
        <div class="item">
            <img src="<?= $domain ?>assets/images/slider-3.jpeg" alt="">
            <div class="caption" data-animation-in="fadeInLeft">
                <h3 class=""><?= $slider[2] ?></h3></div>
        </div>        <div class="item">
            <img src="<?= $domain ?>assets/images/slider-4.jpeg" alt="">
            <div class="caption" data-animation-in="fadeInLeft">
                <h3 class=""><?= $slider[3] ?></h3></div>
        </div>
    </div>
</div>
<!-- End Carousel -->
<div id='monitor'>
</div>
<div class="inner">
    <div class="wrapper">
        <h1><?= $default[0] ?></h1>
        <p><?= $default[1] ?>
        </p>
    </div>
</div>
<div class="default-door">
    <div class="wrapper">
        <a href="<?= $domain ?>products-without" class="box">
            <span><?= $default[2] ?></span>
            <img class="first" data-aos="zoom-out" src="<?= $domain ?>assets/images/doors/small/DO-001A-1.jpg" alt="">
            <img src="<?= $domain ?>assets/images/doors/small/DO-001A-2.jpg" alt="">
        </a>
        <a href="<?= $domain ?>products-single" class="box">
            <span><?= $default[3] ?></span>
            <img class="first" data-aos="zoom-out" src="<?= $domain ?>assets/images/doors/small/DO-001B-1.jpg" alt="">
            <img src="<?= $domain ?>assets/images/doors/small/DO-001B-2.jpg" alt="">
        </a>
        <a href="<?= $domain ?>products-double" class="box">
            <span><?= $default[4] ?></span>
            <img class="first" data-aos="zoom-out" src="<?= $domain ?>assets/images/doors/small/DO-001C-1.jpg" alt="">
            <img src="<?= $domain ?>assets/images/doors/small/DO-001C-2.jpg" alt="">
        </a>
    </div>
</div>
<div class="wrapper">
    <div class="porta-main">
        <div class="text">
            <h3><?= $default[5] ?></h3>
            <p><?= $default[6] ?></p>
        </div>
        <img data-aos="slide-up" src="<?= $domain ?>assets/images/portes-main.png">
        <div class="text">
            <h3><?= $default[7] ?></h3>
            <p><?= $default[8] ?></p>
        </div>
    </div>
</div>
<div class="inner">
    <div class="wrapper">
        <h2 style="margin-bottom: 0; !important;"><?= $doors[0] ?></h2>
    </div>
</div>
<div class="door-colors">
    <h2><?= $doors[1] ?></h2>
    <div class="wrapper">
        <div class="color">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/doors/colors/color-1.png">
        </div>
        <div class="color">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/doors/colors/color-2.png">
        </div>
    </div>
    <h2><?= $doors[2] ?></h2>
    <div class="color wrapper">
        <img data-aos="slide-up" src="<?= $domain ?>assets/images/doors/colors/color-3.png">
        <p><?= $doors[3] ?></p>
    </div>
</div>
<div class="door-glass">
    <h2><?= $doors[4] ?></h2>
    <div class="wrapper">
        <a href="<?= $domain ?>assets/images/glass/1.jpg" data-fancybox="group" data-caption="door-glass">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/glass/1.jpg">
        </a>
        <a href="<?= $domain ?>assets/images/glass/2.jpg" data-fancybox="group" data-caption="door-glass">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/glass/2.jpg">
        </a>
        <a href="<?= $domain ?>assets/images/glass/3.jpg" data-fancybox="group" data-caption="door-glass">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/glass/3.jpg">
        </a>
        <a href="<?= $domain ?>assets/images/glass/4.jpg" data-fancybox="group" data-caption="door-glass">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/glass/4.jpg">
        </a>
        <a href="<?= $domain ?>assets/images/glass/5.jpg" data-fancybox="group" data-caption="door-glass">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/glass/5.jpg">
        </a>
        <a href="<?= $domain ?>assets/images/glass/6.jpg" data-fancybox="group" data-caption="door-glass">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/glass/6.jpg">
        </a>
    </div>
</div>
<div class="default-img">
    <div class="wrapper">
        <div class="left" data-aos="fade-right">
            <img src="<?= $domain ?>assets/images/default.png">
        </div>
        <div class="right" data-aos="fade-left">
            <h3><?= $default[9] ?></h3>
            <hr>
            <p><?= $default[10] ?></p>
            <ul>
                <li><?= $default[11] ?></li>
                <li><?= $default[12] ?></li>
                <li><?= $default[13] ?></li>
                <li><?= $default[14] ?></li>
                <li><?= $default[15] ?></li>
                <li><?= $default[16] ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="inner">
    <div class="wrapper">
        <h2 style="margin-bottom: 0; !important;"><?= $question[0] ?></h2>
    </div>
</div>
<div class="wrapper accordion-flex">
    <div class="accordionboxs">
        <div class="accordioninner">
            <p><?= $question[1] ?></p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="accordiontext">
            <p><?= $question[2] ?></p>
        </div>
    </div>
    <div class="accordionboxs">
        <div class="accordioninner">
            <p><?= $question[3] ?></p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="accordiontext">
            <p><?= $question[4] ?></p>
        </div>
    </div>
    <div class="accordionboxs">
        <div class="accordioninner">
            <p><?= $question[5] ?></p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="accordiontext">
            <p><?= $question[6] ?></p>
        </div>
    </div>
    <div class="accordionboxs">
        <div class="accordioninner">
            <p><?= $question[7] ?></p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="accordiontext">
            <p><?= $question[8] ?></p>
        </div>
    </div>
    <div class="accordionboxs">
        <div class="accordioninner">
            <p><?= $question[9] ?></p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="accordiontext">
            <p><?= $question[10] ?></p>
        </div>
    </div>
    <div class="accordionboxs">
        <div class="accordioninner">
            <p><?= $question[11] ?></p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="accordiontext">
            <p><?= $question[12] ?></p>
        </div>
    </div>
</div>
