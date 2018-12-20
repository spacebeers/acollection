<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?bust=0.0.1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="grid grid--container">
        <header class="site-header" id="header">
            <div class="top-menu">
                <div class="grid">
                    <div class="row">
                        <div class="col col--xs-3 col--sm-8">
                            <button id="nav-toogle">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/menu.png" alt="menu">
                            </button>

                            <div id="mobile-menu">
                                <ul>
                                    <?php
                                        wp_nav_menu( array(
                                            'menu'              => 'main_menu',
                                            'theme_location'    => 'main_menu',
                                            'depth'             => 1,
                                            'container'         => false,
                                            'items_wrap' => '%3$s')
                                        );

                                        wp_nav_menu( array(
                                            'menu'              => 'secondary_menu',
                                            'theme_location'    => 'secondary_menu',
                                            'depth'             => 1,
                                            'container'         => false,
                                            'items_wrap' => '%3$s')
                                        );
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo">
                <div class="text--xs-center">
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home' class="site-logo">
                        <img src='<?php echo esc_url( get_theme_mod( 'acollection_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                        <?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?>
                    </a>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="side-nav side-nav-left">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'main_menu',
                        'theme_location'    => 'main_menu',
                        'depth'             => 1,
                        'container'         => 'nav',
                        'container_class'   => 'main-menu')
                    );
                ?>
            </div>
            <div class="side-nav side-nav-right">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'secondary_menu',
                        'theme_location'    => 'secondary_menu',
                        'depth'             => 1,
                        'container'         => 'nav',
                        'container_class'   => 'main-menu')
                    );
                ?>
            </div>

            <main id="main" class="site-main" role="main">