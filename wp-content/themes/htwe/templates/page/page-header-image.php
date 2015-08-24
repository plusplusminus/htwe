<section class="section_header-image">  
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="header-image_content">
				<figure class="header-image_content--image">
					<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
					<div class="header-image_content--info">
						<div class="content_heading">
							<h1 class="content_heading--title"><?php the_title(); ?></h1>
						</div>
						<?php $subtitle = get_post_meta($post->ID,'_ppm_page_subtitle',true); ?>
						<?php if (!empty($subtitle)) echo wpautop($subtitle); ?>
					</div>
				</figure>
				<div class="divider"></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>	
</section> <?php // end #wrapper ?>