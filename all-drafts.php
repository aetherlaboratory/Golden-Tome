<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-3s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-3s">




		




		
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
