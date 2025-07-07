<?php
/** 
* create a meta box for product badge
*
* @package rd-woo-helper 
*/
if(!defined('ABSPATH')){
    exit; 
}
//register the meta box
add_action('add_meta_boxes', 'rd_add_badge_meta_box');
if(!function_exists('rd_add_badge_meta_box')){
    function rd_add_badge_meta_box(){
        add_meta_box(
            'rd_badge_meta',
            __('Product Badge','woo-custom-product-badge'),
            'rd_render_badge_meta_box',
            'product',
            'side',
            'default',
        );
    }
} 