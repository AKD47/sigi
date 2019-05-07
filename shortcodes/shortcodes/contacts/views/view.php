<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section class="contacts">
    <div class="container">
        <div class="contacts__map">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1qi5MmJai-f8PM6ds98qJoJLuCOE9-qlh"></iframe>
        </div>
        <div class="contacts__wrapper">
            <div class="contacts__wrapper--logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/contact_logo.png" alt="logo"></div>
            <div class="contacts__wrapper--descr">

                <?php foreach ($atts['contact_textblock'] as $att) {?>

                    <p><? echo $att['title']?></p>

                <?}?>

            </div>
        </div>
    </div>
</section>