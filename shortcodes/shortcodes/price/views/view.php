<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="price">
    <div class="container">

        <h1 class="price__title"><? echo $atts['price_title']?></h1>

        <div class="price__escort">

            <h3><? echo $atts['price_subtitle']?></h3>

            <?php foreach ($atts['price_textblock'] as $att) {?>

                <p><? echo $att['title']?></p>

            <?}?>

        </div>

        <div class="price__privat">

            <h3><? echo $atts['private_subtitle']?></h3>

            <?php foreach ($atts['private_textblock'] as $att){?>

                <p><? echo $att['title']?></p>

            <?}?>

        </div>
    </div>
</section>