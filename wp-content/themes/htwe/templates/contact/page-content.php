<?php global $tpb_options ?>


<main class="section_article">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<article id="post-<?php the_ID(); ?>" <?php post_class('article_post clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> 
				<div class="row">
					<div class="col-md-6">
						<strong>General enquiries:</strong><br>
						info@highteawithelephants.com<br>
						<ul class="contact_list list-inline">
							<li class="social_menu--item"><a href="<?php echo $tpb_options['twitter_url'];?>"><i class="fa fa-twitter"></i></a></li>
							<li class="social_menu--item"><a href="<?php echo $tpb_options['facebook_url'];?>"><i class="fa fa-facebook"></i></a></li>
							<li class="social_menu--item"><a href="<?php echo $tpb_options['instagram_url'];?>"><i class="fa fa-instagram"></i></a></li>
							<li class="social_menu--item"><a href="<?php echo $tpb_options['pinterest_url'];?>"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<strong>Postal address:</strong><br>
						P.O. Box 1921<br>
						Hoedspruit<br>
						1380<br>
						South Africa
					</div>
					<div class="col-md-6">
						<?php gravity_form( 3, true, true, false, '', true );?>
					</div>
				</div>
			
			</article><?php // end #wrapper ?>
		</div>
	</div>
</main>