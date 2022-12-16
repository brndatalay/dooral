<div class="page-header">
    <div class="wrapper right">
        <span data-aos="fade-down">Dooral</span>
        <span data-aos="fade-up"><?= $menu[7] ?></span>
    </div>
</div>
<div class="contact">
    <div class="wrapper">
        <div class="left">
            <div class="boxes">
                <div class="up">
                    <a href="#" data-aos="fade-right">
                        <div class="a-left">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="a-right">
                            <p><?= $footer[0] ?></p>
                            <p>Sırma Caddesi No:30/1<br> Altındağ Ankara Türkiye</p>
                        </div>
                    </a>
                    <a href="tel:03123481200" data-aos="fade-left">
                        <div class="a-left">
                            <i class="fas fa-mobile"></i>
                        </div>
                        <div class="a-right">
                            <p><?= $footer[1] ?></p>
                            <p>0 312 348 12 00</p>
                        </div>
                    </a>
                </div>
                <div class="down">
                    <a href="mailto:info@dooral.com" data-aos="fade-right">
                        <div class="a-left">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="a-right">
                            <p><?= $footer[2] ?></p>
                            <p>info@dooral.com.tr</p>
                        </div>
                    </a>
                    <a href="#" data-aos="fade-left">
                        <div class="a-left">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="a-right">
                            <p><?= $footer[6] ?></p>
                            <p>10:00 - 18:45</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="form-box">
                <form action="" method="post" class="email-form">
                    <div class="input">
                        <input type="text" name="name" placeholder="<?= $modal[1] ?>" required>
                        <input type="text" name="email" placeholder="<?= $modal[2] ?>" required>
                        <input type="text" name="phone" placeholder="<?= $modal[3] ?>" required>
                        <input type="text" name="note" placeholder="<?= $modal[5] ?>" required>
                    </div>
                    <div class="row">
                        <label class="custom-checkbox">
                            <input type="checkbox" required="">
                            <?= $contact[0] ?>
                            <div class="checkmark"></div>
                        </label>
                        <label class="custom-checkbox">
                            <input type="checkbox" required="">
                            <?= $contact[1] ?>
                            <div class="checkmark"></div>
                        </label>
                    </div>
                    <div class="button-row">
                        <button class="button" name="submit" id="submit"><?= $modal[6] ?></button>
                    </div>
                </form>
            </div>
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
<div id="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.0613828469245!2d32.8909011!3d39.96238030000001!2m3!1f0!2f0!3f0!3m2!1i102
    4!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd73c0053c77c7ad!2zMznCsDU3JzQ0LjYiTiAzMsKwNTMnMjcuMiJF!5e0!3m2!1str!2str!4v1667824866282!5m2!1str!2str"
           style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>