<?php
// Exclude categories on the homepage.


$paged = 1;
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
$paged = intval( $paged );

$query_args = array(
	'post_type' => 'products', 
	'posts_per_page' => 12,
	'paged' => $paged,
);

query_posts($query_args);

?>

<section class="section_grid">  
	<div class="wrap container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php get_sidebar('shop'); ?>
				<?php if ( have_posts() ) : $count = 0; ?>
					<div class="row js-infinite-cont">
						<?php while ( have_posts() ) : the_post(); $count++;?>
						  	<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-6 col-md-4 grid_product js-infinite'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						    	<?php get_template_part('templates/shop/product','grid'); ?>
							</article>
						<?php endwhile; ?>
						<nav class="wp-prev-next hide">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
								<li class="next-link"><?php previous_posts_link( __( '&laquo; New Entries', 'bonestheme' )) ?></li>
							</ul>
						</nav>
					</div>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>

		</div>
	</div>	
</section> <?php // end #wrapper ?>