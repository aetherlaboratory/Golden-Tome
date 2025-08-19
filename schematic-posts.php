<?php
// Register Custom Post Type
function schematic_post_type() {

	$labels = array(
		'name'                  => _x( 'Schematics', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Schematic', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Schematics', 'text_domain' ),
		'name_admin_bar'        => __( 'Schematic', 'text_domain' ),
		'archives'              => __( 'Schematic Archives', 'text_domain' ),
		'attributes'            => __( 'Schematic Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Schematic:', 'text_domain' ),
		'all_items'             => __( 'All Schematics', 'text_domain' ),
		'add_new_item'          => __( 'Add New Schematic', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Schematic', 'text_domain' ),
		'edit_item'             => __( 'Edit Schematic', 'text_domain' ),
		'update_item'           => __( 'Update Schematic', 'text_domain' ),
		'view_item'             => __( 'View Schematic', 'text_domain' ),
		'view_items'            => __( 'View Schematics', 'text_domain' ),
		'search_items'          => __( 'Search Schematic', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Schematic', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured schematic', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured schematic', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured schematic', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into schematic', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this schematic', 'text_domain' ),
		'items_list'            => __( 'Schematics list', 'text_domain' ),
		'items_list_navigation' => __( 'Schematics list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter schematics list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Schematic', 'text_domain' ),
		'description'           => __( 'Schematics, Blueprints, Concept Art, Character Design, Prop Design, and Background Design', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-layout',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'schematic', $args );

}
add_action( 'init', 'schematic_post_type', 0 );
?>