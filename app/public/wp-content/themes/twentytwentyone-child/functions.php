<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
/**
 * Enqueue scripts and styles in functions.php.
 */
function theme_scripts() {
    // wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), NULL, true );
    // wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, NULL, 'all' );
	// wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1');


    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/custom-sass/style.css');
	wp_enqueue_script( 'theme-app', get_stylesheet_directory_uri() . '/app/js.js');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

