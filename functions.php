<?php
/**
 * Functions and definitions for the Golden Tome theme.
 *
 * @link https://ae-lab.io
 *
 * @package Mothership
 * @since 1.2
 */


 
require_once get_template_directory() .'/cs-framework/cs-framework.php';

function get_cs_option($option_name, $default = '') {
    $options = get_option('_cs_options');
    return !empty($options[$option_name]) ? $options[$option_name] : $default;
}

function custom_mime_types($mimes) {
    // Allow SVG files
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');




show_admin_bar(false);



 function gold_tome_setup() {
    load_theme_textdomain( 'gold_tome', get_template_directory() . '/languages' );
  }
  add_action( 'after_setup_theme', 'gold_tome_setup' );
  



  
  

function exclude_pages_from_search( $query ) {
  if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', array( 'post', 'product', 'art2d','art3d','comicbook','schematic','animation' ) ); // search both posts and products
  }
}
add_filter( 'pre_get_posts', 'exclude_pages_from_search' );


  
  
  
  
  function animation_deps() {
    wp_register_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, '' );
    wp_enqueue_style( 'animate-css' );
      
      
      
  
     
  }
  add_action( 'wp_enqueue_scripts', 'animation_deps' );
  
  



  function main_enq() {
    wp_register_style( 'main-css',  get_stylesheet_directory_uri() .'/style.css', false, '' );
    wp_enqueue_style( 'main-css' );

	
	wp_register_style( 'woo-css',  get_stylesheet_directory_uri() .'/woocommerce.css', false, '' );
	wp_enqueue_style( 'woo-css' );

   
    wp_register_script( 'main-js',  get_stylesheet_directory_uri() .'/script.js', true, '' );
    wp_enqueue_script( 'main-js' );
	
 wp_register_style( 'xxl',  get_stylesheet_directory_uri() .'/css/xxl.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'xxl' );

 wp_register_style( 'xl',  get_stylesheet_directory_uri() .'/css/xl.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'xl' );

   wp_register_style( 'lg',  get_stylesheet_directory_uri() .'/css/lg.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'lg' );

   wp_register_style( 'md',  get_stylesheet_directory_uri() .'/css/md.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'md' );


   wp_register_style( 'sm',  get_stylesheet_directory_uri() .'/css/sm.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'sm' );

 wp_register_style( 'xs',  get_stylesheet_directory_uri() .'/css/xs.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'xs' );
 
 
 wp_register_style( 'mobile',  get_stylesheet_directory_uri() .'/css/mobile.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'mobile' );
 
  wp_register_style( 'tablet',  get_stylesheet_directory_uri() .'/css/tablet.css', array( 'main-css' ), '' );
  wp_enqueue_style( 'tablet' );
 
 
 wp_register_style( 'laptop-desktop',  get_stylesheet_directory_uri() .'/css/laptop-desktop.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'laptop-desktop' );

 
 
   
  }
  add_action( 'wp_enqueue_scripts', 'main_enq' );



 function iconography() {

    wp_register_style( 'fontawesome',  get_stylesheet_directory_uri() .'/fonts/css/all.min.css', false, '1.1' );
    wp_enqueue_style( 'fontawesome' );

    wp_register_script( 'fa6pro-js',  get_stylesheet_directory_uri() .'/fonts/js/pro.min.js', true, '' );
    wp_enqueue_script( 'fa6pro-js' );

 }
 add_action( 'wp_enqueue_scripts', 'iconography' );


  function book_block() {
wp_register_style( 'book',  get_stylesheet_directory_uri() .'/bookblock/book.css', false, '' );
wp_register_style( 'normalize-bb',  get_stylesheet_directory_uri() .'/bookblock/normalize.css', false, '' );

	
}
add_action( 'wp_enqueue_scripts', 'book_block' );



  function enqueue_bootstrap() {
	  
wp_register_style( 'morph',  get_stylesheet_directory_uri() .'/bs/morph.bootstrap.min.css', false, '' );
    wp_enqueue_style( 'morph' );
      
wp_register_script( 'masonry-bs',  get_stylesheet_directory_uri() .'/bs/masonry.pkgd.min.js', array('main-js'), '1.0', true);
 wp_register_style( 'carousel-bs',  get_stylesheet_directory_uri() .'/bs/carousel.css', array( 'morph' ), '' );

  
	 wp_register_style( 'sidebars',  get_stylesheet_directory_uri() .'/bs/sidebars.css', array( 'morph' ), '' );
       // wp_enqueue_style( 'sidebars' );
	 wp_register_style( 'offcanvas-css',  get_stylesheet_directory_uri() .'/bs/offcanvas-navbar.css', array( 'morph' ), '' );
	 wp_register_script( 'offcanvas-js',  get_stylesheet_directory_uri() .'/bs/offcanvas-navbar.js', true, '' );

	wp_register_script( 'bundle-bs',  get_stylesheet_directory_uri() .'/bs/bootstrap.bundle.min.js', array('main-js'), '1.0', true);
	wp_enqueue_script( 'bundle-bs' );
	//wp_register_script( 'modernizr-custom',  get_template_directory_uri() .'/bs/modernizr.custom.js', array(), false, true );
	wp_register_script( 'popper-bs',  get_stylesheet_directory_uri() .'/bs/popper.min.js', true, '' );
	wp_register_script( 'glide-js',  get_stylesheet_directory_uri() .'/js/glide/glide.min.js', true, '' );	;
	 wp_register_style( 'glide-core',  get_stylesheet_directory_uri() .'/js/glide/glide.core.min.css', false, '' );
	 wp_register_style( 'glide-theme',  get_stylesheet_directory_uri() .'/js/glide/glide.theme.min.css', false, '' );

	
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );



  function enqueue_fdb() {
    wp_register_style( 'fdb', get_stylesheet_directory_uri() .'/fdb/froala_blocks.min.css', array('morph') );
    wp_enqueue_style( 'fdb' );
  

}
add_action( 'wp_enqueue_scripts', 'enqueue_fdb' );




function video_player() {
wp_register_style( 'normalize-vp',  get_stylesheet_directory_uri() .'/js/video-player/normalize.css', array( 'main-css' ), '' );
wp_register_style( 'demo-vp',  get_stylesheet_directory_uri() .'/js/video-player/demo.css', array( 'main-css' ), '' );
wp_register_style( 'icons-vp',  get_stylesheet_directory_uri() .'/js/video-player/icons.css', array( 'main-css' ), '' );
wp_register_style( 'style6-vp',  get_stylesheet_directory_uri() .'/js/video-player/style6.css', array( 'main-css' ), '' );
wp_register_script( 'cgi-js',  get_template_directory_uri() .'/cgi.js', array('jquery'), '1.0', true);
wp_register_script( 'modernizr-custom-vp',  get_template_directory_uri() .'/js/video-player/modernizr.custom.js', false, '' );
wp_register_script( 'border-menu-vp',  get_stylesheet_directory_uri() .'/js/video-player/borderMenu.js', array('modernizr-custom-vp'), '1.0', true);
wp_register_script( 'classie-vp',  get_stylesheet_directory_uri() .'/js/video-player/classie.js',  array('modernizr-custom-vp'), '1.0', true);
wp_register_script( 'video-player-js',  get_stylesheet_directory_uri() .'/js/video-player/vp-script.js',  array('modernizr-custom-vp'), '1.0', true);


}
add_action( 'wp_enqueue_scripts', 'video_player' );



//  function () {
//       
//       wp_register_style( '',  get_stylesheet_directory_uri() .'/', array( 'main-css' ), '' );
//      wp_register_script( '',  get_template_directory_uri() .'/', false, '' );
//      	wp_register_script( '',  get_stylesheet_directory_uri() .'', array(''), '1.0', true);
//
//       
//  }
//add_action( 'wp_enqueue_scripts', '' );





function home_styles() {
    // only enqueue on site's index page
    if ( is_front_page() ) {
         wp_enqueue_style( 'book' );
         wp_enqueue_style( 'normalize-bb' );
  	wp_enqueue_script( 'masonry-bs' );
    

    wp_enqueue_script( 'glide-js' );
    wp_enqueue_style( 'glide-core' );
  wp_enqueue_style( 'glide-theme' );
    }
}
add_action( 'wp_enqueue_scripts', 'home_styles' );

function cgi_styles() {
    // only enqueue on site's index page
    if ( is_page( 'CGI' ) ) {

  wp_enqueue_style( 'nivoslider-css' );
wp_enqueue_style( 'light-ns' );
 wp_enqueue_script( 'jquery-ns' );
 wp_enqueue_script( 'nivoslider-js' );
 wp_enqueue_script( 'jquery' );
 wp_enqueue_script( 'cgi-js' );
    }
}
add_action( 'wp_enqueue_scripts', 'cgi_styles' );

function comics_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Comics' ) ) {

              wp_enqueue_style( 'book' );
     wp_enqueue_style( 'normalize-bb' );
wp_enqueue_script( 'masonry-bs' );
       
   }
}
add_action( 'wp_enqueue_scripts', 'comics_styles' );






function ova_styles() {
// only enqueue on site's index page
if ( is_page( 'OVA' ) ) {
// wp_enqueue_style( 'normalize-vp' );
// wp_enqueue_style( 'demo-vp' );
// wp_enqueue_style( 'icons-vp' );
// wp_enqueue_style( 'style6-vp' );
// wp_enqueue_script( 'modernizr-custom-vp' );
// wp_enqueue_script( 'border-menu-vp' );
// wp_enqueue_script( 'classie-vp' );
// wp_enqueue_script( 'video-player-js' );
}
}
add_action( 'wp_enqueue_scripts', 'ova_styles' );

function merch_styles() {
// only enqueue on site's index page
if ( is_page( 'Merch' ) ) {

 wp_enqueue_style( 'carousel-bs' );

}
}
add_action( 'wp_enqueue_scripts', 'merch_styles' );
//
function about_styles() {
   // only enqueue on site's index page
   if ( is_page( 'About' ) ) {

          wp_enqueue_script( 'glide-js' );
    wp_enqueue_style( 'glide-core' );
  wp_enqueue_style( 'glide-theme' );
       
   }
}
add_action( 'wp_enqueue_scripts', 'about_styles' );
//
//
//
//
//
//
//
//
//
//
//
//
//
//function enqueue_account_page_styles() {
//  if ( is_account_page() ) {
//
//  }
//}
//add_action( 'wp_enqueue_scripts', 'enqueue_account_page_styles' );
//
//









  function site_menus() {
      
   wp_register_style( 'main-menu',  get_stylesheet_directory_uri() .'/menu.css', false, '' );
   wp_enqueue_style( 'main-menu' );
   
    wp_register_script( 'menu-js',  get_stylesheet_directory_uri() .'/menu.js', true, '' );
    wp_enqueue_script( 'menu-js' );
      
  
  }
  add_action( 'wp_enqueue_scripts', 'site_menus' );









function gold_tome_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'gold_tome_add_woocommerce_support' );


// Require the Likes/Dislikes related functions
require_once get_template_directory() . '/mothership-likes-dislikes-functions.php';








add_action( 'init', 'remove_woocommerce_breadcrumbs' );
function remove_woocommerce_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}




remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'custom_product_description', 20 );

function custom_product_description() {
    global $product;
    echo '<p class="single-summary">' . apply_filters( 'woocommerce_product_description', $product->get_description() ) . '</p>';
}

add_filter( 'woocommerce_short_description', '__return_false' );



add_filter( 'woocommerce_product_tabs', 'remove_product_tabs', 98 );
function remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );
    unset( $tabs['additional_information'] );
    unset( $tabs['reviews'] );
    return $tabs;
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );







//function remove_error_404_class( $classes ) {
//  if ( is_404() ) {
//    $classes = array_diff( $classes, array( 'error404' ) );
//  }
//  return $classes;
//}
//add_filter( 'body_class', 'remove_error_404_class', 20 );



// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');



add_filter( 'get_template_part_preloader/preloader', 'my_custom_template_part_preloader' );

function my_custom_template_part_preloader( $file ) {
    $file = 'preloader/preloader.php';
    return $file;
}


require_once get_template_directory() .'/2d-posts.php';
require_once get_template_directory() .'/characters-posts.php';
require_once get_template_directory() .'/concepts-posts.php';
require_once get_template_directory() .'/wallpaper-posts.php';


require_once get_template_directory() .'/ova-posts.php';
require_once get_template_directory() .'/comicbook-posts.php';
require_once get_template_directory() .'/schematic-posts.php';
require_once get_template_directory() .'/3d-posts.php';



function change_media_menu_position( $menu_order ) {
    $media_menu_slug = 'upload.php';

    // Remove the media menu item from the existing menu order
    $menu_order = array_diff( $menu_order, array( $media_menu_slug ) );

    // Define the position you want to insert the media menu item
    $insert_after_position = 8; // Adjust this number to the desired position - 1

    // Split the menu order into two parts, before and after the desired position
    $before_position = array_slice( $menu_order, 0, $insert_after_position );
    $after_position  = array_slice( $menu_order, $insert_after_position );

    // Add the media menu item to the new position and merge the menu order
    $new_menu_order = array_merge( $before_position, array( $media_menu_slug ), $after_position );

    return $new_menu_order;
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'change_media_menu_position' );



require_once get_template_directory() .'/cart-counter.php';

require_once get_template_directory() .'/widgets.php';






	
	
	

//*** CREATES PAGINATION FOR SUBCATEGORY PAGES ***/
function subcategory_pagination_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_tax('product_cat')) {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $term_id = get_queried_object_id();
        
        $query->set('post_type', 'product');
        $query->set('posts_per_page', 12);
        $query->set('paged', $paged);
        $query->set('tax_query', array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'term_id',
                'terms' => $term_id
            )
        ));
    }
}
add_action('pre_get_posts', 'subcategory_pagination_pre_get_posts');



function my_custom_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if (($paged >= 2 || $page >= 2) && !is_404()) {
        $title = "$title $sep " . sprintf(__('Page %s', 'goldentome'), max($paged, $page));
    }

    return $title;
}
add_filter('wp_title', 'my_custom_wp_title', 10, 2);



require_once get_template_directory() .'/gravityforms-bootstrap.php';




