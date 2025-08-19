<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<!-- Header -->

<div class="py-3 bg-dark">
  <div class="container">
      <div class="text-center justify-content-center">
          <h1>Digital Artwork</h1>
      </div>
  </div>
</div>

<!-- START THUMBNAIL GALLERY -->
<div class="container-fluid w-100 mx-auto px-0">
<div class="row mx-0 px-0 gx-0">
<div class="col-12 col-lg-7 mx-0 px-0 gx-0">
  <?php
  $args = array(
  'post_type' => 'art2d', // Assuming 'photos' is your CPT
  'posts_per_page' => 1,
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'order' => 'ASC', // Ascending order
  'orderby' => 'date' // Order by date
  );
  
  $query = new WP_Query($args);?>
  <?php if ($query->have_posts()) : $count = 0; ?>
  <?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
<a href="#" data-bs-toggle="modal" data-bs-target="#cgi-modal"><img class="w-100 main-image" width="750" height="630" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>);"></a>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
<!-- End Main IMG -->
<div class="col-12 col-lg-5 gx-0 mx-0 px-0">
<!-- Thumbnail Container -->
<div class="row w-100 mx-0 px-0 bg-dark thumnail-container">
  
  
  
  <?php
  $args = array(
  'post_type' => 'art2d', // Assuming 'photos' is your CPT
  'posts_per_page' => 9,
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'order' => 'ASC', // Ascending order
  'orderby' => 'date' // Order by date
  );
  
  $query = new WP_Query($args);?>
  <?php if ($query->have_posts()) : $count = 0; ?>
  <?php while ($query->have_posts()) : $query->the_post(); $count++; ?>
  
<div class="col-4 gx-0 mx-0 px-0">   
<img class="w-100 thumbnail" width="250" height="210" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


</div>  <!-- Thumbnail Row -->
</div> <!-- End Thumbnail Container -->
</div> <!-- Row -->
</div><!-- Container-Fluid -->
<!-- END THUMBNAIL GALLERY -->



<!-- Start Separator -->
<section class="bg-warning">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1><i class="fa-solid fa-paintbrush-pencil"></i> All Categories</h1>
      </div>
    </div>
  </div>
</section>
<!-- End Separator -->



<!-- Start Categories -->
<section class="fdb-block bg-dark">
  <div class="container">

    <div class="row text-center justify-content-center mt-5">
      
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?php echo home_url();?>/all-characters/">
       <i class="fs-1 fa-solid fa-people text-light""></i>
        <h3 class="text-light"><strong>Character Designs</strong></h3>
        <p>Far far away, behind the word mountains, far from the countries</p>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-sm-0">
        <a href="<?php echo home_url();?>/all-backgrounds/">
        <i class="fs-1 fa-solid fa-mountain-sun text-light"></i>
        <h3 class="text-light"><strong>Background Designs</strong></h3>
        <p>Separated they live in Bookmarksgrove right at the coast</p>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-lg-0">
        <a href="<?php echo home_url();?>/all-items/">
        <i class="fs-1 fa-solid fa-swords text-light""></i>
        <h3 class="text-light"><strong>Weapon & Props</strong></h3>
        <p>A small river named Duden flows by their place and supplies it</p>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-lg-0">
        <a href="<?php echo home_url();?>/all-drafts">
        <i class="fs-1 fa-solid fa-pen-ruler text-light""></i>
        <h3 class="text-light"><strong>Drafts</strong></h3>
        <p>Duden flows by their place far far away, behind the word mountains.</p>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End Categories -->


<!-- Start Digital Artwork Newsletter -->
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
<!-- End Digital Artwork Newsletter -->
<?php get_footer();?>