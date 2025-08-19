function removeTrailingSlash(url) {
  return url.replace(/\/$/, '');
}

$(document).ready(function() {
	
  // Toggle footer class on menu toggle click
  $('#menu-btn').click(function() {
    $('.main-menu').toggleClass('d-none');
    $(this).toggleClass('active');
  });
  
  // Add click listener to close-btn using on()
  $(document).on('click', '.close-btn', function() {
    $('.main-menu').addClass('d-none');
  });

  var currentUrl = removeTrailingSlash(window.location.href);

  $('.nav-link').each(function() {
    var menuItemUrl = removeTrailingSlash($(this).attr('href'));
    
    if (currentUrl === menuItemUrl) {
      $(this).addClass('active text-light').attr('aria-current', 'page');
    }
  });




  $(".navbar-toggler").click(function() {
    $(".navbar").toggleClass("closed open");
  });
    
    
    
    
    
    
    
});
