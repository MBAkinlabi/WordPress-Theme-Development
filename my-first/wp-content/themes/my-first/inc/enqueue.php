<?php

/*
@package MyFirst

    =======================================
        ADMIN ENQUEUE FUNCTIONS
    =======================================
*/

function myfirst_load_admin_scripts( $hook ) {

    if ('toplevel_page_my_first' != $hook ) {
        return;
    } 

    wp_register_style( 'myfirst_admin', get_template_directory_uri() . '/css/myfirst.admin.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'myfirst_admin' );
}
add_action( 'admin_enqueue_scripts', 'myfirst_load_admin_scripts' );