<?php 

/* Template Name: Home */

?>

<?php get_header(); ?>

	<?php get_template_part('templates/section','welcome'); ?>

	<?php get_template_part('templates/section','feature-simple'); ?>

	<?php

		$paged = 1;
		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
		$paged = intval( $paged );

		$query_args = array(
			'post_type' => 'post',
			'paged' => $paged,
			'tag__not_in' => array('170'),
		);


		?>


		<section class="section_grid">  
			<div class="wrap container-fluid">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<?php  if ( is_single() ) { ?>
								<div class="related_posts--heading">	
									<svg class="svg-icon shape-youmightalsolike"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-youmightalsolike"></use></svg>
								</div>
							<?php  };?>
						</div>
						<?php query_posts( $query_args ); ?>
						<?php if ( have_posts() ) : $count = 0; ?>
							<div class="row js-infinite-cont">
								<?php while ( have_posts() ) : the_post(); $count++;?>
									<?php $class = get_grid_class($count); ?>
								  	<article id="post-<?php the_ID(); ?>" <?php post_class($class.' js-infinite'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								    	<?php get_template_part('content',get_post_format()); ?>
									</article>
								<?php endwhile; ?>
							</div>
							<nav class="wp-prev-next hide">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
									<li class="next-link"><?php previous_posts_link( __( '&laquo; New Entries', 'bonestheme' )) ?></li>
								</ul>
							</nav>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>

					<?php get_sidebar(); ?>

				</div>
			</div>	
		</section> <?php // end #wrapper ?>

			<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>