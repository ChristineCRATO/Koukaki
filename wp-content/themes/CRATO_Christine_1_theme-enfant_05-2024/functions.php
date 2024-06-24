<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Parent theme
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Loading child theme style
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css-sass/style.css', array(), time());
    // Loading Swiper JS + Link
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0', time(), true);
    // Loading child script & Jquery
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0', time(), true);

}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}