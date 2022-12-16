<div class="modal">
    <div class="modal-content">
        <p>Dooral<br>
            <c><?= $modal[0] ?></c>
        </p>
        <span class="close-button">×</span>
        <div class="form-box">
            <form action="" method="post" class="email-form">
                <div class="input">
                    <input type="text" name="name" placeholder="<?= $modal[1] ?>" required>
                    <input type="text" name="email" placeholder="<?= $modal[2] ?>" required>
                    <input type="text" name="phone" placeholder="<?= $modal[3] ?>" required>
                    <div class="form-group">
                        <select id="count">
                            <option name="text" value="" disabled="disabled" selected>-- <?= $modal[4] ?> --
                            </option>
                            <option name="text" value="DEUTSCH">DEUTSCH</option>
                            <option name="text" value="ENGLISH">ENGLISH</option>
                            <option name="text" value="FRENCH">FRENCH</option>
                            <option name="text" value="ITALIAN">ITALIAN</option>
                        </select>
                    </div>
                    <textarea type="text" name="note" placeholder="<?= $modal[5] ?>"></textarea>
                    <input type="hidden" id="product_id" name="product_id" value="<?= $url[2] ?>">
                </div>
                <div class="button-row">
                    <button class="button" name="submit" id="submit"><?= $modal[6] ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="wrapper">
        <div class="social">
            <a href="<?= $domain ?>" class="logo">
                <img src="<?= $domain ?>assets/images/logo-white.png" alt="">
            </a>
            <div class="inner-footer">
                <a class="soc" href="#"><i class="fab fa-facebook"></i></a>
                <a class="soc" href="#"><i class="fab fa-instagram"></i></a>
                <a class="soc" href="#"><i class="fab fa-twitter"></i></a>
                <a class="soc" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="about-footer">
            <span><?= $footer[0] ?> <a href="">Sırma Caddesi No:30/1 Altındağ Ankara Türkiye</a></span>
            <span><?= $footer[1] ?> <a href="tel:03123481200">0312 348 12 00</a></span>
            <span><?= $footer[2] ?> <a href="mailto:info@dooral.com.tr">info@dooral.com.tr</a></span>
        </div>
        <div class="menu">
            <ul>
                <li class="<?= $menu_active['about'] ?>"><a href="<?= $domain ?>about"><?= $menu[0] ?></a></li>
                <li class="<?= $menu_active['products'] ?>"><a href="<?= $domain ?>products-without"><?= $menu[1] ?></a>
                </li>
                <li class="<?= $menu_active['series'] ?>"><a href="<?= $domain ?>series"><?= $menu[5] ?></a></li>
                <li class="<?= $menu_active['production'] ?>"><a href="<?= $domain ?>production"><?= $menu[6] ?></a>
                </li>
                <li class="<?= $menu_active['contact'] ?>"><a href="<?= $domain ?>contact"><?= $menu[7] ?></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <p><a href="<?= $domain ?>">Dooral © </a> <?= date("Y") ?> <?= $footer[3] ?></p>
    <div class="logo">
        <a href="https://london.com.tr/"><img src="<?= $domain ?>assets/images/london.png"></a>
    </div>
</div>
<div class="mobil-social">
    <a href="" class="wp">
        <i class="fab fa-whatsapp"></i>
        Whatsapp
    </a>
    <a href="" class="phone">
        <i class="fas fa-phone-alt"></i>
        <?= $footer[1] ?>
    </a>
</div>
<?php
if ($_SESSION['lang'] == "tr") {
    ?>
    <div class="support">
        <a href="https://wa.me/905337715144?text=Merhaba" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <p><?= $footer[4] ?></p>
        </a>
        <a href="tel:312666">
            <i class="fas fa-phone-alt"></i>
            <p><?= $footer[5] ?></p>
        </a>
    </div>

    <?php
}

if($_SESSION['lang'] == "en") {
    ?>
    <div class="support en">
        <a href="https://wa.me/905337715144?text=Merhaba" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <p><?= $footer[4] ?></p>
        </a>
        <a href="tel:312666">
            <i class="fas fa-phone-alt"></i>
            <p><?= $footer[5] ?></p>
        </a>
    </div>
<?php
}
?>

<?php

if ($url[1] == "default" || $url[1] == " ") {
    $textColor = "white";
} else {
    $textColor = "#313131";
}
?>
<input type="hidden" id="textColor" value="<?= $textColor ?>">


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/jquery.lazy.min.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/fancybox/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/scripts.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/lang.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/aos.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/flickity.pkgd.js"></script>
<script type="text/javascript" src="<?= $domain ?>assets/js/swiper-bundle.min.js"></script>
<script>
    AOS.init();

    var swiper = new Swiper(".mySwiper", {});
    //       // ACCORDION //          //
    $(".accordionboxs:eq(0)").addClass("");
    $(".accordiontext:eq(0)success").show();
    $(".accordionboxs").click(function () {
        $(".accordionboxs").removeClass("");
        var index = $(this).index();
        $(".accordionboxs:eq(" + index + ")").addClass("");
        $(".accordiontext:eq(" + index + ")").toggle(200);
    });
    //      // MODAL //        //
    $(document).on('click', function (e) {
        if ($(".modal").hasClass("show-modal") === true && $(e.target).closest(".modal-content").length === 0 && $(e.target).closest(".trigger").length === 0) {
            $(".modal").removeClass("show-modal");
        }
    });
    $(".trigger").click(function () {
        $(".modal").toggleClass("show-modal");
    });

    $(".close-button").click(function () {
        $(".modal").removeClass("show-modal");

    });
    $('#toggle').click(function () {
        if ($("#overlay").hasClass("open")) {
            $('body').css('overflow', 'auto');
        } else {
            $('body').css('overflow', 'hidden')
        }
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });
    /* owl-carousel */
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3500,
            nav: true,
        })
    });
    $(document).ready(function () {
        var owl = $('.owl-carousel');

        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3500,
            nav: true,
            margin: 10,
        });

        // add animate.css class(es) to the elements to be animated
        function setAnimation(_elem, _InOut) {
            // Store all animationend event name in a string.
            // cf animate.css documentation
            var animationEndEvent =
                "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
            _elem.each(function () {
                var $elem = $(this);
                var $animationType = "animated " + $elem.data("animation-" + _InOut);
                $elem.addClass($animationType).one(animationEndEvent, function () {
                    $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                });
            });
        }

        owl.on("change.owl.carousel", function (event) {
            var $currentItem = $(".owl-item", owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation($elemsToanim, "out");
        });
        var round = 0;
        owl.on("changed.owl.carousel", function (event) {
            var $currentItem = $(".owl-item", owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation($elemsToanim, "in");
        });

    });
</script>
</body>
</html>
