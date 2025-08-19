<!-- Video Modal -->
	
	
	  <?php
			  $args = array(
			  'post_type' => 'video', // Assuming 'photos' is your CPT
			  'posts_per_page' => 4,
			  'order' => 'ASC', // Ascending order
			  'orderby' => 'date' // Order by date
			  );
			  
			  $query = new WP_Query($args);?>
	   <?php if ($query->have_posts()) : ?>
	   <?php $counter = 0; // Initialize the counter ?>
	   <?php while ($query->have_posts()) : $query->the_post(); ?>
	   <?php $counter++; // Increment the counter ?>
	
	
	<div class="modal fade" id="videoModal<?php echo $counter; ?>" tabindex="-1" aria-labelledby="videoModal<?php echo $counter; ?>Label" aria-hidden="true">
	  <div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tutorialModal<?php echo $counter; ?>Label"><?php the_title(); ?></h5>
					</div>
					<button type="button" class="apex btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>

		  <div class="modal-body">
			<video class="vh-100" controls autoplay muted width="100%">
			  <source src="<?php $meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true ); echo $meta_data['video_url'];?>">" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
		  </div>
		</div>
	  </div>
	</div>
	
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
	<?php endif; ?>
	
	
	<!-- Video Modal -->
		
		
		  <?php
				  $args = array(
				  'post_type' => 'video', // Assuming 'photos' is your CPT
				  'posts_per_page' => 4,
				  'order' => 'ASC', // Ascending order
				  'orderby' => 'date' // Order by date
				  );
				  
				  $query = new WP_Query($args);?>
		   <?php if ($query->have_posts()) : ?>
		   <?php $counter = 0; // Initialize the counter ?>
		   <?php while ($query->have_posts()) : $query->the_post(); ?>
		   <?php $counter++; // Increment the counter ?>
		
		
		<div class="modal fade" id="timelapseModal<?php echo $counter; ?>" tabindex="-1" aria-labelledby="timelapseModal<?php echo $counter; ?>Label" aria-hidden="true">
		  <div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="tutorialModal<?php echo $counter; ?>Label"><?php the_title(); ?></h5>
					</div>
					<button type="button" class="apex btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>

			  <div class="modal-body">
				<video class="vh-100" controls autoplay muted width="100%">
				  <source src="<?php $meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true ); echo $meta_data['video_url'];?>">" type="video/mp4">
				  Your browser does not support the video tag.
				</video>
			  </div>
			</div>
		  </div>
		</div>
		
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
		<?php endif; ?>
		
		
		<!-- Video Modal -->
			
			
			  <?php
					  $args = array(
					  'post_type' => 'video', // Assuming 'photos' is your CPT
					  'posts_per_page' => 4,
					  'order' => 'ASC', // Ascending order
					  'orderby' => 'date' // Order by date
					  );
					  
					  $query = new WP_Query($args);?>
			   <?php if ($query->have_posts()) : ?>
			   <?php $counter = 0; // Initialize the counter ?>
			   <?php while ($query->have_posts()) : $query->the_post(); ?>
			   <?php $counter++; // Increment the counter ?>
			
			
			<div class="modal fade" id="tutorialModal<?php echo $counter; ?>" tabindex="-1" aria-labelledby="tutorialModal<?php echo $counter; ?>Label" aria-hidden="true">
			  <div class="modal-dialog modal-fullscreen">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tutorialModal<?php echo $counter; ?>Label"><?php the_title(); ?></h5>
					</div>
					<button type="button" class="apex btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>

				  <div class="modal-body">
					<video class="vh-100" controls autoplay muted width="100%">
					  <source src="<?php $meta_data = get_post_meta( get_the_ID(), '_custom_post_options', true ); echo $meta_data['video_url'];?>">" type="video/mp4">
					  Your browser does not support the video tag.
					</video>
				  </div>
				</div>
			  </div>
			</div>
			
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<?php endif; ?>
		
		
	