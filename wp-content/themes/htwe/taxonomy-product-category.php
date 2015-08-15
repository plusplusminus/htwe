<?php get_header(); ?>

	<?php get_template_part('templates/archive-products/archive','header'); ?>


	<section class="section_grid">  
		<div class="wrap container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php get_template_part('templates/shop/product','menu'); ?>
					<?php if ( have_posts() ) : $count = 0; ?>
						<div class="row">
							<?php while ( have_posts() ) : the_post(); $count++;?>
							  	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 grid_product'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							    	<?php get_template_part('templates/shop/product','grid'); ?>
								</article>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>

			</div>
		</div>	
	</section> <?php // end #wrapper ?>

	<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>