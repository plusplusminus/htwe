<?php
	global $post;
	$currency = get_post_meta($post->ID,'product_currency',true);
	$price = get_post_meta($post->ID,'product_price',true);
	$artist = get_post_meta($post->ID,'product_artist',true);

	$format = '<small class="article_content--price">%s %d</small>';
	
?>

<div class="product_article">
	<a href="<?php the_permalink();?>">
		<figure class="article_image">
			<?php the_post_thumbnail('grid',array('class'=>'img-responsive')); ?>
		</figure>
	</a>


	<div class="article_content">
		<h3 class="article_content--title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); echo sprintf($format, $currency, $price); ?></a></h3>
		<small class="article_content--artist"><?php echo sprintf($artist); ?></small>
		<div class="article_content--excerpt">
			<?php the_excerpt(); ?>
		</div>

		<aside class="content_meta">
			<ul class="meta_list">
				<li class="meta_list--item css-date">
					<a class="btn btn-primary btn-sm" href="<?php the_permalink();?>" title="<?php the_title();?>">More</a>
				</li>
			</ul>
		</aside>

	</div>
</div>