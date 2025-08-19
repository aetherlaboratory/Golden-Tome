<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<!--Video Hero -->
<div class="container-fluid gy-0 px-0 mx-0 my-0 py-0 text-light position-relative" 
style="min-height:800px;background-image:url(https://dummyimage.com/1680x500/232323/111);
background-size:100%;background-position:middle; background-attachment: fixed;">
<!-- Animation Video -->
<video autoplay muted loop id="myVideo" style="position:absolute;right:0;bottom:0;min-width:100%;min-height:100%;">
  <source src="https://archive.org/download/BigBuckBunny_328/BigBuckBunny_512kb.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="row col-12">
<div class="col-lg-6 position-absolute bottom-0 start-1 ps-4 ms-5 p-3">
<h1 class="display-5 fw-bold lh-1">Animation Title</h1>
</div>

<div class="col-lg-6 justify-content-end align-items-end position-absolute bottom-0 end-2 pe-0 me-0 p-3">
<div class="row col-12 text-warning justify-content-end text-end">
<i class="fa-brands fs-2 fa-facebook col-auto"></i>
<i class="fa-brands fs-2 fa-twitter col-auto"></i>
<i class="fa-brands fs-2 fa-instagram col-auto"></i>
<i class="fa-brands fs-2 fa-snapchat col-auto"></i>

</div>
</div>
</div>
</div>
<!-- Post Summary -->
<div class="container">
<p class="pt-5 mb-5 pb-5 gy-5 col-10 mx-auto fs-5">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dolor orci. Nulla scelerisque arcu sollicitudin lacus porta, 
sit amet finibus arcu varius. Proin a purus eu est consequat dictum. Donec ex leo, luctus accumsan mi in, interdum fermentum nisi.
Vestibulum ac hendrerit mauris, et cursus tellus. Suspendisse ut ligula magna. Curabitur efficitur aliquam pulvinar. Nam ipsum erat,
sollicitudin eu facilisis vel, tincidunt sit amet neque. Nullam ut dolor fermentum, finibus dui sed, lobortis enim. Proin porttitor 
magna a sapien tristique laoreet. Aliquam sit amet luctus libero. Quisque vitae iaculis libero, nec pretium orci.
<br><br>
Phasellus ipsum tortor, condimentum sed facilisis nec, egestas et nisi. Suspendisse lacus orci, viverra id nisi eget, blandit cursus tortor. 
Donec condimentum erat quis maximus luctus. Praesent sodales augue orci, a malesuada felis rhoncus id. Fusce gravida augue ut nisi hendrerit, 
id vulputate nunc varius. Nullam hendrerit dignissim risus non consectetur. Aliquam eget nisi faucibus, eleifend metus ac, condimentum magna.
Ut posuere libero eu mauris ultricies vulputate. Nulla sit amet nisi sed lectus dapibus pretium. Maecenas luctus quis odio vitae consequat.
Praesent pretium porta sem, sit amet laoreet lectus euismod quis. Etiam lorem libero, varius vel maximus eget, venenatis nec eros.
Fusce laoreet semper sapien, eget scelerisque nisi commodo ac. Etiam efficitur, ante in sagittis consequat, dui turpis aliquam velit,
non aliquam dolor purus a nisl. Integer commodo libero et lacus iaculis, eu ornare neque gravida. Etiam lacinia mauris vel mollis molestie.
</p>
</div>

<!-- Similar Animation Videos -->

<section class="fdb-block bg-dark pt-3">
<div class="container-fluid">
<div class="row text-center justify-content-center">
<div class="col-8">
<h1>Related Animations</h1>
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
    'post_type'      => 'video', // Change this if you need a different post type
    'posts_per_page' => 6, // Number of related posts to show
    'post__not_in'   => array($current_post_id), // Exclude the current post
    'orderby'        => 'date', // Random order for variation
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
if ($related_posts->have_posts()) :
    ?>
<div class="col-2">
<img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>">
<h3><strong><?php the_title(); ?></strong></h3>
</div>

<?php
wp_reset_postdata(); // Reset query
else :
echo '<p>No related videos found.</p>';
endif;
?>

</div>
</div>
</section>
<?php get_footer();?>