<?php

/*
@package MyFirst

    =======================================
        THEME SUPPORT PAGE
    =======================================
*/

$options = get_option( 'post_formats' );

if ( !empty( $options ) ) {
    $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    $output = array();
    
    foreach( $formats as $format ) {
        $output[] = ( @$options[$format] == 1 ? $format : '' );
    }
    add_theme_support( 'post-formats', $output );
}