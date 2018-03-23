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
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo('template_directory'); ?>/img/icons/favicon.ico">
    <div class="preloader-wrap js-open">
        <div class="preloader">
            <img src="<?php bloginfo('template_directory'); ?>/img/icons/top-logo-sm.png" class="c-gif js-gif">
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
                'theme_location'  => 'top',//add menu to header
                'container'       => false,
                'menu_class'      => 'header__nav',
            ))?>

            <?= wp_nav_menu( array(
                'theme_location'  => 'top_submenu',//add sub-menu to header
                'container'       => false,
                'menu_class'      => 'header__submenu',
            ))?>

        </nav>
    </div>
</header>
