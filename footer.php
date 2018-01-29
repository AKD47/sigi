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

        <div class="footer__logo">

            <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/footer-logo.png">
            </div>

            <p class="footer__logo--title">sigi team s.r.o.</p>

            <p class="footer__logo--address">Vyvysen.573 Praha 5 - Lipence 155 31</p>
            <a href="#" class="footer__logo--call">ICO: 048 92 895</a>
            <a href="tel:+420 724 360 835" class="footer__logo--call">tel.: +420 724 360 835</a>

        </div>
        <div class="footer__element">
            <p class="footer__element--title">Menu </p>
            <ul class="footer__element--menu">
                <li><a href="#">Sportovni udalosti</a></li>
                <li><a href="#">Zapasy</a></li>
                <li><a href="#">Osobnosti</a></li>
                <li><a href="#">Treninky</a></li>
                <li><a href="#">Kontakty</a></li>
            </ul>

        </div>
        <div class="footer__element">
            <p class="footer__element--title">Kontakty</p>
            <ul class="footer__element--menu">
                <li><a href="#">tel.: +420 724 360 835</a></li>
                <li><a href="maito:" class="footer__element--email">horst@sigiteam.cz</a></li>
            </ul>

        </div>
        <div class="footer__partner">
            <p class="footer__partner--title">Partner</p>
            <a class="footer__partner--partner">
                <img src="<?php bloginfo('template_directory'); ?>/img/partner-logo.png">
            </a>
        </div>
        <div class="footer__socials">
            <a href="#">
                <i aria-hidden="true" class="fa fa-facebook"></i>
            </a>
            <a href="#">
                <i aria-hidden="true" class="fa fa-instagram"></i>
            </a>
            <a href="#">
                <i aria-hidden="true" class="fa fa-twitter"></i>
            </a>
            <a href="#">
                <i aria-hidden="true" class="fa fa-youtube"></i>
            </a>
        </div>
        <div class="footer__art">&copy; 2003-2017 sigi team s.r.o. all rights reserved</div>
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
