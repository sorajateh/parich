<?php 

if (!function_exists('get_meta_title')) {
    function get_meta_title() {
        if (is_home() || is_front_page() ) {
            $title = get_bloginfo('name');
        } else {
            $title = get_the_title();
        }
        return $title;
    }
}

if (!function_exists('get_meta_image')) {
    function get_meta_image() {
        global $post;
        $post_thumb = get_post_thumbnail_id( $post->ID );
        if ( $post_thumb ) {
            $post_thumb_src = wp_get_attachment_image_src( $post_thumb, 'featured-post-thumb');
            $thumb = $post_thumb_src[0]; 
        }
        else {
            $thumb = get_template_directory_uri() . '/images/pr-share-image.jpg';  
        }   
        return $thumb;
    }
}

if (!function_exists('get_meta_description')) {
    function get_meta_description() {
        global $post;
        $excerpt = $post->post_excerpt;
        $meta_desc = get_post_meta($post->ID, 'parich_meta_desc', true);
        if ( $excerpt ) {
            $description = $post->post_excerpt;
        }
        else if ( $meta_desc ) {
            $description = $meta_desc;
        }
        else {
            $description = get_bloginfo('description');
        }
        return $description;
    }
}

if (!function_exists('get_meta_keywords')) {
    function get_meta_keywords() {
        if ( is_single() || is_page() ) {
            $keywords = get_post_meta(get_the_ID(), 'parich_meta_keywords', true);
            if (empty($keywords)) {
                $keywords = get_bloginfo('name'); 
            }
        }
        else {
            $keywords = get_the_title();
        }
        return $keywords;
    }
}

if (!function_exists('get_line_qr_code')) {
    function get_line_qr_code() {
        return '<div class="line-qr-code">
                        <h4 style="margin: 8px 0;">ติดตามเราได้ที่<br/>Official Line ID <span class="color-parich" >@parich</span></h4><h5 style="margin-bottom: 8px; color: #666">หรือ ใช้ QR code อันนี้เพื่อ add เป็นเพื่อน</h5>
                        <img style="width: 250px; display: block;" src="'. get_template_directory_uri() .'/images/line-qr-code.png" />
                </div>';
    }
}