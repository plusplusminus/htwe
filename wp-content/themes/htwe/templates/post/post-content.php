<main class="section_article">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<article id="post-<?php the_ID(); ?>" <?php post_class('article_post clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> 
			
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<aside class="article_meta media">
							<div class="article_meta--image media-left">
								<?php echo get_avatar( get_the_author_meta('email'), '40', $default='blank' ); ?>
							</div>
							<div class="article_meta--content">
								<ul class="meta_author">
									<li class="author_item meta_author--author"><span class"">by</span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
									</li>
									<?php $twitter = get_the_author_meta( 'twitter_profile', $post->post_author ); ?>
									<?php if (!empty($twitter)) : ?>
											<li class="author_item meta_author--twitter"><a target="_blank" href="https://twitter.com/<?php echo $twitter;?>">@<?php echo $twitter;?></a></li>
									<?php endif; ?>
									<li class="author_item meta_author--date"><?php the_date(); ?></li>
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
						<div class="row">
							<div class="load-more col-xs-12">
								<button class="load-more--btn js-comments">Show Comments</button>
								<div id="disqus_thread"></div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			
			</article><?php // end #wrapper ?>
			
			<?php get_template_part('templates/internals'); ?>

		</div>
		<?php get_sidebar(); ?>
	</div>
</main>