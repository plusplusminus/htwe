<section class="section_welcome">  
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="welcome_content fade in">
				<button type="button" class="close welcome_content--close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true"><svg enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon fill="#fff" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/></svg></span>
				</button>
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