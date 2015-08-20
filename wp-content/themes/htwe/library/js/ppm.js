jQuery(window).load(function() {
	var $container = jQuery('.featured_gallery');
    // init
    $container.packery({
      itemSelector: '.item',
      gutter: 10
    });



});

jQuery(document).ready(function(){
	 var ias = jQuery.ias({
	    container:  '.js-infinite-cont',
	    item:       '.js-infinite',
	    pagination: '.wp-prev-next',
	    next:       '.prev-link > a'
	});

	ias.extension(new IASPagingExtension());
  	ias.extension(new IASHistoryExtension({ prev: '.prev a' }));
  	ias.extension(new IASTriggerExtension({ html: '<div class="clearfix"></div><div class="ias-trigger ias-trigger-next" style="text-align: center; cursor: pointer;"><div class="row"><div class="load-more col-md-12"><button class="load-more--btn">Show me more</button></div></div></div>'}));

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


})

var expandSearch = {
	init: function(){

		var _this = this,
		_searchContainers = document.querySelectorAll('.expandSearch');

		for( var _index in _searchContainers ){
			if( typeof _searchContainers[ _index ] === 'object' ){
				_this.searchFunctions( _searchContainers[ _index ] );
			}
		}

	},

	searchFunctions: function( _thisSearch ){
			
		var _nodes = _thisSearch.childNodes;

		//a click
		_nodes[3].addEventListener('click',function(e){

			if( _thisSearch.attributes.class.value.indexOf("openSearch") > -1 ){
				_thisSearch.attributes.class.value = 'expandSearch';
				jQuery('body').removeClass('showSearch');
			}
			else{
				_thisSearch.attributes.class.value = 'expandSearch openSearch';
				jQuery('body').addClass('showSearch');
			}

			if( !e.preventDefault() ){ e.returnValue = false; }
		});

	}

};


//execute
expandSearch.init();