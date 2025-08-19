 <?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>

<!-- Header -->

<div class="py-1 bg-dark">
  <div class="container">
	  <div class="text-center justify-content-center">
		  <h1>Comic Books</h1>
	  </div>
  </div>
</div>
<!-- Description -->
<section class="bg-blk">
  <div class="container">
	<div class="row">
	  <div class="col-12">
		<h1>Read Our Collection Online!</h1>
		<p class="lead">
		  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by
		  their place and supplies it with the necessary regelialia.
		</p>
	  </div>
	</div>

  </div>
</section>

<!-- Comic Books -->
<div class="fdb-block" style="background:transparent;">

<div class="container">
<div class="row mt-5 mb-4">
<!-- Books -->

<?php
$args = array(
'post_type' => 'comicbook', // Assuming 'photos' is your CPT
'posts_per_page' => 4,
'order' => 'ASC', // Ascending order
'orderby' => 'date' // Order by date
);

$query = new WP_Query($args);?>
<?php if ($query->have_posts()) : $count = 0; ?>
<?php while ($query->have_posts()) : $query->the_post(); $count++; ?>

<div class="col-12 col-lg-3 mb-5">
<figure class='book mx-auto d-block'>

<!-- Front -->
<ul class='hardcover_front'>
<li style="background-size:cover;background-image: url('<?php echo the_post_thumbnail_url(); ?>');"><span class="ribbon">NEW</span><li>
<div>
</div></li><li></li></ul>

<!-- Pages -->
<ul class='page'>
<li></li><li>
<a class="w-75 btn d-block position-relative mx-auto" href="<?php echo the_permalink(); ?>">View</a>
</li><li></li><li></li><li></li></ul>
<!-- Back -->

<ul class='hardcover_back'>
<li></li><li></li></ul>
<ul class='book_spine'>
<li></li><li></li></ul>

</figure>
</div>








<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


</div><!-- Row -->
</div><!-- Container -->

</div>




<!-- Start Comic Book Newsletter -->
<section class="fdb-block mt-0 pt-0" style="background:transparent;">
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
<!-- End Comic Book Newsletter -->


<?php get_footer();?>