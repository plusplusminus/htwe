<section class="section_welcome">  
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="welcome_content">
				<figure class="welcome_content--image">
					<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
					<div class="welcome_content--info">
						<svg class="svg-icon shape-welcome"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-welcome"></use></svg>
						<?php the_content(); ?>
					</div>
					<div class="welcome_content--action">
						<small>Start Exploring</small>
					</div>
				</figure>
				<div class="divider"></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>	
</section> <?php // end #wrapper ?>