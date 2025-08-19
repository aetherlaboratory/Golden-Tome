</article>
</div> <!--#Wrapper-->

<footer class="sticky-bottom py-0">
<div class="spacer w-100" style="height:50px;"></div>
<?php get_template_part( 'menu' );?>
</div>
</footer>

<?php wp_footer(); ?>
	
	
<?php
	// You can add or change the conditions here depending on your needs
	if (is_front_page()) {
		// Code for the front page
		?>
		<script>
		var glide = new Glide('#demo', {
		  type: 'carousel',
		  perView: 4,
		  focusAt: 'center',
		  breakpoints: {
			800: {
			  perView: 2
			},
			480: {
			  perView: 1
			}
		  }
		})
		
		glide.mount()
		
		</script>
		
		<?php
		
	} elseif (is_page('CGI')) {
		// Code for the woodwork page
		get_template_part( 'cgi-modal' );
		
	} elseif (is_page('Comics')) {
		// Code for the Comics page
		get_template_part( 'comic-modal' );
		
	} elseif (is_page('OVA')) {
		// Code for the OVA page
	get_template_part( 'ova-modal' );
		
	} elseif (is_page('3D-Models')) {
		// Code for the 3D-Models page
		?>
		<!-- Loads <model-viewer> for modern browsers: -->
		<script type="module"
		src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
		</script>
		
		<!-- Loads <model-viewer> for old browsers like IE11: -->
		<script nomodule
		src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
		</script>
		<?php
	} elseif (is_page('Merch')) {
	// Code for the Merch page
	} elseif (is_page('About')) {
	// Code for the About page
	?>

		<script>
		var glide = new Glide('#demo', {
		  type: 'carousel',
		  perView: 4,
		  focusAt: 'center',
		  breakpoints: {
			800: {
			  perView: 2
			},
			480: {
			  perView: 1
			}
		  }
		})
		
		glide.mount()
		
		</script>
		
	<?php
	} elseif (is_page('Commissions')) {
	// Code for the Commissions page
	} else {
		// Code for all other pages
	}
?>	
	
	
	








<?php
	if (is_singular('post')) {
		// Code for single blog posts

	} elseif (is_singular('product')) {
		// Code for single product pages

	} elseif (is_singular('event')) {
		// Code for single event pages

	} else {
		// Code for all other single pages
		
	}
?>


<!--<div class="col-auto sticky-bottom apex mx-auto text-center copyright fs-h1"><span>&copy; 2023 Gold Tome. All Rights Reserved.</span></div>-->
</body>
</html>
