<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="grid--container">
        <header class="site-header" id="header">
            <div class="header-top">
                <div class="grid">
                    <div class="row row--no-gutters">
                        <div class="col col--sm-3 text--xs-left">
                            <?php dynamic_sidebar('header-one-sidebar'); ?>
                        </div>
                        <div class="col col--sm-6 text--xs-center">
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home' class="site-logo">
                                <img src='<?php echo esc_url( get_theme_mod( 'acollection_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                            </a>
                        </div>
                        <div class="col col--sm-3 text--xs-right">
                            <?php dynamic_sidebar('header-three-sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="grid">
                    <div class="row row--no-gutters">
                        <div class="col col--sm-6">
                            <div class="menu main-menu">
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'main_menu',
                                        'theme_location'    => 'main_menu',
                                        'depth'             => 2,
                                        'container'         => 'nav',
                                        'container_class'   => 'main-menu',
                                        'menu_class'        => 'nav')
                                    );
                                ?>
                            </div>
                        </div>
                        <div class="col col--sm-6">
                            <div class="menu secondary-menu">
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'secondary',
                                        'theme_location'    => 'secondary',
                                        'depth'             => 2,
                                        'container'         => 'nav',
                                        'container_class'   => 'main-menu',
                                        'menu_class'        => 'nav')
                                    );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="content">
            <main id="main" class="site-main" role="main">