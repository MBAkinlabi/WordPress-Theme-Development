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

    // Activate custom settings
    add_action( 'admin_init', 'myfirst_custom_settings' );
}

add_action( 'admin_menu', 'myfirst_add_admin_page' );

function myfirst_custom_settings() {
    register_setting( 'myfirst-settings-group', 'first_name' );
    add_settings_section( 'myfirst-sidebar-options', 'Sidebar Option', 'myfirst_sidebar_options', 'my_first' );
    add_settings_field( 'sidebar-name', 'First Name', 'myfirst_sidebar_name', 'my_first', 'myfirst-sidebar-options' );
}

function myfirst_sidebar_options() {
    echo 'Customize your Sidebar Information';
}

function myfirst_sidebar_name() {
    $firstName = esc_attr( get_option( 'first_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" />';
}

function myfirst_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/myfirst-admin.php' );
}

function myfirst_theme_settings_page() {

    echo '<h1>MyFirst Custom CSS</h1>';
}