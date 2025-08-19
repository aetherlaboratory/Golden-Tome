<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>

<div class="container-fluid mx-0 px-3 gx-0">
<div class="row">
<div class="col-10 mx-auto mx-lg-0 col-lg-7 mb-3">
<img style="max-width:700px;" class="figure rounded img-fluid mt-4" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">

<!-- Additional Product Images -->
<div class="row mt-2">

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="https://dummyimage.com/140x100/000/fff">
</div>

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="https://dummyimage.com/140x100/000/fff">
</div>

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="https://dummyimage.com/140x100/000/fff">
</div>

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="https://dummyimage.com/140x100/000/fff">
</div>

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="https://dummyimage.com/140x100/000/fff">
</div>

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="https://dummyimage.com/140x100/000/fff">
</div>

</div>
</div>




<!-- Post Summary -->
<div class="col-10 mx-auto mx-lg-0 col-lg-5">
<h1 class="display-5 mt-4"><?php the_title();?></h1>
<h2 class="my-3 text-success"><?php 
$product = wc_get_product( get_the_ID() );
echo wc_price( wc_get_price_to_display( $product ) );?></h2> <!-- Product Price -->
<p class="">
<?php the_content();?>
<br><br>

<div class="container">
  <div class="row">
   
    <div class="col">
      <?php
      /*
      <div class="mt-0">
        <label for="quantity" class="form-label">Quantity</label>
        <div class="col-4">
        <input type="number" id="quantity" class="form-control" min="1" max="100" value="1">
        </div>
      </div>
     
      <div class="mt-4 mb-5">
        <h5>Variations</h5>
        <div class="d-flex">
          <div class="me-3">
            <img class="rounded-circle img-fluid figure" src="https://dummyimage.com/50x50/e74c3c/fff" alt="color 1" style="width: 50px; height: 50px;">
          </div>
          <div class="me-3">
            <img class="rounded-circle img-fluid figure" src="https://dummyimage.com/50x50/3498db/fff" alt="color 2" style="width: 50px; height: 50px;">
          </div>
          <div class="me-3">
            <img class="rounded-circle img-fluid figure" src="https://dummyimage.com/50x50/f1c40f/fff" alt="color 3" style="width: 50px; height: 50px;">
          </div>
          <div class="me-3">
            <img class="rounded-circle img-fluid figure" src="https://dummyimage.com/50x50/2ecc71/fff" alt="color 4" style="width: 50px; height: 50px;">
          </div>
        </div>
      </div>
      */
      ?>
      <div class="mt-2">
       
       <?php
       $product = wc_get_product( get_the_ID() );
       
       if ( $product && $product->is_purchasable() && $product->is_in_stock() ) {
         ?>
         <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>"
            data-quantity="1"
            class="btn btn-lg btn-warning ajax_add_to_cart add_to_cart_button"
            data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
            data-product_sku="<?php echo esc_attr( $product->get_sku() ); ?>"
            aria-label="<?php echo esc_attr( $product->add_to_cart_description() ); ?>">
           <?php echo esc_html( $product->add_to_cart_text() ); ?>
         </a>
         <?php
       }
       ?>
      </div>
    </div>
  </div>
</div>




<div class="row ms-1 col-12 mt-5 mb-5 text-black">
<i class="fa-brands fs-2 fa-facebook col-auto"></i>
<i class="fa-brands fs-2 fa-twitter col-auto"></i>
<i class="fa-brands fs-2 fa-instagram col-auto"></i>
<i class="fa-brands fs-2 fa-snapchat col-auto"></i>
</div>

</div>
</div><!-- Row -->
</div>
<!-- Similar Products -->

<section class="fdb-block bg-dark pt-3">
<div class="container-fluid">
<div class="row text-center justify-content-center">
<div class="col-8">
<h1>Related Products</h1>
</div>
</div>

<div class="row text-center mt-5">


<?php
// Get the current post ID
$current_post_id = get_the_ID();

// Get current post categories (for related posts)
$categories = wp_get_post_terms($current_post_id, 'category', array('fields' => 'ids'));


// Query related posts
$args = array(
    'post_type'      => 'product', // Change this if you need a different post type
    'posts_per_page' => 4, // Number of related posts to show
    'post__not_in'   => array($current_post_id), // Exclude the current post
    'order' => 'DESC', // Ascending order
    'orderby' => 'date', // Order by date
    'tax_query'      => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => $categories,
        ),
    ),
);

$related_posts = new WP_Query($args);

// Check if there are related posts
if ($related_posts->have_posts()) :?>
<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>

<div class="col-2">
<img alt="image" class="img-fluid rounded" src="<?php the_post_thumbnail_url();?>">
<h3><strong><?php the_title(); ?></strong></h3>
<h5><?php 
$product = wc_get_product( get_the_ID() );
echo wc_price( wc_get_price_to_display( $product ) );?></h5>
</div>
<?php endwhile; ?>
</div>
<?php
wp_reset_postdata(); // Reset query
else :
echo '<p>No related posts found.</p>';
endif;
?>

</div>
</div>
</section>
<?php get_footer();?>