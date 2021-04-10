<?php
/* 
*   Load theme's CSS and Scritps
*/
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style'), wp_get_theme()->get('Version'));
    
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );