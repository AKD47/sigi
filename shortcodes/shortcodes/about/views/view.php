<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="about">
    <div class="container">
        <div class="about__wrapper">

            <?php foreach ($atts['about'] as $att) { ?>

                <p><? echo $att['text'] ?></p>

            <? } ?>

        </div>
    </div>
</section>
