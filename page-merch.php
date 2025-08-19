<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>

<?php
$shop_header_banner_i = get_cs_option('shop_header_banner_i');
$shop_header_title_i = get_cs_option('shop_header_title_i');
$shop_header_excerpt_i = get_cs_option('shop_header_excerpt_i');
$shop_header_banner_ii = get_cs_option('shop_header_banner_ii');
$shop_header_title_ii = get_cs_option('shop_header_title_ii');
$shop_header_excerpt_ii = get_cs_option('shop_header_excerpt_ii');
$shop_header_banner_iii = get_cs_option('shop_header_banner_iii');
$shop_header_title_iii = get_cs_option('shop_header_title_iii');
$shop_header_excerpt_iii = get_cs_option('ova_header_excerpt_iii');
?> 



<div id="myCarousel" class="carousel slide my-0" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item">
<img class="bd-placeholder-img" aria-hidden="true" src="<?php echo esc_url($shop_header_banner_i); ?>" width="100%">

<div class="container">
<div class="carousel-caption text-center justify-content-center">
<h1><?php echo esc_html($shop_header_title_i); ?></h1>
<p><?php echo esc_html($shop_header_excerpt_i); ?></p>
<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
</div>
</div>
</div>
<div class="carousel-item">
<img class="bd-placeholder-img" aria-hidden="true" src="<?php echo esc_url($shop_header_banner_ii); ?>" width="100%">
<div class="container">
<div class="carousel-caption">
<h1><?php echo esc_html($shop_header_title_ii); ?></h1>
<p><?php echo esc_html($shop_header_excerpt_ii); ?></p>
<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
</div>
</div>
</div>
<div class="carousel-item active">
<img class="bd-placeholder-img" aria-hidden="true" src="<?php echo esc_url($shop_header_banner_iii); ?>" width="100%">
<div class="container">
<div class="carousel-caption text-center  justify-content-center">
<h1><?php echo esc_html($shop_header_title_iii); ?></h1>
<p><?php echo esc_html($shop_header_excerpt_iii); ?></p>
<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
</div>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>


<!-- Header -->

<div class="py-3 bg-dark">
<div class="container">
<div class="text-center justify-content-center">
<h1>Merchandise</h1>
</div>
</div>
</div>


<!-- Featured Product 1 -->

<section>
<div class="row col-12 m-0">
	
	
	<?php
	  $args = array(
		'post_type' => 'product', // Assuming 'photos' is your CPT 
		'posts_per_page' => 1,
		'order' => 'ASC', // Ascending order
		'orderby' => 'date' // Order by date
	  );
	  
	  $query = new WP_Query($args);
	  if ($query->have_posts()) : 
		while ($query->have_posts()) : $query->the_post();
	  ?>
	
	
<div class="col-12 col-lg-6" style="height:600px; background-position:center; background-size:cover; background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>');">
</div>

<div class="col-12 col-lg-6">
<div class="row align-items-center" style="height:600px;">
<div class="col-12 text-center">
<h1><?php the_title();?></h1>
<p class="lead"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
<p class="mt-4 mb-5"><a class="btn btn-secondary" href="#">Button</a></p>

<p>Follow us on</p>
<p>
<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-twitter" aria-hidden="true"></i></a>
<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-facebook" aria-hidden="true"></i></a>
<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-instagram" aria-hidden="true"></i></a>
<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-google" aria-hidden="true"></i></a>
</p>


<?php 
	endwhile; 
  endif; 
  wp_reset_postdata(); 
?>
</div><!-- col-12 -->
</div><!-- row -->
</div><!-- div -->
</div><!-- row -->
</section>

<!-- Featured Product 2 -->
<section>
<div class="row col-12 m-0">
	
	<div class="col-12 col-lg-6 order-2 order-lg-1">
	<div class="row align-items-center" style="height:600px;">
	<div class="col-12 text-center">
		
		<?php
		  $args = array(
			'post_type' => 'product', // Assuming 'photos' is your CPT 
			'posts_per_page' => 1,
			'order' => 'ASC', // Ascending order
			'offset' => '1',
			'orderby' => 'date' // Order by date
		  );
		  
		  $query = new WP_Query($args);
		  if ($query->have_posts()) : 
			while ($query->have_posts()) : $query->the_post();
		  ?>
		
	<h1><?php the_title();?></h1>
<p class="lead"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
	<p class="mt-4 mb-5"><a class="btn btn-secondary" href="#">Button</a></p>
	
	<p>Follow us on</p>
	<p>
	<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-twitter" aria-hidden="true"></i></a>
	<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-facebook" aria-hidden="true"></i></a>
	<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-instagram" aria-hidden="true"></i></a>
	<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
	<a href="https://www.froala.com" class="mx-2 text-secondary"><i class="fab fa-google" aria-hidden="true"></i></a>
	</p>
	</div><!-- col-12 -->
	</div><!-- row -->
	</div><!-- div -->
<div class="col-12 col-lg-6 order-1 order-lg-2" style="height:600px; background-position:center; background-size:cover; background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>');">
</div>
	<?php 
	endwhile; 
  endif; 
  wp_reset_postdata(); 
?>

</div><!-- row -->
</section>



