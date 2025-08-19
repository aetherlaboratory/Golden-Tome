<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-3s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-3s">


<div class="row">

	
	<?php
	$args = array(
	'post_type' => 'video', // Assuming 'photos' is your CPT
	'posts_per_page' => 16,
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	'order' => 'ASC', // Ascending order
	'orderby' => 'date' // Order by date
	);
	
			  $query = new WP_Query($args);?>
	   <?php if ($query->have_posts()) : ?>
	   <?php $counter = 0; // Initialize the counter ?>
	   <?php while ($query->have_posts()) : $query->the_post(); ?>
	   <?php $counter++; // Increment the counter ?>
	
	
	
	<div class="col-10 col-md-6 col-lg-3">
		  
		  <a href="<?php the_permalink();?>">
		<img alt="image" height="180" class="rounded w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
		  </a>
		
		
		
		<h3><strong><?php the_title();?></strong></h3>
	  </div>
	
	
	
	
	
	
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	<div class="mx-auto position-relative d-block text-center">
	<span>No Animation Videos.</span>
	</div>
	<?php endif; ?>
	
	
</div><!-- row -->
	
	
	
	
	
	<!--Pagination-->
	
	<?php
	if ($query->have_posts()) : 
	// Calculate the total number of pages
	$total_pages = $query->max_num_pages;
	
	if ($total_pages > 1) {
	$current_page = max(1, get_query_var('paged'));
	
	echo '<nav class="mt-4" aria-label="Page navigation example">';
	echo '<ul class="pagination pagination-lg justify-content-center">';
	
	$links = paginate_links(array(
	'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
	'format' => '?paged=%#%',
	'current' => $current_page,
	'total' => $total_pages,
	'type' => 'array',
	'prev_next' => true,
	'prev_text' => 'Prev',
	'next_text' => 'Next',
	));
	
	if (is_array($links)) {
	foreach ($links as $link) {
	// Check if the link is the current page
	if (strpos($link, 'current') !== false) {
	echo "<li class='page-item active' aria-current='page'><span class='page-link'>$link</span></li>";
	} else {
	// Wrap each link in <li> and apply 'page-item' class; also apply 'page-link' class to <a>
	echo "<li class='page-item'>" . str_replace('<a', '<a class="page-link"', $link) . "</li>";
	}
	}
	}
	
	echo '</ul>';
	echo '</nav>';
	}
	endif;
	?>
	
	
		
	
	
	
	
	
	




		
  <div class="row container px-0 mx-auto">
	<div class="container col-md-12 mx-auto px-0">

	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 
		<?php the_content(); ?>
	  <?php endwhile; endif; ?>

	</div><!-- /.col-md-8 -->

	<div class="col-md-4">
	  <?php get_sidebar(); ?>
	</div><!-- /.col-md-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
