<?php get_header(); ?>

	<section class="section_page">  
		<div class="container-fluid">

			<div class="page_content">

				<div class="page_heading">
					<?php if (is_category()) { ?>
						<h1 class="page_heading--title">
							<?php single_cat_title(); ?>
						</h1>

					<?php } elseif (is_tag()) { ?>
						<h1 class="page_heading--title">
							<span><?php _e( 'Posts Tagged:', 'aevitas' ); ?></span> <?php single_tag_title(); ?>
						</h1>

					<?php } elseif (is_author()) {
						global $post;
						$author_id = $post->post_author;
					?>
						<h1 class="page_heading--title">

							<span><?php _e( 'Posts By:', 'aevitas' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

						</h1>
					<?php } elseif (is_day()) { ?>
						<h1 class="page_heading--title">
							<span><?php _e( 'Daily Archives:', 'aevitas' ); ?></span> <?php the_time('l, F j, Y'); ?>
						</h1>

					<?php } elseif (is_month()) { ?>
							<h1 class="page_heading--title">
								<span><?php _e( 'Monthly Archives:', 'aevitas' ); ?></span> <?php the_time('F Y'); ?>
							</h1>

					<?php } elseif (is_year()) { ?>
							<h1 class="page_heading--title">
								<span><?php _e( 'Yearly Archives:', 'aevitas' ); ?></span> <?php the_time('Y'); ?>
							</h1>

					<?php } elseif (is_post_type_archive()) { ?>
							<h1 class="page_heading--title">
								<?php post_type_archive_title(); ?>
							</h1>
					<?php } elseif( is_tax() ) {
					    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );;
					    ?>
						    <h1 class="page_heading--title">
								<span><?php _e( $term->name, 'aevitas' ); ?></span>
							</h1>

					<?php } ?>
				</div>
			</div>

		</div>			
	</section> <?php // end #wrapper ?>

	<section class="section_grid">  
		<div class="wrap container-fluid">
			<div class="row">
				<div class="col-md-12">

					<?php if ( have_posts() ) : $count = 0; ?>
						<div class="row js-infinite-cont">
							<?php while ( have_posts() ) : the_post(); $count++;?>
							  	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 grid_product js-infinite'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
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

	<?php get_template_part('templates/section','newsletter'); ?>

<?php get_footer(); ?>