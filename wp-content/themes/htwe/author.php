<?php get_header(); ?>

	<section class="section_page">  
		<div class="container-fluid">

			<div class="page_content">

				<div class="page_heading">
					<?php
					global $post;
					$author_id = $post->post_author;
					?>
					<h1 class="page_heading--title">

						<?php the_author_meta('display_name', $author_id); ?>

					</h1>

					<?php $bio = get_the_author_meta('description', $author_id); ?>
					<div class="page_heading--bio">
						<?php if (!empty($bio)) echo wpautop($bio); ?>
					</div>
					<?php $twitter = get_the_author_meta( 'twitter_profile', $author_id ); ?>
					<?php $facebook = get_the_author_meta( 'facebook_profile', $author_id ); ?>
					<?php $instagram = get_the_author_meta( 'instagram_profile', $author_id ); ?>
					<ul class="social_links">
						<?php if (!empty($twitter)) : ?>
								<li class="social_links--item"><a href="<?php echo $twitter;?>"><span class="fa fa-twitter"></span></a></li>
						<?php endif; ?>
						<?php if (!empty($facebook)) : ?>
								<li class="social_links--item"><a href="<?php echo $facebook;?>"><span class="fa fa-facebook"></span></a></li>
						<?php endif; ?>
						<?php if (!empty($instagram)) : ?>
								<li class="social_links--item"><a href="<?php echo $instagram;?>"><span class="fa fa-instagram"></span></a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>

		</div>			
	</section> <?php // end #wrapper ?>

	<section class="section_grid">  
		<div class="wrap container-fluid">
			<div class="row">
				<div class="col-md-8">
					<?php if ( have_posts() ) : $count = 0; ?>
						<div class="row">
							<?php while ( have_posts() ) : the_post(); $count++;?>
								<?php $class = get_grid_class($count); ?>
							  	<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							    	<?php get_template_part('content',get_post_format()); ?>
								</article>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>	
	</section> <?php // end #wrapper ?>


<?php get_footer(); ?>
