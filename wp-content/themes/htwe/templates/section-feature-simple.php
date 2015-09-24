

<?php
	global $post;
	$query_args = array(
		'post_type' => 'post', 
		'posts_per_page' => 1,
		'tag' => 'home-feature'
	);
	query_posts( $query_args );
?>

<?php if ( have_posts() ) : ?>
	<section class="section_feature"> 
		<div class="container-fluid wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="grid_article css-fullwidth col-xs-12 js-infinite has-post-thumbnail">
					<div class="blog_article">
						<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
							<figure class="article_image">
								<?php the_post_thumbnail('feature-lg',array('class'=>'img-responsive')); ?>
							</figure>
						</a>
						<div class="article_content">
							<h3 class="article_content--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<div class="article_content--excerpt">
								<?php the_excerpt(); ?>
							</div>
							<?php get_template_part('templates/meta'); ?>
						</div>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>
<?php wp_reset_query(); ?>