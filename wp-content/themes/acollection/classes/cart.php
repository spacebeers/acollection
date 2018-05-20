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

    function prefix_send_email_to_admin() {
        if (count($_POST) != 0):
            /**
             * At this point, $_GET/$_POST variable are available
             *
             * We can do our normal processing here
             */
            $safe_results = array();
            echo "<pre>";
            print_r($_POST);

            // Sanitize the POST field

            /*foreach( $_POST as $stuff ) {
                if( is_array( $stuff ) ) {
                    foreach( $stuff as $thing ) {
                        $san = filter_var($thing, FILTER_SANITIZE_STRING);
                        array_push($safe_array, $san);
                        echo $san . "<br/>";
                    }
                } else {
                    $san = filter_var($stuff, FILTER_SANITIZE_STRING);
                    array_push($safe_array, $san);
                    echo $san . "<br/>";
                }
            }*/
            function test_print($item, $key)
                {
                    echo "$key holds " . filter_var($item, FILTER_SANITIZE_STRING) . "\n";

                }

            array_walk_recursive($_POST['products'], 'test_print');
            array_walk_recursive($_POST['details'], 'test_print');
            print_r($safe_results);
            echo "</pre>";



            // Generate email content


            // Send to appropriate email
            $to = get_theme_mod('acollection_enquiries_email');
            $subject = 'New website enquiry';
            $headers[] = 'From: A Collection <me@example.net>';
            $headers[] = 'Cc: Atomic Horse <hello@atomichorse.agency>';
            echo "Sending email\n";
            $mailResult = false;
            $mailResult = wp_mail( $to, $subject, $message, $headers );
            if ($mailResult):
                echo "Email sent\n";
            else:
                echo "Email failed\n";
            endif;



            // Clear cookies
            if (isset($_COOKIE['A_COLLECTION_BASKET'])):
                setcookie("A_COLLECTION_BASKET", "", 1);
                echo "clearing cookies\n";
            endif;

            // write to logs

            // Handle errors

            // Redirect
        else:
            // Post content doesn't exist

        endif;

    }
    add_action( 'admin_post_nopriv_enquiry_form', 'prefix_send_email_to_admin' );
    add_action( 'admin_post_enquiry_form', 'prefix_send_email_to_admin' );
?>