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

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<link href='http://fonts.googleapis.com/css?family=Halant:300,400,500,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script src="//use.typekit.net/ncr8xos.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.9.3/lodash.min.js"></script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

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
						<li class="social_menu--title">Get in Touch</li>
						<li class="social_menu--item"><a href="<?php echo $tpb_options['twitter_url'];?>"><span class="fa fa-twitter"></span></a></li>
						<li class="social_menu--item"><a href="<?php echo $tpb_options['facebook_url'];?>"><span class="fa fa-facebook"></span></a></li>
						<li class="social_menu--item"><a href="<?php echo $tpb_options['instagram_url'];?>"><span class="fa fa-instagram"></span></a></li>
						<li class="social_menu--item"><a href="<?php echo $tpb_options['pinterest_url'];?>"><span class="fa fa-pinterest"></span></a></li>
					</ul>
	    		</div>
	    		<div class="top_search">
	    			<button class="btn btn-default"><span class="fa fa-search"></span></button>
	    		</div>
	    		<div class="clearfix"></div>
	    	</nav>

	      	<nav class="header_main">
	        	<?php bones_main_nav(); ?> 
	        </nav>

		</header> <?php // end header ?>


