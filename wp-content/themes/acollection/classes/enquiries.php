<?php
    // https://premium.wpmudev.org/blog/creating-wordpress-admin-pages/
    add_action( 'admin_menu', 'enquiries_admin_menu' );

    function enquiries_admin_menu() {
        add_menu_page( 'Enquiries', 'Enquiries', 'manage_options', 'myplugin/myplugin-admin-page.php', 'enquries_admin', 'dashicons-tickets', 6  );
    }
?>