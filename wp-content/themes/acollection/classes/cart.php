<?php

    global $wpdb;

    add_action( 'basket_url', 'echo_basket_url' );
    function echo_basket_url() {
        echo get_site_url() . '/basket';
    }


    add_action('init', function() {
        $url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/');
        if ( $url_path === 'acollection.co.uk/basket' ) {
            // load the file if exists
            $load = locate_template('template-cart.php', true);
            if ($load) {
                exit(); // just exit if template was found and loaded
            }
        }
    });

    /**
     * Sets up a JSON endpoint at /wp-json/charts/v1/chart/
     * params ?id
     */
    add_action( 'rest_api_init', function () {
        $namespace = 'rest/v1';
        register_rest_route( $namespace, '/cart/', array(
            'methods' => 'GET',
            'callback' => 'acollection_get_basket_items',
        ) );
    } );

    /**
     * Get and augment the select box of indecies
     */
    function acollection_get_basket_items( WP_REST_Request $request) {

        $params = $request->get_query_params();
        echo $params;
        $output = ["y","o","l","o"];
        //$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}options WHERE option_id = 1", OBJECT );
        /*while ($row = sqlsrv_fetch_array($indicesTable, SQLSRV_FETCH_ASSOC)):
            $object = new stdClass();
            $object->id = $row['EMASECID'];
            $object->name = $row['CompanyName'];
            $output[] = $object;
        endwhile;*/

        return $output;
    }

    function prefix_send_email_to_admin() {
        /**
         * At this point, $_GET/$_POST variable are available
         *
         * We can do our normal processing here
         */
        print_r($_POST);

        // Sanitize the POST field


        // Generate email content


        // Send to appropriate email

        // Redirect

    }
    add_action( 'admin_post_nopriv_enquiry_form', 'prefix_send_email_to_admin' );
    add_action( 'admin_post_enquiry_form', 'prefix_send_email_to_admin' );
?>