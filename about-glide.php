<div id="demo" class="glide products my-5">

  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <?php
      $tools = [
        ['clip', 'Clip Studio Paint', 'Digital Painting/Comic Book/Animation'],
        ['sketch', 'Autodesk Sketchbook Pro', 'Sketching/Painting/Concept Art'],
        ['ps', 'Adobe Photoshop', 'Photo Editing/Image Manipulation/Fashion Design'],
        ['aill', 'Adobe Illustrator', 'Graphic Design/Web Design/Typography'],
        ['ind', 'Adobe Indesign', 'Book Editing/Publishing'],
        ['anim', 'Adobe Animate', 'Frame By Frame Animation'],
        ['ae', 'Adobe After Effects', 'Motion Graphics/Advanced Animation'],
        ['pc', 'Procreate', '(iPad Pro) Digital Painting/CGI'],
        ['pcd', 'Procreate Dreams', 'Digital HandDrawn Animation'],
        ['afd', 'Affinity Designer', '(iPad Pro) Vector Design'],
        ['blen', 'Blender 3D', '3D Modeling/Sculpting'],
        ['mj', 'MidJourney', 'Generative Ai Image/Video'],
      ];

      foreach ($tools as $skill) : ?>
        <li class="glide__slide">
          <div class="slide-content p-3">
            <div class="row align-items-start">
              <div class="col-2 me-2">
                <!-- SVG icon -->
                <svg class="icon about-icon">
                  <use xlink:href="#<?php echo esc_attr($skill[0]); ?>"></use>
                </svg>
              </div>
              <div class="col-9">
                <h3 class="mb-1"><strong><?php echo esc_html($skill[1]); ?></strong></h3>
                <p class="mb-0"><?php echo esc_html($skill[2]); ?></p>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Glide arrows -->
  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
  </div>

</div>
