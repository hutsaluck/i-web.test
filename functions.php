<?php


define( "LINK_THEME", get_stylesheet_directory_uri() );

/*
 * Connect scripts
 * */
add_action( 'wp_enqueue_scripts', 'eco_enqueue_scripts' );
function eco_enqueue_scripts()
{

    /* Styles */
    wp_enqueue_style( 'i-web-style', get_stylesheet_uri(), array(), '1.0' );
}

/* Disable style contact form 7 */
add_filter( 'wpcf7_form_elements', function ( $content ) {
    $content = str_replace( '<br />', '', $content );

    return $content;
} );


/* Define the wpcf7_is_tel callback */
add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );

function custom_filter_wpcf7_is_tel( $result, $tel )
{
    $result = preg_match( '/^\(?\+?([0-9]{1,4})?\)?[-\. ]?(\d{10})$/', $tel );

    return $result;
}

/* Connect theme data */
add_action( 'after_setup_theme', 'theme_add_nav_menu' );
function theme_add_nav_menu() {
    /* Initialize menu */
    register_nav_menu(
        'primary-menu', __( "Primary menu at the header" )
    );
    register_nav_menu(
        'footer-menu', __( "Footer menu at the footer" )
    );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    /* Adds the ability to insert logo */
    add_theme_support( 'custom-logo' );

    /* Initialize title */
    add_theme_support( 'title-tag' );

    /* Initialize widgets */
    add_theme_support( 'widgets' );
}

// Allowed SVG downloads
add_filter('upload_mimes', 'allow_svg_upload');
function allow_svg_upload($mime_types) {
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}