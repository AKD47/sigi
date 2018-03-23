<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="rooms">
    <div class="container">
        <div class="rooms__wrapper">

            <?php foreach ($atts['room'] as $att) {?>

                <a href="<? echo $att['photo']['url']?>" data-fancybox="gallery" class="rooms__wrapper--element">
                    <img src="<? echo $att['photo']['url']?>" alt="room">
                    <div class="rooms__wrapper--overlay"></div>
                    <h3><? echo $att['title']?></h3></a>

            <?}?>

    </div>
</section>