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
    add_submenu_page( 'my_first', 'MyFirst Sidebar Options', 'Sidebar', 'manage_options', 'my_first', 'myfirst_theme_create_page' );
    add_submenu_page( 'my_first', 'MyFirst Theme Options', 'Theme Options', 'manage_options', 'my_first_theme', 'myfirst_theme_support_page' );
    add_submenu_page( 'my_first', 'MyFirst CSS Options', 'Custom CSS', 'manage_options', 'my_first_css', 'myfirst_theme_settings_page' );

    // Activate custom settings
    add_action( 'admin_init', 'myfirst_custom_settings' );
}

add_action( 'admin_menu', 'myfirst_add_admin_page' );

function myfirst_custom_settings() {
    // Sidebar Options
    register_setting( 'myfirst-settings-group', 'profile_picture' );
    register_setting( 'myfirst-settings-group', 'first_name' );
    register_setting( 'myfirst-settings-group', 'last_name' );
    register_setting( 'myfirst-settings-group', 'user_description' );
    register_setting( 'myfirst-settings-group', 'twitter_handler', 'myfirst_sanitize_twitter_handler');
    register_setting( 'myfirst-settings-group', 'facebook_handler' );
    register_setting( 'myfirst-settings-group', 'gplus_handler' );

    add_settings_section( 'myfirst-sidebar-options', 'Sidebar Option', 'myfirst_sidebar_options', 'my_first' );

    add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'myfirst_sidebar_profile', 'my_first', 'myfirst-sidebar-options' );
    add_settings_field( 'sidebar-name', 'Full Name', 'myfirst_sidebar_name', 'my_first', 'myfirst-sidebar-options' );
    add_settings_field( 'sidebar-description', 'Description', 'myfirst_sidebar_description', 'my_first', 'myfirst-sidebar-options' );
    add_settings_field( 'sidebar-twitter', 'Twitter handler', 'myfirst_sidebar_twitter', 'my_first', 'myfirst-sidebar-options' );
    add_settings_field( 'sidebar-facebook', 'Facebook handler', 'myfirst_sidebar_facebook', 'my_first', 'myfirst-sidebar-options' );
    add_settings_field( 'sidebar-gplus', 'Google+ handler', 'myfirst_sidebar_gplus', 'my_first', 'myfirst-sidebar-options' );

    // Theme Support Options
    register_setting( 'myfirst-theme-support', 'post_formats', 'myfirst_post_formats_callback' );

    add_settings_section( 'myfirst-theme-options', 'Theme Options', 'myfirst_theme_options', 'myfirst_theme' );

    add_settings_field( 'post-formats', 'Post Formats', 'myfirst_post_formats', 'myfirst_theme', 'myfirst-theme-options' );
}

// Post Formats Callback Function
function myfirst_post_formats_callback( $input ) {
    return $input;
}

function myfirst_theme_options() {
    echo 'Activate and Deactivate specific Theme Support Options';
}

function myfirst_post_formats() {
    $options = get_option( 'post_formats' );
    $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    $output = '';
    
    foreach( $formats as $format ) {
        $checked = ( @$options[$format] == 1 ? 'checked' : '' );
        $output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' > '.$format.'</label><br>';
    }
    echo $output;
}

// Sidebar Options Functions
function myfirst_sidebar_options() {
    echo 'Customize your Sidebar Information';
}

function myfirst_sidebar_profile() {
    $picture = esc_attr( get_option( 'profile_picture' ) );

    echo '<input type="button" value="Upload Profile Picture" class="button button-secondary" id="upload-button" ><input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" >';
}

function myfirst_sidebar_name() {
    $firstName = esc_attr( get_option( 'first_name' ) );
    $lastName = esc_attr( get_option( 'last_name' ) );

    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" > <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" >';
}

function myfirst_sidebar_description() {
    $description = esc_attr( get_option( 'user_description' ) );

    echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description" ><p class="description">Write something smart</p>';
}

function myfirst_sidebar_twitter() {
    $twitter = esc_attr( get_option( 'twitter_handler' ) );

    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" ><p class="description">Input your Twitter username without the @ character.</p>';
}

function myfirst_sidebar_facebook() {
    $facebook = esc_attr( get_option( 'facebook_handler' ) );

    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" >';
}

function myfirst_sidebar_gplus() {
    $gplus = esc_attr( get_option( 'gplus_handler' ) );

    echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" >';
}

// Sanitization settings
function myfirst_sanitize_twitter_handler( $input ) {
    $output = sanitize_text_field( $input );
    $output = str_replace('@', '', $output);
    return $output;
}

// Template submenu functions
function myfirst_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/myfirst-admin.php' );
}

function myfirst_theme_support_page() {
    require_once( get_template_directory() . '/inc/templates/myfirst-theme-support.php' );
}

function myfirst_theme_settings_page() {

    echo '<h1>MyFirst Custom CSS</h1>';
}