<?php
/** 
* Plugin Name: RD Woo Helper
* Author: Rajput Digvijay
* Author URI: https://wp-digvijay.github.io/Portfolio/
 * Description: A helper plugin for WooCommerce functionality add leble and custom coupen.
 * Version: 1.0.0
*/
if(!defined('ABSPATH')){
    exit; //if any one tries to access this file directly, exit.
}
/**
 * Include the TGM_Plugin_Activation class.
 * 
 * Plugin:
 * define('RD_WOO_HELPER_TGM_DIR', plugin_dir_path(__FILE__) . 'inc/tgm-plugin-activation/');
 * require_once RD_WOO_HELPER_TGM_DIR . 'class-tgm-plugin-activation
 */

define('RD_WOO_HELPER_DIR', plugin_dir_path(__FILE__));
$wooHelper_includes = [
    'inc/rd-add-meta-box.php',
    'inc/rd-render-box.php',
    'inc/rd-save-meta-data.php',
    'inc/rd-show-data-front.php',
];
foreach($wooHelper_includes as $file){
    if(file_exists(RD_WOO_HELPER_DIR . $file)){
        require_once RD_WOO_HELPER_DIR . $file;
    }
}