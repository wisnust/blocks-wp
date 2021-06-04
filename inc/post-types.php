<?php
	
// post types
add_action( 'init', 'register_custom_post_types' );
function register_custom_post_types() {

	//==================================//
	// Events
	//=================================//
	register_post_type( 'events',
		array(
			'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' ),
                'add_new_item' => __('Add Event'),
                'edit_item' => __('Edit Event'),
                'new_item' => __('New Event'),
			),
			'public' => true,
			'publicly_queryable' => true,
            'menu_icon' => 'dashicons-media-text',
			'taxonomies' => array('events_categories'),
            'supports' => array('title', 'editor', 'author', 'excerpt', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes'),
			'show_ui' => true,
			'show_in_rest' => true,
        	'capability_type' => 'page',
			'has_archive' => 'events',
			'hierarchical' => false,
			'query_var' => true,
			'rewrite' => array( 
				'slug' => 'event',
                'with_front' => false,
			),
		)
	);
    
}

add_action( 'init', 'register_custom_taxonomy' );
function register_custom_taxonomy() {

	// Events Category
	register_taxonomy( 'events_categories', array( 'events' ),
		array(
			'labels' => array(
				'name' => __( 'Events Categories' ),
				'singular_name' => __( 'Events Category' ),
				'add_new_item' => __('Add New Events Category'),
				'edit_item' => __('Edit Events Category'),
				'new_item' => __('New Events Category'),
			),
			'public' => true,
			'publicly_queryable' => true,
			'hierarchical' => true,
			'has_archive' => true,
			'query_var' => true,
			'show_in_nav_menus' => false,
			'show_in_rest' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capabilities' => array( 'manage_terms', 'edit_terms', 'delete_terms', 'assign_terms'),
			'show_admin_column' => true,
			'rewrite' => array( 
				'slug' => 'events',
                'with_front' => false,
			),
		)
	);


}
?>