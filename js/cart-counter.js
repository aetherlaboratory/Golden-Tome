function updateCartCounter() {
    jQuery.ajax({
        type: 'GET',
        url: cartCount.ajax_url, // Change this to use cartCount.ajax_url
        success: function(data) {
            jQuery('.cart-counter').html(data);
        }
    });
}


jQuery(document).ready(function() {
    updateCartCounter();
    jQuery(document).on('added_to_cart', function() {
        updateCartCounter();
    });
});
