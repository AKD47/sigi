<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sibi-team
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo('template_directory'); ?>/img/icons/favicon.ico">
    <div class="preloader-wrap js-open">
        <div class="preloader">
            <img src="<?php bloginfo('template_directory'); ?>/img/icons/top-logo.png" class="c-gif js-gif">
        </div>
    </div>

    <?php wp_head(); ?>
</head>

<body>
<header class="header">

    <div class="container">

        <a href="<?= home_url('/');?>" class="header__logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/icons/top-logo.png" alt="logo">
        </a>

        <div class="header__bg"></div>

        <nav class="header__navigation">

            <a id="mobile-menu" class="header__trigger">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <?= wp_nav_menu( array(
                'theme_location'  => 'top',//add menu to footer
                'menu_class'      => 'header__nav',
            ))?>

            <ul class="header__submenu">
                <li><a href="#">Fotbalove poradenstvi</a></li>
                <li><a href="#">Fotbalova skola Horsta siegela</a></li>
                <li>
                    <a href="https://www.facebook.com/search/top/?q=sigi%20team">
                        <span>
                           <i aria-hidden="true" class="fa fa-facebook"></i>
                        </span>
                    </a>
<!--                    <a href="#">-->
<!--                        <span>-->
<!--                             <i aria-hidden="true" class="fa fa-instagram"></i>-->
<!--                        </span>-->
<!--                    </a>-->
<!--                    <a href="#">-->
<!--                        <span>-->
<!--                           <i aria-hidden="true" class="fa fa-twitter"></i>-->
<!--                        </span>-->
<!--                    </a>-->
                    <a href="#">
                        <span>
                           <i aria-hidden="true" class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
