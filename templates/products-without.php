<?php

$products=mysqli_fetch_all(mysqli_query($db,"SELECT * FROM product where type='1'"),MYSQLI_ASSOC);


?>
<div class="page-header tasarim">
    <div class="wrapper right">
        <span data-aos="fade-down">Dooral</span>
        <span data-aos="fade-up"><?= $menu[1] ?></span>
    </div>
    <div class="main">
        <p><?= $main[0] ?></p>
        <div class="menu">
            <a class="active" href="<?= $domain ?>products-without"><img src="<?= $domain ?>assets/images/door-bt-1.png" alt=""><?= $menu[2] ?></a>
            <a href="<?= $domain ?>products-single"><img src="<?= $domain ?>assets/images/door-bt-2.png" alt=""><?= $menu[3] ?></a>
            <a href="<?= $domain ?>products-double"><img src="<?= $domain ?>assets/images/door-bt-3.png" alt=""><?= $menu[4] ?></a>
        </div>
    </div>
</div>
<div class="products">
    <div class="wrapper">

        <?php
        foreach ($products as $product){
            $image=json_decode($product["image"],true);
            ?>
            <div class="box" data-aos="zoom-out">
                <img src="<?= $domain ?>assets/images/doors/small/<?=$image[0]?>">
                <div class="after">
                    <a href="<?= $domain ?>product/<?=$product["id"]?>"><p><?=$product["name"]?></p><i class="far fa-search-plus"></i></a>
                </div>
            </div>

            <?php
            }
        ?>
    </div>
</div>
<div class="wrapper">
    <div class="porta-main">
        <div class="text">
            <h3>DIŞTA ALÜMİNYUM GÜVENİ</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aperiam delectus ex illum ipsum
                molestias odit pariatur veniam?</p>
        </div>
        <img data-aos="slide-up" porta-main src="<?= $domain ?>assets/images/portes-main.png">
        <div class="text">
            <h3>İÇTE AHŞAP KONFORU</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet aperiam delectus ex illum ipsum
                molestias odit pariatur veniam?</p>
        </div>
    </div>
</div>