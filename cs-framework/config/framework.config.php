<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'The Golden Tome <small>by Æ-Lab</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_pages',
  'title'  => 'Main Pages',
  'icon'   => 'fa fa-file'
);







// ------------------------------
// H O M E                      -
// ------------------------------
$options[]   = array(
  'name'     => 'home_section',
  'title'    => 'Home',
  'icon'     => 'fa fa-home',
  'fields'   => array(



        array(
      'id'      => 'home_header_banner',
      'type'    => 'upload',
      'title'   => 'Home Header Banner IMG',
      'desc'    => 'This is the Image banner for the top of the home page.',
                'help'    => 'An image that overall highlights your business, not personal or process.',
  
    ),
  
  
  array(
      'id'    => 'banner_video',
      'type'  => 'switcher',
      'title' => 'Banner IMG or Banner Video',
      'label' => 'Swap Banner with Video Banner',
       'help'  => 'Turnin this on will turn the Home Banner Image into a Video Instead of an Image.',
    ),
  
  
  
  array(
    'id'      => 'home_header_banner_video',
    'type'    => 'upload',
    'title'   => 'Home Header Banner Video',
    'desc'    => 'This is the Video banner for the top of the home page.',
              'help'    => 'A video that overall highlights your business, not personal or process.',
  
  ),
  
  
  array(
    'id'      => 'header_title',
    'type'    => 'text',
    'title'   => 'Header Title',
  ),
  
  
  
  array(
    'id'      => 'header_excerpt',
    'type'    => 'textarea',
    'title'   => 'Header Excerpt',
    'help'    => 'This is the excerpt for the header img/video',
  ),
  

   array(
    'id'          => 'merch_glider',
    'type'        => 'gallery',
    'title'       => 'Merch Glider',
    'desc'        => 'Images For Merch Glider.',
    'help'        => 'Try to use product Images with Detailed Imagery.',
    'add_title'   => 'Add Image(s)',
    'edit_title'  => 'Edit Image(s)',
    'clear_title' => 'Clear Image(s)',
  ),



  )
);







// ------------------------------
// C G I                        -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => 'CGI',
  'icon'     => 'fa fa-image',
  'fields'   => array(

   

  )
);









// ------------------------------
// C O M I C S                  -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => 'Comics',
  'icon'     => 'fa fa-book',
  'fields'   => array(

   

  )
);





// ------------------------------
// O V A                        -
// ------------------------------
$options[]   = array(
  'name'     => 'ova_section',
  'title'    => 'OVA',
  'icon'     => 'fa fa-film',
  'fields'   => array(

   
       array(
     'id'      => 'ova_header_banner',
     'type'    => 'upload',
     'title'   => 'OVA Header Banner Video',
     'desc'    => 'This is the Video banner for the top of the home page.',
               'help'    => 'Newest Animation/Animatic Video.',
   
   ),


   array(
     'id'      => 'ova_header_title',
     'type'    => 'text',
     'title'   => 'OVA Header Banner Title',
   ),
   // end: a field
   
   array(
     'id'      => 'ova_header_excerpt',
     'type'    => 'textarea',
     'title'   => 'OVA Header Banner Excerpt',
     'help'    => 'This option field is useful. You will love it!',
   ),


  )
);







// ------------------------------
// 3D  M O D E L S              -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => '3D Models',
  'icon'     => 'fa fa-rocket',
  'fields'   => array(

   

  )
);








// ------------------------------
// S H O P                      -
// ------------------------------
$options[]   = array(
  'name'     => 'shop_section',
  'title'    => 'Shop',
  'icon'     => 'fa fa-shopping-bag',
  'fields'   => array(



       array(
     'id'      => 'shop_header_banner_i',
     'type'    => 'upload',
     'title'   => 'Shop Header Banner IMG',
     'desc'    => 'This is the Image banner for the top of the home page.',
               'help'    => 'Newest Product Image.',
   
   ),
  
  
   array(
     'id'      => 'shop_header_title_i',
     'type'    => 'text',
     'title'   => 'Shop Header Banner Title',
   ),
   // end: a field
   
   array(
     'id'      => 'shop_header_excerpt_i',
     'type'    => 'textarea',
     'title'   => 'Shop Header Banner Excerpt',
     'help'    => 'This option field is useful. You will love it!',
   ),





 array(
      'id'      => 'shop_header_banner_ii',
      'type'    => 'upload',
      'title'   => 'Shop Header Banner IMG',
      'desc'    => 'This is the Image banner for the top of the home page.',
                'help'    => 'Newest Product Image.',
    
    ),
   
   
    array(
      'id'      => 'shop_header_title_ii',
      'type'    => 'text',
      'title'   => 'Shop Header Banner Title',
    ),
    // end: a field
    
    array(
      'id'      => 'shop_header_excerpt_ii',
      'type'    => 'textarea',
      'title'   => 'Shop Header Banner Excerpt',
      'help'    => 'This option field is useful. You will love it!',
    ),
    
    
    
    
     array(
          'id'      => 'shop_header_banner_iii',
          'type'    => 'upload',
          'title'   => 'Shop Header Banner IMG',
          'desc'    => 'This is the Image banner for the top of the home page.',
                    'help'    => 'Newest Product Image.',
        
        ),
       
       
        array(
          'id'      => 'shop_header_title_iii',
          'type'    => 'text',
          'title'   => 'Shop Header Banner Title',
        ),
        // end: a field
        
        array(
          'id'      => 'shop_header_excerpt_iii',
          'type'    => 'textarea',
          'title'   => 'Shop Header Banner Excerpt',
          'help'    => 'This option field is useful. You will love it!',
        ),
   


   

  )
);








// ------------------------------
// C O N T A C T                -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => 'Contact',
  'icon'     => 'fa fa-envelope',
  'fields'   => array(

   

  )
);

CSFramework::instance( $settings, $options );
