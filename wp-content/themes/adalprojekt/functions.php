<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );





register_nav_menus( array(
    'primary' => __( 'Primary Menu' ),
) );

function styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'styles');

function script() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array( 'jquery'));
}
add_action( 'wp_enqueue_scripts', 'script');
?>