<?php 

// Register Custom Post Type
function foodstorm_post_type() {

	$labels = array(
		'name'                  => _x( 'Foodstorm Links', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Foodstorm Link', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Foodstorm Links', 'text_domain' ),
		'name_admin_bar'        => __( 'Foodstorm Links', 'text_domain' ),
		'archives'              => __( 'Link Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Link:', 'text_domain' ),
		'all_items'             => __( 'All Links', 'text_domain' ),
		'add_new_item'          => __( 'Add New Link', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Link', 'text_domain' ),
		'edit_item'             => __( 'Edit Link', 'text_domain' ),
		'update_item'           => __( 'Update Link', 'text_domain' ),
		'view_item'             => __( 'View Link', 'text_domain' ),
		'search_items'          => __( 'Search Link', 'text_domain' ),
		'not_found'             => __( 'Link Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Link Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Link Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Link featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Link featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Link featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into link', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this link', 'text_domain' ),
		'items_list'            => __( 'Links list', 'text_domain' ),
		'items_list_navigation' => __( 'Links list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter links list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Foodstorm Link', 'text_domain' ),
		'description'           => __( 'Foodstorm Link Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'foodstorm_links', $args );

}
add_action( 'init', 'foodstorm_post_type', 0 );