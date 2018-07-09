<?php

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

    add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
    function log_mailer_errors(){
        /*$fn = ABSPATH . '/mail.log'; // say you've got a mail.log file in your server root
        $fp = fopen($fn, 'a');
        fputs($fp, "Mailer Error: " . $mailer->ErrorInfo ."\n");
        fclose($fp);*/
        echo 'EMAIL FAILED';
        echo $mailer->ErrorInfo;
    }

    function sanitize($field) {
        return filter_var($field, FILTER_SANITIZE_STRING);
    }

    function prefix_send_email_to_admin() {
        if (count($_POST) != 0):
            $message = '<html><body>';
            $message .= '<h2>New enquiry: ref#' . sanitize($_POST['details']['job_reference']) . '</h2>';


            /**
             * At this point, $_GET/$_POST variable are available
             *
             * We can do our normal processing here
             */
            $safe_results = array();
            //echo "<pre>";
            //var_dump($_POST['products']);

            $message .= '<h2>Products</h2>';
            $message .= '<ul>';
            foreach($_POST['products'] as $item):
                $message .= '<li><strong>' . sanitize($item['name']) . '(' . sanitize($item['id']) . ')</strong> x ' . sanitize($item['quantity']) . '</li>';
            endforeach;
            $message .= '</ul>';
            $message .= '<h2>Client details</h2>';
            $message .= '<ul>';
            $message .= '<li><strong>Name</strong> ' . sanitize($_POST['details']['first_name']) . ' ' . sanitize($_POST['details']['last_name']) . '</li>';
            $message .= '<li><strong>Email</strong> ' . sanitize($_POST['details']['email_address']) . '</li>';
            $message .= '<li><strong>Phone</strong> ' . sanitize($_POST['details']['telephone']) . '</li>';
            $message .= '<li><strong>Dates</strong> ' . sanitize($_POST['details']['from_date']) . ' - ' . sanitize($_POST['details']['return_date']) . '</li>';
            $message .= '<li><strong>Company</strong> ' . sanitize($_POST['details']['company']) . '</li>';
            $message .= '<li><strong>Address</strong> <br />' . sanitize($_POST['details']['building']) . '<br />' . sanitize($_POST['details']['street']) . '<br />' . sanitize($_POST['details']['town']) . '<br />' . sanitize($_POST['details']['post_code']) . '</li>';
            $message .= '</ul>';
            $message .= '</body></html>';
            //echo "</pre>";

            // Generate email content

            // Send to appropriate email
            $to = get_theme_mod('acollection_enquiries_email');
            $subject = 'New website enquiry';
            $headers[] = 'From: A Collection <'.$to.'>';
            $headers[] = 'Cc: Atomic Horse <hello@atomichorse.agency>';
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-Type: text/html; charset=ISO-8859-1";
            //echo "Sending email\n";
            //echo $message;
            $mailResult = false;
            $mailResult = wp_mail( $to, $subject, $message, $headers );

            if ($mailResult): // Success
                $page = get_theme_mod( 'acollection_pages_success_link');
                $link = get_page_link($page);
                // Wipe basket cookies
                if (isset($_COOKIE['A_COLLECTION_BASKET'])):
                    $timer = time()+86400;
                    setcookie('A_COLLECTION_BASKET', 1, $timer, '/');
                endif;

                wp_redirect($link);
            else: // Fail
                $page = get_theme_mod( 'acollection_pages_error_link');
                $link = get_page_link($page);
                wp_redirect($link);
            endif;
        else:
            // Post content doesn't exist
            $page = get_theme_mod( 'acollection_pages_error_link');
            $link = get_page_link($page);
            wp_redirect($link);
        endif;

    }
    add_action( 'admin_post_nopriv_enquiry_form', 'prefix_send_email_to_admin' );
    add_action( 'admin_post_enquiry_form', 'prefix_send_email_to_admin' );
?>