<?php
    include('classes/social_widget.php');
    include('classes/cart.php');

    // Menus
	register_nav_menus( array(
		'main_menu' => 'Main menu',
		'secondary_menu' => 'Secondary menu',
		'footer_menu' => 'Footer menu'
	) );

    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }

    // Menus ends

    // External CSS
    function acollection_theme_name_styles() {
        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:400,600', false );
    }

    add_action( 'wp_enqueue_scripts', 'acollection_theme_name_styles' );
    // External CSS

    // Vendor scripts

    function acollection_vendor_scripts() {
        wp_enqueue_script( 'acollection-theme', get_template_directory_uri() . '/scripts/theme.js', array ( 'jquery' ), 1.1, true);
    }
    add_action( 'wp_enqueue_scripts', 'acollection_vendor_scripts' );
    // Vendor scripts ends

    // Custom post types
   function create_posttype() {
        register_post_type('Product',
            array(
                'labels' => array(
                    'name' => __( 'Products' ),
                    'singular_name' => __( 'Prodcut' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'product'),
                'supports' => array('title', 'thumbnail', 'editor'),
                'show_in_nav_menus'   => true,
                'taxonomies'  => array( 'category' )
            )
        );
    }

    add_theme_support( 'post-thumbnails' );
    flush_rewrite_rules();

    add_action( 'init', 'create_posttype' );

    add_action( 'init', 'create_tag_taxonomies', 0 );

    function create_tag_taxonomies() {
    $labels = array(
        'name' => _x( 'Collections', 'taxonomy general name' ),
        'singular_name' => _x( 'Collection', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Collections' ),
        'popular_items' => __( 'Popular Collections' ),
        'all_items' => __( 'All Collections' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Collection' ),
        'update_item' => __( 'Update Collection' ),
        'add_new_item' => __( 'Add New Collection' ),
        'new_item_name' => __( 'New Collection Name' ),
        'separate_items_with_commas' => __( 'Separate Collections with commas' ),
        'add_or_remove_items' => __( 'Add or remove Collections' ),
        'choose_from_most_used' => __( 'Choose from the most used Collections' ),
        'menu_name' => __( 'Collections' ),
    );

    register_taxonomy('collection','product', array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'collection' ),
    ));
    }


    // Custom post types ends

	// Theme customisers

	function acollection_theme_customizer( $wp_customize ) {
		// logo
        $wp_customize->add_section( 'acollection_logo_section' , array(
			'title'       => __( 'Logo', 'acollection' ),
			'priority'    => 30,
			'description' => 'Upload a logo to replace the default site name and description in the header',
		));

		$wp_customize->add_setting( 'acollection_logo' );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'acollection_logo', array(
		    'label'    => __( 'Logo', 'acollection' ),
		    'section'  => 'acollection_logo_section',
		    'settings' => 'acollection_logo',
        )));

        $wp_customize->remove_control("header_image");

        // contact
        $wp_customize->add_section( 'acollection_contact_section' , array(
			'title'       => __( 'Contact', 'acollection' ),
			'priority'    => 30,
			'description' => 'Add the company contact details in here',
		));

		$wp_customize->add_setting( 'acollection_twitter' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'acollection_twitter', array(
		    'label'    => __( 'Twitter', 'acollection' ),
		    'section'  => 'acollection_contact_section',
		    'settings' => 'acollection_twitter',
            'type'			 => 'text'
        )));

		$wp_customize->add_setting( 'acollection_facebook' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'acollection_facebook', array(
		    'label'    => __( 'Facebook', 'acollection' ),
		    'section'  => 'acollection_contact_section',
		    'settings' => 'acollection_facebook',
            'type'			 => 'text'
		)));

		$wp_customize->add_setting( 'acollection_instagram' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'acollection_instagram', array(
		    'label'    => __( 'Instagram', 'acollection' ),
		    'section'  => 'acollection_contact_section',
		    'settings' => 'acollection_instagram',
            'type'			 => 'text'
		)));

        $wp_customize->add_section( 'acollection_pages_section' , array(
			'title'       => __( 'Page links', 'acollection' ),
			'priority'    => 30,
			'description' => 'Set links to pages here',
        ));

        $wp_customize->add_setting( 'acollection_pages_contact_link', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'acollection_sanitize_dropdown_pages',
        ) );

        $wp_customize->add_control( 'acollection_pages_contact_link', array(
            'type' => 'dropdown-pages',
            'section' => 'acollection_pages_section',
            'label' => __( 'Contact page' ),
            'description' => __( 'Select a page to use as the contact page.' ),
        ) );

        $wp_customize->add_section( 'acollection_basket_section' , array(
			'title'       => __( 'Basket', 'acollection' ),
			'priority'    => 30,
			'description' => 'Set any basket config here',
        ));

        $wp_customize->add_setting( 'acollection_basket_text' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'acollection_basket_text', array(
		    'label'    => __( 'Basket text', 'acollection' ),
		    'section'  => 'acollection_basket_section',
		    'settings' => 'acollection_basket_text',
            'type'			 => 'textarea',
            'sanitize_callback' => 'test_sanitize_text',
		)));

        function acollection_sanitize_dropdown_pages( $page_id, $setting ) {
            // Ensure $input is an absolute integer.
            $page_id = absint( $page_id );

            // If $page_id is an ID of a published page, return it; otherwise, return the default.
            return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
        }

        function test_sanitize_text( $input ) {
            $allowed_html = array(
                'br' => array(),
            );

            return wp_kses( $input, $allowed_html );
        }
	}

    add_action( 'customize_register', 'acollection_theme_customizer' );

    // Theme customisers ends

    // Sidebars

    function acollection_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Footer column one', 'acollection' ),
            'id' => 'footer-one-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));
        register_sidebar( array(
            'name' => __( 'Footer column two', 'acollection' ),
            'id' => 'footer-two-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));
        register_sidebar( array(
            'name' => __( 'Footer column three', 'acollection' ),
            'id' => 'footer-three-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        ));
    }

    // Sidebars ends

    /*
     * Resister widgets from our classes
    */
    add_action( 'widgets_init', 'acollection_widgets_init' );
    function wpb_load_widget() {
        register_widget( 'wpb_social_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );

    // Widgets ends

     add_post_type_support( 'page', 'excerpt' );
     add_action( 'admin_menu', 'my_remove_menu_pages' );

    function my_remove_menu_pages() {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }

// Only flush the file cache with each request to post list table, edit post screen, or theme editor.
function wp_42573_fix_template_caching( WP_Screen $current_screen ) {

	if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
		return;
	}
	$theme = wp_get_theme();
	if ( ! $theme ) {
		return;
	}
	$cache_hash = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
	$label = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
	$transient_key = substr( $label, 0, 29 ) . md5( $label );
	delete_transient( $transient_key );
}
add_action( 'current_screen', 'wp_42573_fix_template_caching' );

// Register custom post types with the flipping loop
function acollection_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'product'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'acollection_add_custom_types' );

// Breadcrumbs
function the_breadcrumb() {
    if (!is_home()) {
        if (is_category() || is_single()) {
            the_category('title_li=');
            if (is_single()) {
                echo " | ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}
?>