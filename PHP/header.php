<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/motion-ui.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <?php if (is_front_page()) { ?>
        <div class="intro" style="background:url(<?php the_field('homepage_intro_image', 'options'); ?>) no-repeat center center">
            <div class="slogan text-center">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/logo-white.png">
                <span>Life’s too short.</span>
                get outside the box.
            </div>
        </div>
        <div class="small-12 columns web-info text-center">
            <ul>
                <li><a href="#works">works</a></li>
                <li><a href="#contacts">contact</a></li>
            </ul>
        </div>
        <?php } ?>

        <div class="nav <?php if (is_front_page()) { ?><?php } else { ?>nav-hold<?php } ?>">
            <div class="small-5 medium-5 large-5 columns nopad nav-left">
                <?php wp_nav_menu( array('menu' => 'navleft', 'menu_class' => 'top-nav' )); ?>
            </div>
            <div class="small-2 medium-2 large-2 columns nopad logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo-ugas.png"></a>
            </div>
            <div class="small-5 medium-5 large-5 columns nopad nav-right">
                <?php wp_nav_menu( array('menu' => 'navright', 'menu_class' => 'top_nav' )); ?>
            </div>
        </div>

        <div class="mob-nav-block <?php if (is_front_page()) { ?><?php } else { ?>nav-hold<?php } ?>">
            <div class="small-6 columns logo-mob nopad">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo-ugas.png"></a>
            </div>
            <div class="small-6 columns text-right trigger">
                <div class="hamburger hamburger--collapse">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
            <div class="small-12 columns mob-nav">
                <?php wp_nav_menu( array('menu' => 'navleft', 'menu_class' => 'top_nav' )); ?>
                <?php wp_nav_menu( array('menu' => 'navright', 'menu_class' => 'top_nav' )); ?>
            </div>
        </div>
