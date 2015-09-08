jQuery(window).load(function() {
	

});

jQuery(document).ready(function(){

	var $container = jQuery('.featured_gallery');
    // init
    $container.packery({
      itemSelector: '.item',
      gutter: 10
    });

	jQuery("#menu-top-menu").children().each(function() {
        jQuery(this).clone().addClass("headerLi").appendTo(jQuery(".enumenu_ul"))
    });

    jQuery('.enumenu_ul').responsiveMenu({
        'mobileResulution': '480',
        'menuIcon_text': 'MENU <i class="fa fa-navicon"></i>',
        onMenuopen: function() {}
    });


	jQuery(".header_main").sticky({topSpacing:0});
	 var ias = jQuery.ias({
	    container:  '.js-infinite-cont',
	    item:       '.js-infinite',
	    pagination: '.wp-prev-next',
	    next:       '.prev-link > a'
	});

	ias.extension(new IASPagingExtension());
  	ias.extension(new IASHistoryExtension({ prev: '.prev a' }));
  	ias.extension(new IASTriggerExtension({ html: '<div class="clearfix"></div><div class="ias-trigger ias-trigger-next" style="text-align: center; cursor: pointer;"><div class="row"><div class="load-more col-xs-12"><button class="load-more--btn">Show me more</button></div></div></div>'}));

  	jQuery('.js-comments').on('click', function(){
          var disqus_shortname = 'highteawithelephants';
          jQuery.ajax({
                  type: "GET",
                  url: "http://" + disqus_shortname + ".disqus.com/embed.js",
                  dataType: "script",
                  cache: true
          });
          jQuery(this).fadeOut();
    });

	jQuery('#subForm').submit(function (e) {
	    e.preventDefault();
	    jQuery.getJSON(
	        this.action + "?callback=?",
	        jQuery(this).serialize(),
	        function (data) {
	            if (data.Status === 400) {
	                alert("Error: " + data.Message);
	            } else { // 200
	                // #subForm picks the element which has
	                // an id of subForm (ie our form), and
	                // then we slide it up, over 400 milliseconds.
	                jQuery('#subForm').slideUp(400, function() {
	                    // #successMessage picks out the div that
	                    // contains the success message so that we
	                    // can animate it 
	                    jQuery('#successMessage').slideDown();
	                });
	        }
	    });
	});

	jQuery('.search_btn').on('click',function(e) {
		var open = jQuery( "body" ).hasClass( "showSearch" );
		if (open) {
			if ( jQuery( "#searchInput" ).val() === "" ) {
			  
		      jQuery('body').toggleClass('showSearch');
		      e.preventDefault();
		    } else {
		    	jQuery('body').toggleClass('showSearch');
		    }
		} else {
			jQuery('body').toggleClass('showSearch');
			e.preventDefault();
		}
	})
})