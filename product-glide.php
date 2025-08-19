
<div id="demo" class="glide products my-5">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      
     <?php
     $merch_glider_images = get_cs_option('merch_glider');
     $gallery_ids = array_map('trim', explode(',', $merch_glider_images));
     
     if (!empty($gallery_ids)) {
         foreach ($gallery_ids as $image_id) {
             $image_url = wp_get_attachment_url($image_id);
             if ($image_url) {
                 // Only echo the <li> elements with their corresponding images
                 echo '<li class="glide__slide slide"><img width="400" height="300" src="' . esc_url($image_url) . '" class="img-fluid rounded-4"></li>';
             }
         }
     } else {
         // Optionally handle the case where no images are found
         echo '<li class="glide__slide slide"><p>No images found for the merch glider.</p></li>';
     }
     ?>

 
    </ul>
  </div>

  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
  </div>

  </div>