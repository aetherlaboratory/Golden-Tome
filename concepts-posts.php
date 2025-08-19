<?php
// Register Custom Post Type
function concept_post_type() {

	$labels = array(
		'name'                  => _x( 'Concepts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Concept', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Concepts', 'text_domain' ),
		'name_admin_bar'        => __( 'Concept', 'text_domain' ),
		'archives'              => __( 'Concept Archives', 'text_domain' ),
		'attributes'            => __( 'Concept Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Concept:', 'text_domain' ),
		'all_items'             => __( 'All Concepts', 'text_domain' ),
		'add_new_item'          => __( 'Add New Concept', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Concept', 'text_domain' ),
		'edit_item'             => __( 'Edit Concept', 'text_domain' ),
		'update_item'           => __( 'Update Concept', 'text_domain' ),
		'view_item'             => __( 'View Concept', 'text_domain' ),
		'view_items'            => __( 'View Concepts', 'text_domain' ),
		'search_items'          => __( 'Search Concept', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into concept', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this concept', 'text_domain' ),
		'items_list'            => __( 'Concepts list', 'text_domain' ),
		'items_list_navigation' => __( 'Concepts list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter concepts list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Concept', 'text_domain' ),
		'description'           => __( 'Concept videos, gif loops, and keyframes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'concept', $args );

}
add_action( 'init', 'concept_post_type', 0 );
?>