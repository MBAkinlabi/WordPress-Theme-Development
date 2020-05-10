<?php

/*
@package MyFirst

    =======================================
        ADMIN PAGE
    =======================================
*/

function myfirst_add_admin_page() {

    add_menu_page( 'MyFirst Theme Options', 'MyFirst', 'manage_options', 'my-first', 'myfirst_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );
}

add_action( 'admin_menu', 'myfirst_add_admin_page' );

function myfirst_theme_create_page() {
    // Generation of our admin page
}