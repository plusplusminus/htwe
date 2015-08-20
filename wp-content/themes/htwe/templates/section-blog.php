<<<<<<< HEAD
<?php

=======


<?php
>>>>>>> origin/master
// Exclude categories on the homepage.

$query_args = array(
	'post_type' => 'post', 
	'posts_per_page' => 6
);

<<<<<<< HEAD

=======
query_posts( $query_args );
>>>>>>> origin/master

?>

<section class="section_grid">  
	<div class="wrap container-fluid">
		<div class="row">
			<div class="col-md-8">
<<<<<<< HEAD
				<div class="row">
					<?php  if ( is_single() ) { ?>
						<div class="related_posts--heading">	
							<svg class="svg-icon shape-youmightalsolike"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-youmightalsolike"></use></svg>
						</div>
					<?php  };?>
				</div>
				<?php query_posts( $query_args ); ?>
=======
>>>>>>> origin/master
				<?php if ( have_posts() ) : $count = 0; ?>
					<div class="row">
						<?php while ( have_posts() ) : the_post(); $count++;?>
							<?php $class = get_grid_class($count); ?>
						  	<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						    	<?php get_template_part('content',get_post_format()); ?>
							</article>
						<?php endwhile; ?>
					</div>
<<<<<<< HEAD
					<div class="row">
						<div class="load-more col-md-12">
							<a class="load-more--btn">Show me more</a>
						</div>
					</div>
=======
>>>>>>> origin/master
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>	
</section> <?php // end #wrapper ?>