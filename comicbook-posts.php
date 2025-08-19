<?php
// Register Custom Post Type
function comicbook_post_type() {

	$labels = array(
		'name'                  => _x( 'Comic Books', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Comic Book', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Comic Books', 'text_domain' ),
		'name_admin_bar'        => __( 'Comic Book', 'text_domain' ),
		'archives'              => __( 'Comic Book Archives', 'text_domain' ),
		'attributes'            => __( 'Comic Book Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Comic Book:', 'text_domain' ),
		'all_items'             => __( 'All Comic Books', 'text_domain' ),
		'add_new_item'          => __( 'Add New Comic Book', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Comic Book', 'text_domain' ),
		'edit_item'             => __( 'Edit Comic Book', 'text_domain' ),
		'update_item'           => __( 'Update Comic Book', 'text_domain' ),
		'view_item'             => __( 'View Comic Book', 'text_domain' ),
		'view_items'            => __( 'View Comic Books', 'text_domain' ),
		'search_items'          => __( 'Search Comic Book', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Comic Book', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured comic book', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured comic book', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured comic book', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into comic book', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this comic book', 'text_domain' ),
		'items_list'            => __( 'Comic Books list', 'text_domain' ),
		'items_list_navigation' => __( 'Comic Books list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter comic books list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Comic Book', 'text_domain' ),
		'description'           => __( 'Comic Book videos, gif loops, and keyframes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'comicbook', $args );

}
add_action( 'init', 'comicbook_post_type', 0 );
?>