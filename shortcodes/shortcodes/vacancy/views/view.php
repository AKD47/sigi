<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="vacancy">
    <div class="container">
        <div class="vacancy__decr">

            <h1><? echo $atts['vacancy_title'] ?></h1>

            <?php foreach ($atts['vacancy_textblock'] as $att) { ?>

                <p><? echo $att['title'] ?></p>

            <? } ?>

        </div>
        <div class="vacancy__adv">

            <h3><? echo $atts['vacancy_advtitle']?></h3>

            <ul>
                <?php foreach ($atts['vacancy_advantages'] as $att){?>

                    <li><? echo $att['title']?></li>

                <?}?>

            </ul>

        </div>
    </div>
</section>