<?php
// Register Custom Post Type
function art2d_post_type() {

	$labels = array(
		'name'                  => _x( '2D Artwork', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( '2D Art', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( '2D Artwork', 'text_domain' ),
		'name_admin_bar'        => __( '2D Art', 'text_domain' ),
		'archives'              => __( '2D Art Archives', 'text_domain' ),
		'attributes'            => __( '2D Art Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent 2D Art:', 'text_domain' ),
		'all_items'             => __( 'All 2D Artwork', 'text_domain' ),
		'add_new_item'          => __( 'Add New 2D Art', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New 2D Art', 'text_domain' ),
		'edit_item'             => __( 'Edit 2D Art', 'text_domain' ),
		'update_item'           => __( 'Update 2D Art', 'text_domain' ),
		'view_item'             => __( 'View 2D Art', 'text_domain' ),
		'view_items'            => __( 'View 2D Artwork', 'text_domain' ),
		'search_items'          => __( 'Search 2D Art', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured 2D Art', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured 2d art', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured 2d art', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured 2d art', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into 2d art', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this 2d art', 'text_domain' ),
		'items_list'            => __( '2D Artwork list', 'text_domain' ),
		'items_list_navigation' => __( '2D Artwork list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter 2d artwork list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( '2D Art', 'text_domain' ),
		'description'           => __( '2D Artwork and Brands that i have designed', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'art2d', $args );

}
add_action( 'init', 'art2d_post_type', 0 );
?>