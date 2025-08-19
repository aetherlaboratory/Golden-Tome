<div class="modal" id="cgi-modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
	  <div class="modal-header">
	
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
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
		  <img class="modal-main-img" style="width:100%; height:auto;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" />
		  <?php endwhile; ?>
		  <?php endif; ?>
		  <?php wp_reset_postdata(); ?>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	  </div>
	</div>
  </div>
</div>