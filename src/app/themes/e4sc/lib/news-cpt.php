<?php
// Register Custom Post Type
function news_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'News', 'text_domain' ),
		'name_admin_bar'        => __( 'news', 'text_domain' ),
		'archives'              => __( 'News Archives', 'text_domain' ),
		'attributes'            => __( 'News Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent news:', 'text_domain' ),
		'all_items'             => __( 'All news', 'text_domain' ),
		'add_new_item'          => __( 'Add news', 'text_domain' ),
		'add_new'               => __( 'Add new', 'text_domain' ),
		'new_item'              => __( 'New news', 'text_domain' ),
		'edit_item'             => __( 'Edit news', 'text_domain' ),
		'update_item'           => __( 'Update news', 'text_domain' ),
		'view_item'             => __( 'View news', 'text_domain' ),
		'view_items'            => __( 'View news', 'text_domain' ),
		'search_items'          => __( 'Search news', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into news', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this news', 'text_domain' ),
		'items_list'            => __( 'News list', 'text_domain' ),
		'items_list_navigation' => __( 'News list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'News', 'text_domain' ),
		'description'           => __( 'News Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news_custom_post_type', 0 );