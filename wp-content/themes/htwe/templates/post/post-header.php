<?php global $post; ?>
<header class="header_post">  
	<?php get_template_part('templates/meta'); ?>
	<h1 class="post_heading--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
</header>

<aside class="post_content">
	<div class="post_content--excerpt">
		<?php the_excerpt(); ?>
	</div>

		<?php $featured_header = get_post_meta($post->ID,'_ppm_header_image_id',true); ?>
		<?php if ($featured_header) : ?>
			<figure class="post_image">
		
				<div class="post_readmore">
					<!-- <p>Continue Reading</p> -->
					<div class="triangle-divider"></div>
				</div>
				<?php $image = wp_get_attachment_image_src( $featured_header, 'full'); ?>
				<img src="<?php echo $image[0]; ?>" class="img-responsive">

			</figure>
		<?php elseif (has_post_thumbnail()) : ?>
			<figure class="post_image">
		
				<div class="post_readmore">
					<!-- <p>Continue Reading</p> -->
					<div class="triangle-divider"></div>
				</div>
				<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>

			</figure>
		<?php endif; ?>

</aside>
