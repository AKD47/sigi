<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sibi-team
 */

?>
<footer class="footer">

    <div class="container">

        <div class="logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/footer-logo.png">
        </div>

        <div class="footer__logo">

            <p class="footer__logo--title">sigi team s.r.o.</p>

            <p class="footer__logo--address"><?= fw_get_db_customizer_option('address');?></p>
            <p class="footer__logo--ico">ICO: 048 92 895</p>
            <a href="tel:<?= fw_get_db_customizer_option('phone_first');?>" class="footer__logo--call">tel.: <?= fw_get_db_customizer_option('phone_first');?></a>

        </div>
        <div class="footer__element">
            <p class="footer__element--title">Menu </p>

            <?= wp_nav_menu( array(
                'theme_location'  => 'footer',//add menu to footer
                'container'       => false,
                'menu_class'      => 'footer__element--menu',
            ))?>

        </div>
        <div class="footer__element">
            <p class="footer__element--title">Kontakty</p>
            <ul class="footer__element--menu">
                <li><a href="tel:<?= fw_get_db_customizer_option('phone_first');?>">tel.: <?= fw_get_db_customizer_option('phone_first');?></a></li>
                <li><a href="maito:<?= fw_get_db_customizer_option('email');?>" class="footer__element--email"><?= fw_get_db_customizer_option('email');?></a></li>
            </ul>

        </div>
        <div class="footer__partner">
            <p class="footer__partner--title">Partner</p>
            <a class="footer__partner--partner">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/partner-logo.png">
            </a>
        </div>
        <div class="footer__socials">
            <a href="https://www.facebook.com/search/top/?q=sigi%20team">
                <i aria-hidden="true" class="fa fa-facebook"></i>
            </a>

            <a href="#">
                <i aria-hidden="true" class="fa fa-youtube"></i>
            </a>
        </div>
        <div class="footer__art">&copy; 2003-2018 sigi team s.r.o. all rights reserved</div>
    </div>
</footer>

<div id="contacts" class="modal__contacts">
    <h3 class="modal__contacts--title">Kontakty</h3>
    <a href="#">tel.: +420 724 360 835</a>
    <a href="maito:horst@sigiteam.cz">horst@sigiteam.cz</a>
</div>
<div id="overlay" class="overlay"></div>

<?php wp_footer(); ?>

</body>
</html>