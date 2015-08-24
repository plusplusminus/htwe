<?php get_header(); ?>

	<section class="section_page">  
		<div class="container-fluid">

			<div class="page_content">

				<div class="page_heading">
					<h1 class="page_heading--title"><span><?php _e("Search Results for","htwe"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1>
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

