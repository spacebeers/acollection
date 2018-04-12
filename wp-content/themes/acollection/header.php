<?php
    $header_text = get_theme_mod('farleyshouse_header_text');
?>


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
    <div class="container">
        <header class="site-header" id="header">
            <div class="section header-menu">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'main_menu',
                        'theme_location'    => 'main_menu',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_class'   => 'main-menu',
                        'container_id'      => 'main-navigation',
                        'menu_class'        => 'nav')
                    );
                ?>
            </div>
            <div class="section header-brand">
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    <img src='<?php echo esc_url( get_theme_mod( 'farleyshouse_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                </a>
            </div>
            <div class="section header-info">
                <?php echo $header_text; ?>
            </div>
        </header>

        <section class="content">
            <main id="main" class="site-main" role="main">