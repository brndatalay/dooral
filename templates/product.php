<?php
$prdouctID = $url[2];

$prdouct = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM product where id=$prdouctID"));
$prdouct_type= mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM product_type where id={$prdouct["type"]}"));
$productİmage = json_decode($prdouct["image"], true);
?>

<di1v class="page-header">
    <div class="wrapper right">
        <span data-aos="fade-down">Dooral</span>
        <span data-aos="fade-up"><?= $prdouct["name"] ?></span>
    </div>
</di1v>
<div class="product wrapper">
    <div class="left">
        <div class="container carousel-all">
            <div class="carousel carousel-main" data-flickity='{"pageDots": false }'>
                <div class="carousel-cell">
                    <a href="<?= $domain ?>assets/images/doors/big/<?= $productİmage[0] ?>" data-fancybox="group" data-caption="door">
                        <img src="<?= $domain ?>assets/images/doors/small/<?= $productİmage[0] ?>"/>
                    </a>
                </div>
                <div class="carousel-cell">
                    <a href="<?= $domain ?>assets/images/doors/big/<?= $productİmage[1] ?>" data-fancybox="group" data-caption="door">
                        <img src="<?= $domain ?>assets/images/doors/small/<?= $productİmage[1] ?>"/>
                    </a>
                </div>
            </div>
            <div class="carousel carousel-nav"
                 data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                <div class="carousel-cell"><img src="<?= $domain ?>assets/images/doors/small/<?= $productİmage[0] ?>"/>
                </div>
                <div class="carousel-cell"><img src="<?= $domain ?>assets/images/doors/small/<?= $productİmage[1] ?>"/>
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <div class="right">
        <h3>DOORS <b><?= $prdouct["name"] ?></b></h3>
        <hr>
        <p><?= $product[0] ?></p>
        <table>
            <tr style="background: #eee;">
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><?= $product[3] ?></td>
                <td><?= $product[4] ?></td>
                <td><?= $product[5] ?></td>
            </tr>
            <tr>
                <td><?= $prdouct["name"] ?></td>
                <td><?php
                    if($_SESSION["lang"]=="en"){
                        if($prdouct_type["tasarim_adi"]=="Tek Kanat")
                            echo "SINGLE WING";
                        if($prdouct_type["tasarim_adi"]=="Tek Yönde Cam")
                            echo "ONE-DIRECTION WINDOWS";
                        if($prdouct_type["tasarim_adi"]=="Çift Yönde Cam")
                            echo "DOUBLE-DIRECTION WINDOWS";
                    }else if($_SESSION["lang"]=="de"){

                    }else{
                        echo $prdouct_type["tasarim_adi"];
                    }

                    $prdouct_type["tasarim_adi"]

                    ?></td>
                <td><?=$prdouct_type["boyut"]?></td>
                <td><?= $product[11] ?></td>
                <td><?= $product[12] ?></td>
            </tr>
        </table>
        <div class="cont">
            <a class="trigger"><?= $product[6] ?></a>
            <a href="mailto:info@dooral.com" class="mail"><?= $product[7] ?></a>
        </div>
        <div class="gif">
            <img src="<?= $domain ?>assets/images/model.gif"/>
        </div>
    </div>
</div>
<div class="default-door">
    <div class="wrapper">
        <?php
        $prdouctDoors = mysqli_fetch_all(mysqli_query($db, "SELECT * FROM product where door={$prdouct["door"]}"), MYSQLI_ASSOC);
        foreach ($prdouctDoors as $value) {
            $image = json_decode($value["image"], true);
            ?>
            <a href="<?= $domain ?>product/<?= $value["id"] ?>" class="box">
                <p class="text-1"><?= $default[2] ?></p>
                <p class="text-2"><?= $default[3] ?></p>
                <p class="text-3"><?= $default[4] ?></p>
                <img class="first" data-aos="zoom-out" src="<?= $domain ?>assets/images/doors/small/<?= $image[0] ?>"
                     alt="">
                <img src="<?= $domain ?>assets/images/doors/small/DO-001A-2.jpg" alt="">
            </a>
            <?php
        }
        ?>
    </div>
</div>
<div class="pivot wrapper">
    <div class="left">
        <img src="<?= $domain ?>assets/images/pivot.jpg"/>
    </div>
    <div class="right">
        <h3><?= $product[8] ?></h3>
        <hr>
        <p><?= $product[9] ?></p>
        <p><?= $product[10] ?></p>
    </div>
</div>
<div class="inner">
    <div class="wrapper">
        <h2 style="margin-bottom: 0; !important;"><?= $doors[0] ?></h2>
    </div>
</div>
<div class="door-colors">
    <h2><?= $product[1] ?></h2>
    <div class="wrapper">
        <div class="color">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/doors/colors/color-1.png">
        </div>
        <div class="color">
            <img data-aos="slide-up" src="<?= $domain ?>assets/images/doors/colors/color-2.png">
        </div>
    </div>
    <h2><?= $product[2] ?></h2>
    <div class="color wrapper">
        <img data-aos="slide-up" src="<?= $domain ?>assets/images/doors/colors/color-3.png">
    </div>
</div>
<div class="door-glass" style="margin-bottom: 100px;">
    <h2><?= $product[3] ?></h2>
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
