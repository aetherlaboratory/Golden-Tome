 <?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<div class="py-3 mb-3 bg-dark">
  <div class="container">
	  <div class="text-center justify-content-center">
		  <h1>Contact Us</h1>
	  </div>
  </div>
</div>
  <div class="row container px-0 mx-auto">
	<div class="container col-md-12 mx-auto px-3 px-lg-0">

	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 
		<?php the_content(); ?>
	  <?php endwhile; endif; ?>

	</div><!-- /.col-md-8 -->

	<div class="col-md-4">
	  <?php get_sidebar(); ?>
	</div><!-- /.col-md-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->
		


<?php get_footer();?>