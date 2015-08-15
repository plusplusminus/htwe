jQuery(window).load(function() {
	var $container = jQuery('.featured_gallery');
    // init
    $container.packery({
      itemSelector: '.item',
      gutter: 10
    });

});