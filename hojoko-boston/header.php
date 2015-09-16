<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hojoko Boston <?php wp_title( ' |' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/js/vendor/modernizr-2.8.3.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header">
            <ul class="social">
                <li>
                    <a href="http://www.facebook.com/hojokoboston" target="_blank">
                        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/facebook.svg" alt="Facebook">
                    </a>
                </li>
                <li>
                    <a href="http://www.twitter.com/hojokoboston" target="_blank">
                        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/twitter.svg" alt="Twitter">
                    </a>
                </li>
                <li>
                    <a href="http://www.instagram.com/hojokoboston" target="_blank">
                        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/instagram.svg" alt="Instagram">
                    </a>
                </li>
            </ul>
            <nav id="mobile-nav">
                <?php get_template_part( 'includes/nav' ); ?>
            </nav>
            <button id="mobile-nav-trigger">menu</button>
            <?php if ( is_home() || is_front_page() ) : ?>
            <div id="logo"></div>
            <?php else : ?>
            <a href="<?php bloginfo( 'url' ); ?>">
                <div id="logo"></div>
            </a>
            <?php endif; ?>
            <nav id="nav">
                <?php get_template_part( 'includes/nav' ); ?>  
            </nav>
        </header>