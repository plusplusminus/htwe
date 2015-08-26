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
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="375.045 607.885 30.959 30.33" enable-background="new 375.045 607.885 30.959 30.33" xml:space="preserve">
									<path fill="#fff" d="M405.047,633.805l-7.007-6.542c-0.129-0.121-0.267-0.226-0.408-0.319c1.277-1.939,2.025-4.258,2.025-6.753 c0-6.796-5.51-12.306-12.307-12.306s-12.306,5.51-12.306,12.306s5.509,12.306,12.306,12.306c2.565,0,4.945-0.786,6.916-2.128 c0.122,0.172,0.257,0.337,0.418,0.488l7.006,6.542c1.122,1.048,2.783,1.093,3.709,0.101 C406.327,636.507,406.169,634.853,405.047,633.805z M387.351,629.051c-4.893,0-8.86-3.967-8.86-8.86s3.967-8.86,8.86-8.86 s8.86,3.967,8.86,8.86S392.244,629.051,387.351,629.051z"/>
								</svg>
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


