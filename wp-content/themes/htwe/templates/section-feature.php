

<?php
// Exclude categories on the homepage.

$query_args = array(
	'post_type' => 'post', 
	'posts_per_page' => 1,
	'tag' => 'home-feature'
);

query_posts( $query_args );

?>

<?php if ( have_posts() ) : ?>
	<section class="section_feature"> 
		<div class="container-fluid">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="home_featured">
					<div class="featured_gallery">
						<div class="item q10">
							<img width="992" height="506" src="http://localhost/htwe/wp-content/uploads/2015/06/homepage-11.jpg" class="img-responsive wp-post-image" alt="Screen Shot 2015-06-23 at 1.37.58 PM">
						</div>
						<div class="item q8">
							<img width="992" height="506" src="http://localhost/htwe/wp-content/uploads/2015/06/homepage-11.jpg" class="img-responsive wp-post-image" alt="Screen Shot 2015-06-23 at 1.37.58 PM">
						</div>
						<div class="item q11">
							<img width="992" height="506" src="http://localhost/htwe/wp-content/uploads/2015/06/homepage-11.jpg" class="img-responsive wp-post-image" alt="Screen Shot 2015-06-23 at 1.37.58 PM">
						</div>
					</div>
					<div class="featured_content">
						<div class="content_meta">
							<?php get_template_part('templates/meta'); ?>
						</div>
						<h2 class="featured_content--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="featured_content--excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>
<?php wp_reset_query(); ?>