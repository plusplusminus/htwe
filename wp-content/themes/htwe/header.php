<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php global $tpb_options; ?>
		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/manifest.json">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#b45f38 ">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff ">

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<link href='http://fonts.googleapis.com/css?family=Halant:300,400,500,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script src="//use.typekit.net/ncr8xos.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-66876979-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>

	<body <?php body_class(); ?>>
	<?php include(get_stylesheet_directory().'/library/svg.svg'); ?>

	    <header class="header">
	    	<nav class="header_top">
	    		<div class="top_logo">
	    			<?php if ( ( '' != $tpb_options['site_logo']['url'] ) ) {
					$logo_url = $tpb_options['site_logo']['url'];
					$site_url = get_bloginfo('url');
					$site_name = get_bloginfo('name');
					$site_description = get_bloginfo('description');
					if ( is_ssl() ) $logo_url = str_replace( 'http://', 'https://', $logo_url );
					echo '<a class="logo" href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><svg class="svg-icon shape-logo-top"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-south_symbol_africa-incolour"></use></svg></a>' . "\n";
					} // End IF Statement */
					?>
	    		</div>
	    		<div class="top_navbar">
	    			<?php secondary_nav('secondary-nav','navbar_top'); ?>
	    		</div>
	    		<div class="top_social">
					<ul class="social_menu">
						<li class="social_menu--title"><a href="<?php echo $tpb_options['contact_url'];?>">Get in Touch</a></li>
						<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['twitter_url'];?>"><span class="fa fa-twitter"></span></a></li>
						<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['facebook_url'];?>"><span class="fa fa-facebook"></span></a></li>
						<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['instagram_url'];?>"><span class="fa fa-instagram"></span></a></li>
						<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['pinterest_url'];?>"><span class="fa fa-pinterest"></span></a></li>
					</ul>
	    		</div>
	    		<div class="top_search">


					<div class="expandSearch">
						<form id="searchform" action="<?php echo home_url( '/' ); ?>" method="get">
							<input id="searchInput" name="s" type="text" placeholder="Search" />
							<button class="search_btn css-icon" type="submit">
								<span class="fa fa-search"></span>
							</button>
						</form>
					</div>

					<div class="clearfix"></div>
	    			
	    		</div>
	    		<div class="clearfix"></div>
	    	</nav>

	    	<div class="mobile_logo">
	    		<?php echo '<a href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><svg class="svg-icon shape-logo-wordmark-incolour"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-wordmark-incolour"></use></svg></a>' . "\n"; ?>
	    	</div>

	      	<nav class="header_main">
	        	<?php bones_main_nav(); ?> 
	        </nav>

	        <?php if ( function_exists('custom_breadcrumb') ) { ?>
    			<div class="breadcrumbs container-fluid">
    				<div class="row">	
    					<div class="col-md-12">
    						<?php custom_breadcrumb(); ?>
    					</div>
  					</div>
  				</div>
  			<?php }?>
		</header> <?php // end header ?>


