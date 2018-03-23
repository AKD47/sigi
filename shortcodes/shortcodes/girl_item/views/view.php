<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="girl">
    <div class="container">

        <div class="girl__titlebox">
            <h1 class="girl__title"><?= $atts['girl_name']?></h1>
<!--            <p class="girl__location">--><?//= $atts['girl_place']?><!--</p>-->
        </div>


        <div class="girl__phonebox">
<!--            <p>Telefon dívky</p>-->
            <a href="tel:<?= $atts['girl_phone']?>"><?= $atts['girl_phone']?></a>
<!--            <span>Ověřeno</span>-->
        </div>

        <div id="girls-slider" class="girl__slider">

            <?php foreach ($atts['girl_slider'] as $att) {?>
                <a href="<?= $att['url']?>" class="girl__slide"
                   data-fancybox="gallery">
                    <img src="<?= $att['url']?>" alt="">
                </a>
            <?}?>

        </div>

        <div class="girl__textblock">

            <h3><?= $atts['girl_text_title']?></h3>
            <p><?= $atts['girl_text_descr']?></p>

        </div>

        <div class="girl__descr">

            <?php foreach ($atts['girl_descr'] as $att) {?>
                <div class="girl__descr--item">
                    <span><?= $att['title']?></span><span><?= $att['value']?></span>
                </div>
            <?}?>

            <div class="girl__lang">

<!--                <h3>--><?// echo $atts['girl_langtitle']?><!--</h3>-->

                <div class="girl__lang-box">

                    <?php foreach ($atts['girl_lang'] as $att){?>
                        <img src="<?= $att['url'] ?>" alt="">
                    <?}?>

                </div>

            </div>

        </div>

        <div class="girl__adv">

            <div class="girl__services">

                <h3><? echo $atts['girl_services_title']?></h3>
<!--                <h3>Nabízené služby</h3>-->

                <?php foreach ($atts['girl_services'] as $att){?>
                    <div class="girl__services-item">
                        <div class="<?= $att['checkbox']?>"><?= $att['value']?></div>
                    </div>
                <?}?>

            </div>

            <div class="girl__schedule">

                <h3>Harmonogram</h3>

                <?php foreach ($atts['girl_schedule'] as $att) {?>
                    <div class="girl__schedule--item">
                        <span><?= $att['day']?></span>
                        <span><?= $att['value']?></span>
                    </div>
                <?}?>

            </div>

        </div>

    </div>
</section>
