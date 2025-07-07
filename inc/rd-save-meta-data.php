<?php
    if(!defined('ABSPATH')){
        exit;
    }
    //save the badge meta box data
    add_action('save_post', 'rd_save_badge_meta_box_data');
    if(!function_exists('rd_save_badge_meta_box_data')){
        /**
         * Save the badge meta box data
         *
         * @param int $post_id The post ID.
         */
        function rd_save_badge_meta_box_data($post_id){
            if(!isset($_POST['rd_nonce']) || !wp_verify_nonce($_POST['rd_nonce'], 'rd_save_meta_box')){
                return;
            }
            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
                return;
            if(isset($_POST['post_type']) && 'product' === $_POST['post_type'] && current_user_can('edit_post', $post_id)){
                $badge = sanitize_text_field($_POST['rd_badge']);
                update_post_meta($post_id, '_rd_product_badge', $badge);
            }
        }
    }