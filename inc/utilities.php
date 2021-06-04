<?php
// Custom Excerpt
if ( ! function_exists( 'custom_excerpt' ) ) {
    function custom_excerpt($post_id, $limit = 180, $separate = '...') {
        if( has_excerpt( $post_id ) ){
            $post_excerpt = strip_tags(get_the_excerpt($post_id));
            $post_excerpt = wp_strip_all_tags($post_excerpt);
        } else {
            $post_excerpt = strip_tags(get_the_excerpt($post_id));
            $post_excerpt = wp_strip_all_tags($post_excerpt);
            $post_excerpt = substr($post_excerpt, 0, $limit) . $separate;
        }
        return $post_excerpt;
    }
}
?>