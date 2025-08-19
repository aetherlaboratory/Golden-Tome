<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-3s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-3s">

<div class="fdb-block bg-gold py-3 mb-3">
	<div class="row">
	<a class="col-1 mx-auto text-center" href="#">
		<img class="w-75" src="<?php bloginfo('template_url'); ?>/svg/landscape.svg"/><span class="fw-bold fs-5 text-dark">Landscapes</span></a>
	<a class="col-1 mx-auto text-center" href="#">
		<img class="w-75" src="<?php bloginfo('template_url'); ?>/svg/cityscape.svg"/><span class="fw-bold fs-5 text-dark">Cityscapes</span></a>
	<a class="col-1 mx-auto text-center" href="#">
		<img class="w-75" src="<?php bloginfo('template_url'); ?>/svg/scene.svg"/><span class="fw-bold fs-5 text-dark">Scenes</span></a>
		</div><!-- row -->
	</div>
	


<div class="row">
<?php
$args = array(
	'post_type'      => 'art2d', 
	'posts_per_page' => 6,
	'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
	'order'          => 'ASC', // Ascending order
	'orderby'        => 'date', // Order by date
	'tax_query'      => array( // Corrected tax_query structure
		array(
			'taxonomy' => 'category', // Taxonomy for categories
			'field'    => 'slug', // Using slug to identify the category
			'terms'    => 'background', // The category slug
		),
	),
);

		  $query = new WP_Query($args);?>
   <?php if ($query->have_posts()) : ?>
   <?php $counter = 0; // Initialize the counter ?>
   <?php while ($query->have_posts()) : $query->the_post(); ?>
   <?php $counter++; // Increment the counter ?>

<div class="card col-10 col-md-6 col-lg-4 mx-auto">
<a href="<?php the_permalink();?>"><img class="img-fluid figure" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>"/></a>
<div class="card-header">
	<div class="row align-items-baseline">
	<h2 class="col caption-title me-auto"><?php echo get_the_title(); ?></h2>
<div class="col text-end caption-category ms-auto">
	<?php
	$categories = get_the_category();
	if (!empty($categories)) {
	$category_names = array_map(function($cat) { return $cat->name; }, $categories);
	echo implode(', ', $category_names);
	}
	?></div>
</div><!-- row -->
</div><!-- card-header -->
<div class="card-body"><div class="caption"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></div></div>
<div class="card-footer"><div class="caption-date"><?php echo get_the_date('m/d/Y'); ?></div></div>
</div><!-- card -->
	





<?php /* if ($count % 3 == 0) : */ ?>




<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No Backgrounds found.</span>
</div>
<?php endif; ?>

</div>






<!--Pagination-->

<?php
if ($query->have_posts()) : 
// Calculate the total number of pages
$total_pages = $query->max_num_pages;

if ($total_pages > 1) {
$current_page = max(1, get_query_var('paged'));

echo '<nav class="mt-4 mb-5" aria-label="Page navigation example">';
echo '<ul class="mb-5 pagination pagination-lg justify-content-center">';

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





		




		
  <div class="mb-5 row container px-0 mx-auto">
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
