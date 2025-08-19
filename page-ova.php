 <?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>

<?php
$ova_header_banner = get_cs_option('ova_header_banner');
$ova_header_title = get_cs_option('ova_header_title');
$ova_header_excerpt = get_cs_option('ova_header_excerpt');
?> 
 
 




<article style="min-height:870px; ">
<div class="fdb-block text-center" style="background-image:url(<?php echo esc_url($ova_header_banner); ?>); background-size:cover;">

	<h1 class="display-5 fw-bold"><?php echo esc_html($ova_header_title); ?></h1>
	<div class="col-lg-6 mx-auto">
	  <p class="lead mb-4"><?php echo esc_html($ova_header_excerpt); ?></p>
	  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
		<button type="button" class="btn btn-warning btn-lg px-4 gap-3">Play Video</button>
		<button type="button" class="btn btn-outline-warning btn-lg px-4">Explore</button>
	  </div>
	</div>
  </div>






<!-- Header -->
<div class="py-3 my-0 bg-dark">
<div class="container py-0 my-0">
<div class="text-center justify-content-center">
<h1>Animation & Videos</h1>
</div>
</div>
</div>
<!-- End Header -->


<!-- Animations -->
<section class="fdb-block bg-light text-dark" style="position:initial;">
  <div class="container">
	<div class="row text-center">
	  <div class="col-12">
		<h1>Animation Loops & Animatics</h1>
		<p class="lead"><a href="<?php echo home_url();?>/all-animations/">See all Animations <i class="fas fa-angle-right"></i></a>
		</p>
	  </div>
	</div>

	<div class="row text-center justify-content-center mt-5">
		
		<?php
		$args = array(
		'post_type' => 'video', // Assuming 'photos' is your CPT
		'posts_per_page' => 4,
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
		'order' => 'ASC', // Ascending order
		'orderby' => 'date' // Order by date
		);
		
		$query = new WP_Query($args);?>
		<?php if ($query->have_posts()) : $count = 0; ?>
		<?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
		
	  <div class="col-10 col-md-6 col-lg-3">
		  
		  <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal<?php echo $count; ?>" data-video-url="
			  <?php 
$meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true );
echo $meta_data['video_url'];
?>">
		<img alt="image" height="180" class="rounded w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
		  </a>
		
		
		
		<h3><strong><?php the_title();?></strong></h3>
	  </div>

	  <?php endwhile; ?>
	  <?php endif; ?>
	  <?php wp_reset_postdata(); ?>
	

	  
	</div>
  </div>
</section>

<!-- Timelapses -->
<section class="fdb-block bg-dark style="position:initial;">
  <div class="container">
	<div class="row text-center">
	  <div class="col-12">
		<h1>Timelapses</h1>
		<p class="lead"><a href="<?php echo home_url();?>/all-timelapses/">See all Timelapses <i class="fas fa-angle-right"></i></a>
		</p>
	  </div>
	</div>

	<div class="row text-center justify-content-center mt-5">
	<?php
	$args = array(
	'post_type' => 'video', // Assuming 'photos' is your CPT
	'posts_per_page' => 4,
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	'order' => 'ASC', // Ascending order
	'orderby' => 'date' // Order by date
	);
	
	$query = new WP_Query($args);?>
	<?php if ($query->have_posts()) : $count = 0; ?>
	<?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
	
  <div class="col-10 col-md-6 col-lg-3">
	  
	  <a href="#" data-bs-toggle="modal" data-bs-target="#timelapseModal<?php echo $count; ?>" data-video-url="
		  <?php 
$meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true );
echo $meta_data['video_url'];
?>">
	<img alt="image" height="180" class="rounded w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
	  </a>
	
	
	
	<h3><strong><?php the_title();?></strong></h3>
  </div>

  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
	</div>
  </div>
</section>






<!-- Tutorials -->
<section class="fdb-block bg-light text-dark" style="position:initial;">
  <div class="container">
	<div class="row text-center">
	  <div class="col-12">
		<h1>Tutorials</h1>
		<p class="lead"><a href="<?php echo home_url();?>/all-tutorials/">See all Tutorials <i class="fas fa-angle-right"></i></a>
		</p>
	  </div>
	</div>

	<div class="row text-center justify-content-center mt-5">
	 <?php
	 $args = array(
	 'post_type' => 'video', // Assuming 'photos' is your CPT
	 'posts_per_page' => 4,
	 'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	 'order' => 'ASC', // Ascending order
	 'orderby' => 'date' // Order by date
	 );
	 
	 $query = new WP_Query($args);?>
	 <?php if ($query->have_posts()) : $count = 0; ?>
	 <?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
	 
   <div class="col-10 col-md-6 col-lg-3">
	   
	   <a href="#" data-bs-toggle="modal" data-bs-target="#tutorialModal<?php echo $count; ?>" data-video-url="
		   <?php 
$meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true );
echo $meta_data['video_url'];
?>">
	 <img alt="image" height="180" class="rounded w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
	   </a>
	 
	 
	 
	 <h3><strong><?php the_title();?></strong></h3>
   </div>

   <?php endwhile; ?>
   <?php endif; ?>
   <?php wp_reset_postdata(); ?>
	</div>
  </div>
</section>





</article>



<!-- Start OVA Newsletter -->
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
<!-- End OVA Newsletter -->



<?php get_footer();?>