<!-- All Products -->
<section class="fdb-block bg-dark">
	<div class="container">
		<div class="row text-center justify-content-center">
			<div class="col-8">
				<h1>All Products</h1>
			</div>
		</div>

		<div class="row text-center mt-5">
			<?php
			$args = array(
				'post_type' => 'product', // Change 'product' to your custom post type
				'posts_per_page' => 4, // Number of products to show
				'order' => 'ASC', // Ascending order
				  'orderby' => 'date' // Order by date
			);
			$loop = new WP_Query($args);
			if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
				$product_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the product image
				$product_category = wp_get_post_terms(get_the_ID(), 'category'); // Assuming 'category' is the taxonomy
				$product_category_name = !empty($product_category) ? $product_category[0]->name : 'No Category'; // Get first category name
			?>
				<div class="col-12 col-md-6 col-lg-3">
					<img alt="Product Image" class="img-fluid rounded" src="<?php echo esc_url($product_image); ?>">
					<h3><strong><?php the_title(); ?></strong></h3>
					<p><?php echo esc_html($product_category_name); ?></p>
					<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
				</div>
			<?php endwhile; else: ?>
				<p>No products found.</p>
			<?php endif; wp_reset_postdata(); ?>
		</div>

		<hr class="border-light">
		
		<div class="row text-center mt-5">
			<?php
			$args = array(
				'post_type' => 'product', // Change 'product' to your custom post type
				'offset' => '0',
				'posts_per_page' => 4, // Number of products to show
				'order' => 'ASC', // Ascending order
				  'orderby' => 'date' // Order by date
			);
			$loop = new WP_Query($args);
			if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
				$product_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the product image
				$product_category = wp_get_post_terms(get_the_ID(), 'category'); // Assuming 'category' is the taxonomy
				$product_category_name = !empty($product_category) ? $product_category[0]->name : 'No Category'; // Get first category name
			?>
				<div class="col-12 col-md-6 col-lg-3">
					<img alt="Product Image" class="img-fluid rounded" src="<?php echo esc_url($product_image); ?>">
					<h3><strong><?php the_title(); ?></strong></h3>
					<p><?php echo esc_html($product_category_name); ?></p>
					<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
				</div>
			<?php endwhile; else: ?>
				<p>No products found.</p>
			<?php endif; wp_reset_postdata(); ?>
		</div>
		
		
		
		
		
		

		<p class="mt-5 justify-content-center text-center"><a class="btn btn-lg btn-warning" href="<?php echo home_url();?>/all-products/">View All Products</a></p>
	</div>
</section>
<!-- End All Products -->




<!-- Start Shop Newsletter -->
<section class="fdb-block" style="background:transparent;">
<div class="container">
<div class="fdb-box">
<div class="row justify-content-center align-items-center">
<div class="col-12 col-lg-6">
<h2>Subscribe to Our Newsletter!</h2>
<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
</div>
<div class="col-12 col-lg-5 text-center">
<div class="input-group">
<input type="text" class="form-control" placeholder="First Name">
<input type="text" class="form-control" placeholder="Last Name">
</div>
<div class="input-group mt-4">
<input type="text" class="form-control" placeholder="Email Address">
<div class="input-group-append">
<button class="btn btn-warning" type="button">Submit</button>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
<!-- End Shop Newsletter -->



<!-- Start Mini Cart-->

<section class="fdb-block bg-dark pb-5">
<div class="container pb-5">
<div class="row text-center justify-content-center">
<div class="col-8">
<h1>Your Shopping Cart</h1>
</div>
</div>

<div class="row-70"></div>



<div class="row justify-content-center">
	
	<?php if (WC()->cart->is_empty()) : ?>
	<p class="text-center">Your cart is currently empty. <a href="#">Continue Shopping</a></p>
<?php else : ?>

		<?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) : 
			$product = $cart_item['data'];
			$product_id = $product->get_id();
			$product_name = $product->get_name();
			$product_price = $product->get_price();
			$product_image = wp_get_attachment_image_src($product->get_image_id(), 'thumbnail')[0] ?? '';
			$product_link = get_permalink($product_id);
			$quantity = $cart_item['quantity'];
			$product_categories = strip_tags(wc_get_product_category_list($product_id)); // Remove HTML from category links
			?>
		
			<div class="col-sm-3 m-sm-auto mx-lg-auto d-block">
				<div class="row align-items-center justify-content-center">
				<div class="col-4">
					<a href="<?php echo esc_url($product_link); ?>">
				<img alt="image" class="img-fluid rounded-circle" src="<?php echo esc_url($product_image); ?>"></div>
				</a>
				<div class="col-8">
				<h3 class="text-center"><?php echo esc_html($product_name); ?></h3>
				<p class="text-center">Category: <?php echo esc_html($product_categories); ?></p>
				<p class="text-center"><?php echo wc_price($product_price); ?> x <?php echo esc_html($quantity); ?></p>
				</div>
				</div>
				</div>
				
		<?php endforeach; ?>

<?php endif; ?>

	
	
	
	<?php
	/*
	
	<div class="cart-item">
	<a href="<?php echo esc_url($product_link); ?>">
		<img src="<?php echo esc_url($product_image); ?>" alt="<?php echo esc_attr($product_name); ?>">
	</a>
	<div class="cart-item-details">
		<a href="<?php echo esc_url($product_link); ?>">
			<h4><?php echo esc_html($product_name); ?></h4>
		</a>
		<p><?php echo wc_price($product_price); ?> x <?php echo esc_html($quantity); ?></p>
	</div>
</div>
	
	
	
	
	

*/
?>


</div>
</section>

<!-- End Mini Cart -->

<?php get_footer();?>