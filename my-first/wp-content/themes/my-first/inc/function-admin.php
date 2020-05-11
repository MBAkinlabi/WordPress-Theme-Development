<?php

/*
@package MyFirst

    =======================================
        ADMIN PAGE
    =======================================
*/

function myfirst_add_admin_page() {

    // Generate MyFirst Admin Page
    add_menu_page( 'MyFirst Theme Options', 'MyFirst', 'manage_options', 'my_first', 'myfirst_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );

    // Generate MyFirst Admin Sub Pages
    add_submenu_page( 'my_first', 'MyFirst Theme Options', 'General', 'manage_options', 'my_first', 'myfirst_theme_create_page' );

    add_submenu_page( 'my_first', 'MyFirst CSS Options', 'Custom CSS', 'manage_options', 'my_first_css', 'myfirst_theme_settings_page' );
}

add_action( 'admin_menu', 'myfirst_add_admin_page' );

function myfirst_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/myfirst-admin.php' );
}

function myfirst_theme_settings_page() {

    echo '<h1>MyFirst Custom CSS</h1>';
}