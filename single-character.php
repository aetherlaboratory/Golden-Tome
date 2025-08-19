 <?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>

<div class="col-12">
<div class="row mt-2 px-3">
<!-- Featured Image -->
<div class="col-7">
<img class="mx-auto position-relative d-block img-fluid rounded figure" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">       
</div>
<!-- Description Area -->
<div class="col-5">
    <div class="mx-auto d-block-position-relative">
    <h1 class="text-center mb-3"> <?php the_title();?></h1>
  <p class="col-10 mx-auto fs-5">
 <?php the_content();?>
  </p>
    </div>
    
    <hr class="border-dark col-11 mt-4">
    <!-- Additional Character Images -->
<?php
 
// Get the current post ID
$post_id = get_the_ID();

// Get the full meta data array
$meta_data = get_post_meta($post_id, 'character_post_options', true);

// Ensure meta data exists
if (!empty($meta_data) && isset($meta_data['additional_chara_img'])) {
    // Convert stored string into an array
    $gallery_ids = explode(',', $meta_data['additional_chara_img']);

    // Check if there are valid images
    if (!empty($gallery_ids) && is_array($gallery_ids)) {
        $count = 0; // Counter to track images and assign unique modal IDs
        
        // Start row
        echo '<div class="row">';

        foreach ($gallery_ids as $gallery_item_id) {
            // Trim spaces (just in case) and get image URL
            $gallery_item_id = trim($gallery_item_id);
            $image_url = wp_get_attachment_url($gallery_item_id);

            // Display only if the image exists
            if ($image_url) {
                // If we have displayed 6 images, start a new row
                if ($count > 0 && $count % 6 == 0) {
                    echo '</div><div class="row">'; // Close the previous row and start a new one
                }

                // Generate a unique modal ID using character post ID + count
                $modal_id = 'gallery-modal-' . $post_id . '-' . $count; 
                ?>
                
                <div class="col-2">
                    <!-- Image opens modal on click -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#<?php echo $modal_id; ?>">
                        <img alt="Gallery Image" class="img-fluid rounded" src="<?php echo esc_url($image_url); ?>">
                    </a>
                </div>
                
                <?php
                $count++; // Increment the counter for the next modal ID
            }
        }
        echo '</div>'; // Close the last row
    } else {
        echo '<p>No gallery images found in the meta data.</p>';
    }
} else {
    echo '<p>No meta data found for this character.</p>';
}
?>


    
    <!-- Share Buttons -->
 <div class="row mt-4 col-auto text-black me-5 pe-3 justify-content-end">
 <i class="fa-brands fs-2 fa-facebook col-auto"></i>
 <i class="fa-brands fs-2 fa-twitter col-auto"></i>
 <i class="fa-brands fs-2 fa-instagram col-auto"></i>
 <i class="fa-brands fs-2 fa-snapchat col-auto"></i>
 </div>
</div>


</div>
</div>



<!-- Bootstrap 5 Model -->

<?php
// Get the current post ID
$post_id = get_the_ID();

// Get the full meta data array
$meta_data = get_post_meta($post_id, 'character_post_options', true);

// Ensure meta data exists
if (!empty($meta_data) && isset($meta_data['additional_chara_img'])) {
    // Convert stored string into an array
    $gallery_ids = explode(',', $meta_data['additional_chara_img']);

    // Check if there are valid images
    if (!empty($gallery_ids) && is_array($gallery_ids)) {
        $count = 0; // Counter for unique modal IDs

        foreach ($gallery_ids as $gallery_item_id) {
            // Trim spaces (just in case) and get image URL
            $gallery_item_id = trim($gallery_item_id);
            $image_url = wp_get_attachment_url($gallery_item_id);

            // Only create the modal if the image exists
            if ($image_url) {
                // Generate a unique modal ID using character post ID + count
                $modal_id = 'gallery-modal-' . $post_id . '-' . $count; 
                ?>

                <!-- Bootstrap 5 Modal -->
                <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" aria-labelledby="<?php echo $modal_id; ?>-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Centered & Large Modal -->
                        <div class="modal-content">
                            <div class="modal-header">
                             
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="<?php echo esc_url($image_url); ?>" class="img-fluid" alt="Gallery Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Bootstrap 5 Modal -->

                <?php
                $count++; // Increment the counter for the next modal ID
            }
        }
    }
}
?>





<!-- Related Characters -->


<section class="fdb-block bg-dark mt-5 pt-3">
<div class="container-fluid">
<div class="row text-center justify-content-center">
<div class="col-8">
<h1>Related Characters</h1>
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
    'post_type'      => 'character', // Change this if you need a different post type
    'posts_per_page' => 4, // Number of related posts to show
    'post__not_in'   => array($current_post_id), // Exclude the current post
    'order' => 'ASC', // Ascending order
    'orderby' => 'date', // Order by date
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
<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>

<div class="col-2 mx-auto">
<a href="<?php the_permalink();?>"><img alt="image" class="img-fluid rounded" 
  src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>"></a>
<h3><strong><?php the_title();?></strong></h3>
</div>
<?php endwhile; ?>
</div>
<?php
wp_reset_postdata(); // Reset query
else :
echo '<p>No related posts found.</p>';
endif;
?>





</div>
</div>
</section>
<?php get_footer();?>