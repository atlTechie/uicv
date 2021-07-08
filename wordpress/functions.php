<?php

register_nav_menus( array(
    'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
);

add_theme_support( 'post-thumbnails' );
add_image_size( 'my-custom-image-size', 640, 999 );

// Enqueue Styles and Scripts
function my_custom_theme_enqueue() {
    wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );

function my_custom_theme_enqueue() {
    wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
    wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/js/scripts.js' );
    }
    add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );

?>


