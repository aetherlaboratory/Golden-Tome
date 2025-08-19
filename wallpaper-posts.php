<?php
// Register Custom Post Type
function wallpaper_post_type() {

	$labels = array(
		'name'                  => _x( 'Wallpapers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Wallpaper', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Wallpapers', 'text_domain' ),
		'name_admin_bar'        => __( 'Wallpaper', 'text_domain' ),
		'archives'              => __( 'Wallpaper Archives', 'text_domain' ),
		'attributes'            => __( 'Wallpaper Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Wallpaper:', 'text_domain' ),
		'all_items'             => __( 'All Wallpapers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Wallpaper', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Wallpaper', 'text_domain' ),
		'edit_item'             => __( 'Edit Wallpaper', 'text_domain' ),
		'update_item'           => __( 'Update Wallpaper', 'text_domain' ),
		'view_item'             => __( 'View Wallpaper', 'text_domain' ),
		'view_items'            => __( 'View Wallpapers', 'text_domain' ),
		'search_items'          => __( 'Search Wallpaper', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into wallpaper', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this wallpaper', 'text_domain' ),
		'items_list'            => __( 'Wallpapers list', 'text_domain' ),
		'items_list_navigation' => __( 'Wallpapers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter wallpapers list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Wallpaper', 'text_domain' ),
		'description'           => __( 'Wallpaper videos, gif loops, and keyframes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cover-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'wallpaper', $args );

}
add_action( 'init', 'wallpaper_post_type', 0 );
?>