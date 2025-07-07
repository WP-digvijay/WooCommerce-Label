<?php
    if(!defined('ABSPATH')){
        exit;
    }
    //show badge single product page top of title
    add_action('woocommerce_single_product_summary', 'rd_show_product_badge' , 5);
    if(!function_exists('rd_show_product_badge')){
        /**
         * Show the product badge on single product page
         */
        function rd_show_product_badge(){
            global $post;
            $badge = get_post_meta($post->ID, '_rd_product_badge', true);
            // echo '<h1 class="rd-badge">'.$badge.'</h1>';
            if($badge && $badge !== 'none'){
                echo '<div class="rd-product-badge" style="background:#e91e63;color:white;padding:5px 10px;border-radius:5px;margin-bottom:10px;display:inline-block;">'.esc_html($badge).'</div>';
            }
        }
    }