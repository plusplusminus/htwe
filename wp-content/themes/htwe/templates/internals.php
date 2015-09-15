<?php

global $post;


$internal = get_post_meta($post->ID,'attached_cmb2_attached_posts',true); 

if ($internal) :
	shuffle($internal);

	$query_args = array(
		'p'=>$internal[0],
		'post_type' => 'internals', 
		'posts_per_page' => 1
	);

	query_posts( $query_args );

	?>


	<?php if ( have_posts() ) : $count = 0; ?>
			<?php while ( have_posts() ) : the_post(); $count++;?>
				<?php
					$image_attributes_large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full' ); 
					$link = get_post_meta($post->ID,'internal_link',true);
					$linktext = get_post_meta($post->ID,'internal_link_text',true);
				?>
				<div class="post_cta" style="background-image:url('<?php echo $image_attributes_large[0];?>');">
					<div class="post_cta--content">
						<div class="post_cta--header">
							<svg class="svg-icon shape-logo-symbol"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-logo-symbol"></use></svg>
							<h4 class="post_cta--title">&mdash; <?php the_title();?> &mdash;</h4>
						</div>
						<div class="post_cta--text">
							<?php the_content();?>
						</div>
						<a target="_blank" href="<?php echo $link;?>" class="post_cta--btn"><?php echo $linktext;?></a>
					</div>
				</div>
			<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
<?php endif ; ?>