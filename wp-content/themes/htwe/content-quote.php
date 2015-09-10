<?php global $post;
	$color = get_post_meta($post->ID,'bg_colorpicker',true);
?>

<div class="blog_quote" <?php if (!empty($color)) { ?>style="background-color:<?php echo $color;?><?php } ?>">
	<div class="quote_content">		
		<blockquote class="quote_content--excerpt">
			<?php the_content(); ?>
		</blockquote>
		<cite class="quote_content--title"><?php the_title(); ?></cite>
	</div>
</div>