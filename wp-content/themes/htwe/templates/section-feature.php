

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
		<div class="container-fluid">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="home_featured">
					<div class="featured_gallery">
						<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
							<?php $groups = get_post_meta($post->ID,'featured_group',true);?>
							<?php if (!empty($groups)) { ?>
								<?php $count = 0; ?>
								<?php foreach ($groups as $key => $group) : $count++; ?>
									<?php $img_size = 'feature-sq'; ?>
									<?php if ($count == 1) $img_size = 'feature-lg'; ?>	

									<?php $class = "q".$count;?>
									
									<?php $img_id = $group['featured_img_id'];?>
									<?php $image = wp_get_attachment_image_src( $img_id, $img_size); ?>

									<div class="item <?php echo $class; ?>">
										<img src="<?php echo $image[0]; ?>" class="img-responsive">
									</div>
								<?php endforeach;
								
							} else {
								
								the_post_thumbnail('full',array('class'=>'img-responsive'));
							
							} ?>

						</a>
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