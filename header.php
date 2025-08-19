<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Required Core Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/preloader/preloader.css">
  <!-- jQuery CDN -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/preloader/preloader.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Flow+Block&family=Flow+Circular&family=Flow+Rounded&family=Kenia&family=Nova+Slim&family=Trochut:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
  
  
    
  <?php
    // You can add or change the conditions here depending on your needs
    if (is_front_page()) {
      // Code for the front page
      ?>
      <?php
    } elseif (is_page('CGI')) {
      // Code for the woodwork page
    } elseif (is_page('Comics')) {
      // Code for the Comics page
      ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/bookblock/normalize.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/bookblock/demo.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/bookblock/book.css" />
      <script src="<?php echo get_template_directory_uri();?>/bookblock/modernizr.custom.js"></script>
      <?php
    } elseif (is_page('OVA')) {
      // Code for the OVA page
    } elseif (is_page('3D-Models')) {
      // Code for the 3D-Models page
      ?>
          
          <!-- The following libraries and polyfills are recommended to maximize browser support -->
          <!-- NOTE: you must adjust the paths as appropriate for your project -->
          
          <!--  REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
      <!--     <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> -->
      
          
          
          
          
          
          <!--  OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
      <!--     <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script> -->
      
          <!--  OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
      <!--     <script src="https://unpkg.com/resize-observer-polyfill@1.5.0/dist/ResizeObserver.js"></script> -->
          
          <!--  OPTIONAL: The :focus-visible polyfill removes the focus ring for some input types -->
          <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>
      <?php
    } elseif (is_page('Merch')) {
    // Code for the Merch page
    } elseif (is_page('Contact')) {
    // Code for the Contact page
    } elseif (is_page('Commissions')) {
    // Code for the Commissions page
    } else {
      // Code for all other pages
    }
  ?>	
  
  
  

<?php
      if (is_singular('post')) {
          // Code for single blog posts

      } elseif (is_singular('product')) {
          // Code for single product pages
   
      } elseif (is_singular('event')) {
          // Code for single event pages
       
      } else {
          // Code for all other single pages
    
      }
  ?>

</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'svg-icons' );?>





<div id="wrapper">
    <article class="col-12 mx-auto">