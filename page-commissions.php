 <?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>

<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-2s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-1s">




		




		
  <div class="row container px-0 mx-auto">
	<div class="container col-md-10 mx-auto px-0">
		<p class="lead">
		 Below is a quote form for Custom Artwork Commissions, all requested Art will be in digital format,
		  rendered using computer software and or Apple iPad Pro iOS software. While pencil/pen can and is 
		  often used, ultimately all work is to be finished in digital format and delivered via eMail.
		</p>
		<br>
		
<?php echo do_shortcode( '[gravityform id="2" title="false"]' );?>
<br>
<div class="w-100" style="height:10em;"></div>
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