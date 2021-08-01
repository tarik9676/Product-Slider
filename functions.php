<?php

$slider_number = get_option( "plslider_num", 3 );
$plslider_auto = get_option( "plslider_auto_slider", "yes" );
$plslider_i_seconds = get_option( "plslider_i_seconds", 3000 );
$plslider_products_ids = get_option( "plslider_products_ids" );
$pro_img_width = get_option( "plslider_product_img_width", "300" );
$plslider_show_arrows = get_option( "plslider_show_arrows", "yes" );
$plslider_show_dots = get_option( "plslider_show_dots", "yes" );
$plslider_dots_style = get_option( "plslider_dots_style", "circle" );

if( ! function_exists( 'plslider_enqueue_scripts' ) ) {
    function plslider_enqueue_scripts() {

        /* Bootstrap 4 CSS */
        wp_enqueue_style('plslider_devtarik_min_css', PLSLIDER_PLUGIN_DIR . 'assets/css/devtarik.min.css');

        /* CSS stylesheet */
        wp_enqueue_style('plslider_css', PLSLIDER_PLUGIN_DIR . 'assets/css/style.css');

        /* JavaScript File */
        wp_enqueue_script( 'plslider_js', PLSLIDER_PLUGIN_DIR . 'assets/js/main.js', array('jquery'), '1.0', true );

    }
    add_action( 'wp_enqueue_scripts', 'plslider_enqueue_scripts' );
}