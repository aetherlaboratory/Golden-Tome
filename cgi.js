jQuery(document).ready(function($) {
	// Handle thumbnail click
	$('.thumbnail').click(function() {
		// Get the src of the clicked thumbnail
		var thumbnailSrc = $(this).attr('src');
		
		// Change the main image src to the clicked thumbnail's src
		$('.main-image').attr('src', thumbnailSrc);
		
		// Change the modal image src to the clicked thumbnail's src
		$('.modal-main-img').attr('src', thumbnailSrc);
		
		// Remove the active class from all thumbnails
		$('.thumbnail').removeClass('active-thumbnail');
		
		// Add active class to the clicked thumbnail
		$(this).addClass('active-thumbnail');
	});
});
