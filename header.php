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
   <!-- <div class="preloader-wrap js-open">
        <div class="preloader">
            <img src="<?php /*bloginfo('template_directory'); */?>/img/icons/top-logo.png" class="c-gif js-gif">
        </div>
    </div>-->

    <?php wp_head(); ?>
</head>

<body>
<header class="header">

    <div class="container">

        <a href="/" class="header__logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/icons/top-logo.png" alt="logo">
        </a>

        <nav class="header__navigation">

            <a id="mobile-menu" class="header__trigger">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <ul class="header__nav">
                <li><a href="#">Sportovni udalosti</a></li>
                <li><a href="#">Zapasy</a></li>
                <li><a href="#">Osobnosti</a></li>
                <li><a href="#">Treninky</a></li>
                <li><a href="#">Kontakty</a></li>
            </ul>

            <ul class="header__submenu">
                <li><a href="#">Fotbalove poradenstvi</a></li>
                <li><a href="#">Fotbalova skola Horsta siegela</a></li>
                <li>
                    <a href="#">
                        <span>
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/fb-icon.png">
                        </span>
                    </a>
                    <a href="#">
                        <span>
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/ins-icon.png">
                        </span>
                    </a>
                    <a href="#">
                        <span>
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/tw-icon.png">
                        </span>
                    </a>
                    <a href="#">
                        <span>
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/yt-icon.png">
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
