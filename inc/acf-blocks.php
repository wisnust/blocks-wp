<?php
	
// ACF Blocks

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists('acf') ) {
    $acf_dir = ABSPATH . 'wp-content/plugins/advanced-custom-fields-pro/';
    include_once( $acf_dir . '/acf.php' );
}

/**
 * Register Blocks WP Block Category
 */
function blocks_wp_block_categories( $categories, $post ) {
	return array_merge(
		array(
			array(
				'slug' => 'blocks_wp',
				'title' => __( 'Blocks WP Blocks', 'blocks_wp' ),
				'icon'  => 'chart-area',
			),
		),
		$categories
		
	);
}
add_filter( 'block_categories', 'blocks_wp_block_categories', 10, 2 );

function register_acf_block_types() {

    // Block Slider Post
    acf_register_block_type(array(
        'name'              => 'slider-post',
        'title'             => __('Slider Post'),
        'description'       => __('Used to display Slider Post block'),
        'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/SliderPost.php',
        'mode'              => 'edit',
        'supports'          => array('align' => false),
        'category'          => 'blocks_wp',
        'icon'              => 'excerpt-view',
        'keywords'          => array( 'slider', 'post' )
    ));

    
}
add_action('acf/init', 'register_acf_block_types');

add_filter('acf/settings/load_json', 'register_acf_json_load_point');

function register_acf_json_load_point( $paths ) {

    // Change to Theme
    $path = get_stylesheet_directory() . '/acf-json';

    // append path
    $paths[] = $path;

    // return
    return $paths;
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // return
    return $path;
}