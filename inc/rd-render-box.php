<?php
    if(!defined('ABSPATH')){
        exit;
    }

    //render badge meta box html
    if(!function_exists('rd_render_badge_meta_box')){
        /**
         * Render the badge meta box
         *
         * @param WP_Post $post The post object.
         */
        function rd_render_badge_meta_box($post){
            wp_nonce_field('rd_save_meta_box', 'rd_nonce');
            $selected = get_post_meta($post->ID, '_rd_product_badge' , true);
            $badges = ['none','Hot Deal', 'Best Seller', 'New Arrival'];
            echo '<label for="rd_product_badge">'.__('select product badge', 'woo-custom-product-badge').'</lable>';
            echo '<select name= "rd_badge" id="rd_product_badge" style="width: 100%; padding: 5px; margin-top: 10px;">';
            foreach($badges as $badge){
                $selected_Attr = ($selected == $badge) ? 'selected' : '';
                echo '<option value="'.$badge.'" '.$selected_Attr.'>'.$badge.'</option>';
            }
            echo '</select>';
        }
    }