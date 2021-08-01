<?php
/*
* Plugin Name: Product Sider
* Version: 1.0.0
* Description: The best slider for prodcuts! Display your products using sliders.
* Author: DevTarik
* Slug: product-slider
*/



/*-------------------------------------------
* Plugin Absolute Path
*-------------------------------------------*/
if ( ! defined('PLSLIDER_PLUGIN_DIR') ) {
    define('PLSLIDER_PLUGIN_DIR', plugin_dir_url( __FILE__ ));
}



/*-------------------------------------------
* Including Function File
*-------------------------------------------*/
require plugin_dir_path( __FILE__ ) . 'functions.php';



/*-------------------------------------------
* The Slider File
*-------------------------------------------*/
require plugin_dir_path( __FILE__ ) . 'includes/sliders.php';



/*-------------------------------------------
* WP Admin Menu
*-------------------------------------------*/
require plugin_dir_path( __FILE__ ) . 'includes/settings/settings.php';



?>