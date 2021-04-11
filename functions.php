<?php
/* 
*   Load theme's CSS and Scritps
*/
function stiles_divi_theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style'), wp_get_theme()->get('Version'));
    
}
add_action( 'wp_enqueue_scripts', 'stiles_divi_theme_enqueue_styles' );

/* Functions that loads when the theme is activated */
function stiles_divi_theme_setup(){

    /* Defining images size */
    add_image_size( 'gallery_slides_images', 800, 450, true );

}
add_action( 'after_setup_theme', 'stiles_divi_theme_setup' );