<?php global $tpb_options ?>
<main class="section_article">
	<div class="row">
		<div class="col-md-4 col-md-offset-2">

			<div  <?php post_class('article_post clearfix'); ?>> 
			
				<ul class="contact_list">
					<li class="social_menu--item"><span class="fa fa-envelope"></span> <?php echo $tpb_options['contact_email'];?></li>
					<li class="social_menu--item"><span class="fa fa-phone"></span> <?php echo $tpb_options['contact_number'];?></li>
					<li class="social_menu--item"><a href="<?php echo $tpb_options['twitter_url'];?>"><span class="fa fa-twitter"></span> Twitter</a></li>
					<li class="social_menu--item"><a href="<?php echo $tpb_options['facebook_url'];?>"><span class="fa fa-facebook"></span> Facebook</a></li>
					<li class="social_menu--item"><a href="<?php echo $tpb_options['instagram_url'];?>"><span class="fa fa-instagram"></span> Instagram</a></li>
					<li class="social_menu--item"><a href="<?php echo $tpb_options['pinterest_url'];?>"><span class="fa fa-pinterest"></span> Pinterest</a></li>
				</ul>
			
			</div><?php // end #wrapper ?>
		</div>
		<div class="col-md-4">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="post_content">
						<div class="post_entry clearfix">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</main>