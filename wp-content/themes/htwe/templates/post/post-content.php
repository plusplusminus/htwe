<main class="section_article">
	<div class="row">
		<div class="col-md-8">
			<article id="post-<?php the_ID(); ?>" <?php post_class('article_post clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> 
			
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<aside class="article_meta media">
							<div class="article_meta--image media-left">
<<<<<<< HEAD
								<?php echo get_avatar( get_the_author_meta('email'), '40', $default='blank' ); ?>
=======
								<?php echo get_avatar( get_the_author_meta('email'), '30', $default='blank' ); ?>
>>>>>>> origin/master
							</div>
							<div class="article_meta--content">
								<ul class="meta_author">
									<li class="author_item meta_author--author"><span class"">by</span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
									</li>
<<<<<<< HEAD
									<li class="author_item meta_author--twitter">
										<a href="#">@twitter</a>
									</li>
=======
									<li class="author_item meta_author--twitter">@twitter</li>
>>>>>>> origin/master
								</ul>
							</div>
							<div class="clearfix"></div>
						</aside>
						<?php get_template_part('templates/post/post','social'); ?>
						<div class="post_content">
							<div class="post_entry clearfix">
								<?php the_content(); ?>
							</div>
						</div>
<<<<<<< HEAD
						<div class="row">
							<div class="load-more col-md-12">
								<a class="load-more--btn">Show Comments</a>
							</div>
						</div>
=======
>>>>>>> origin/master
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			
			</article><?php // end #wrapper ?>
<<<<<<< HEAD
			
			<?php get_template_part('templates/internals'); ?>

=======
>>>>>>> origin/master
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>